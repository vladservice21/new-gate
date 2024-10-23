<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
//use Spatie\LaravelPdf\Facades\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use GuzzleHttp\Client;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ApiController extends Controller
{
    public function request(Request $request)
    {

        $params = array(
            'name' => $request->post('name'),
            'counterweight_type' => $request->post('counterweight_type'),
            'material' => $request->post('material'),
            'gate_opening' => $request->post('gate_opening'),
            'gate_height' => $request->post('gate_height'),
            'internal_frame_tubes_width' => $request->post('internal_frame_tubes_width'),
            'internal_frame_tubes_height' => $request->post('internal_frame_tubes_height'),
            'clearance_under_gate' => $request->post('clearance_under_gate'),
            //'set_count_seven' => $request->post('set_count_seven'),
            'guide' => $request->post('guide'),
            'total_length' => $request->post('total_length'),
            'pages' => $request->post('pages'),
            'pipe_angle' => $request->post('pipe_angle'),
            'frame' => $request->post('frame'),
            'created_at' => date("Y-m-d H:i:s"),
        );

        $invalid_value = '';

        foreach ($params as $key => $value) {
            if(empty($value) && $value != 0) {
                $invalid_value .= $key.',';
            }
        }

        if(!empty($invalid_value)) {
            $invalid_value = substr($invalid_value, 0, -1);
            return 'Empty params ['.$invalid_value.']';
        } else {

            //DB::table('api_requests')->insert($params);
            $id = DB::table('api_requests')->insertGetId($params,'id');
            return response()->json([
                'status' => 'success',
                'url' => route('viewpdf', ['id' => $id]),
            ]);
        }
    }

    public function generateParametrPdf($id) {
        $params = (array)DB::table('api_requests')->where('id', $id)->first();
        //$params = json_decode($params, true);
        ////////////////
        $counterweight_type = $params["counterweight_type"];
        $material = $params["material"];
        $gate_opening = intval($params["gate_opening"]);
        $gate_height = $params["gate_height"];
        $clearance_under_gate = $params["clearance_under_gate"];
        //$set_count_seven = $params["set_count_seven"];
        $guide = $params["guide"];
        $manual_a = $params["total_length"];
        $pages = $params["pages"];
        $pages = "00" . $pages;
        $pipe_angle = $params["pipe_angle"];
        $wicket = $params['wicket'];
        $wicket_left = $params['wicket_left'];
        $wicket_width = $params['wicket_width'];

        $gate_num_triang = 0;
        $gate_num_square = 0;

        if ($gate_opening < 3500) {
            $gate_num_triang = 1;
        } else if ($gate_opening > 3499 && $gate_opening < 4300) {
            $gate_num_triang = 2;
        } else if ($gate_opening > 4299 && $gate_opening < 5000) {
            $gate_num_triang = 3;
        } else if ($gate_opening > 4999 && $gate_opening < 5700) {
            $gate_num_triang = 4;
        } else if ($gate_opening > 5699 && $gate_opening <= 6400) {
            $gate_num_triang = 5;
        }

        if ($gate_opening < 3500) {
            $gate_num_square = 1;
        } else if ($gate_opening > 3499 && $gate_opening < 4100) {
            $gate_num_square = 2;
        } else if ($gate_opening > 4099 && $gate_opening < 4700) {
            $gate_num_square = 3;
        } else if ($gate_opening > 4699 && $gate_opening < 5300) {
            $gate_num_square = 4;
        } else if ($gate_opening > 5299 && $gate_opening < 5900) {
            $gate_num_square = 5;
        } else if ($gate_opening > 5899 && $gate_opening < 6500) {
            $gate_num_square = 6;
        } else if ($gate_opening > 6499 && $gate_opening < 7100) {
            $gate_num_square = 7;
        } else if ($gate_opening > 7099 && $gate_opening < 7700) {
            $gate_num_square = 8;
        } else if ($gate_opening > 7699 && $gate_opening <= 8300) {
            $gate_num_square = 9;
        }
        //ob_start();
        $result = '';
        if ($counterweight_type == "square") {
            if ( $pipe_angle == 45 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/square/45deg/gate" . $gate_num_square .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            } else if ( $pipe_angle == 90 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/square/90deg/gate" . $gate_num_square .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            }
        } else {
            if ( $pipe_angle == 45 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/triangular/45deg/gate" . $gate_num_triang .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            } else if ( $pipe_angle == 90 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/triangular/90deg/gate" . $gate_num_triang .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            }
        }
        return $result;
    }
    public function viewpdf($id) {

        //file_put_contents("1.html", $html_result);
        return response()->view('pdf', [
            'html' => self::generateParametrPdf($id),
            'document_root' => $_SERVER['DOCUMENT_ROOT'],
            'app_url' => $_SERVER['APP_URL'],
        ]);
        //return $result;
    }

    public function viewpdfcreate($id) {
        $params = (array)DB::table('api_requests')->where('id', $id)->first();
        //$params = json_decode($params, true);
        ////////////////
        $counterweight_type = $params["counterweight_type"];
        $material = $params["material"];
        $gate_opening = intval($params["gate_opening"]);
        $gate_height = $params["gate_height"];
        $clearance_under_gate = $params["clearance_under_gate"];
        //$set_count_seven = $params["set_count_seven"];
        $guide = $params["guide"];
        $manual_a = $params["total_length"];
        $pages = $params["pages"];
        $pages = "00" . $pages;
        $pipe_angle = $params["pipe_angle"];
        $wicket = $params['wicket'];
        $wicket_left = $params['wicket_left'];
        $wicket_width = $params['wicket_width'];

        $gate_num_triang = 0;
        $gate_num_square = 0;

        if ($gate_opening < 3500) {
            $gate_num_triang = 1;
        } else if ($gate_opening > 3499 && $gate_opening < 4300) {
            $gate_num_triang = 2;
        } else if ($gate_opening > 4299 && $gate_opening < 5000) {
            $gate_num_triang = 3;
        } else if ($gate_opening > 4999 && $gate_opening < 5700) {
            $gate_num_triang = 4;
        } else if ($gate_opening > 5699 && $gate_opening <= 6400) {
            $gate_num_triang = 5;
        }

        if ($gate_opening < 3500) {
            $gate_num_square = 1;
        } else if ($gate_opening > 3499 && $gate_opening < 4100) {
            $gate_num_square = 2;
        } else if ($gate_opening > 4099 && $gate_opening < 4700) {
            $gate_num_square = 3;
        } else if ($gate_opening > 4699 && $gate_opening < 5300) {
            $gate_num_square = 4;
        } else if ($gate_opening > 5299 && $gate_opening < 5900) {
            $gate_num_square = 5;
        } else if ($gate_opening > 5899 && $gate_opening < 6500) {
            $gate_num_square = 6;
        } else if ($gate_opening > 6499 && $gate_opening < 7100) {
            $gate_num_square = 7;
        } else if ($gate_opening > 7099 && $gate_opening < 7700) {
            $gate_num_square = 8;
        } else if ($gate_opening > 7699 && $gate_opening <= 8300) {
            $gate_num_square = 9;
        }
        //ob_start();
        $result = '';
        if ($counterweight_type == "square") {
            if ( $pipe_angle == 45 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/square/45deg/gate" . $gate_num_square .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            } else if ( $pipe_angle == 90 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/square/90deg/gate" . $gate_num_square .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            }
        } else {
            if ( $pipe_angle == 45 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/triangular/45deg/gate" . $gate_num_triang .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            } else if ( $pipe_angle == 90 ) {
                $result = $this->include_file($_SERVER['DOCUMENT_ROOT'] . "/parts/templates/triangular/90deg/gate" . $gate_num_triang .".php", $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width);
            }
        }

        //file_put_contents("1.html", $html_result);
        /*return response()->view('pdf_create', [
                    'html' => $result,
                    'document_root' => $_SERVER['DOCUMENT_ROOT'],
                    'app_url' => $_SERVER['APP_URL'],
                    ]);*/
        $pdf = PDF::loadView('pdf_create', [
            'html' => $result,
            'document_root' => $_SERVER['DOCUMENT_ROOT'],
            'app_url' => $_SERVER['APP_URL'],
        ]);
        return $pdf->download('pdf.pdf');


        //return $result;
    }

    public function include_file($file, $counterweight_type, $material, $gate_opening, $gate_height, $clearance_under_gate, $guide, $manual_a, $pages, $pipe_angle, $gate_num_triang, $gate_num_square, $wicket, $wicket_left, $wicket_width) {
        ob_start();
        include($file);
        return ob_get_clean();
    }

    public function test() {
        /*$process = new Process(['/usr/local/bin/node20', '/var/www/drawing.holygrail.com.ua/public/test.js']);
        $process->run();

      if (!$process->isSuccessful()) {
          throw new ProcessFailedException($process);
      }

      return response()->json([
          'message' => 'Pdf generated successfully!',
          'output' => $process->getOutput()
      ]);*/
        return PDF::loadFile('https://drawing.holygrail.com.ua/viewpdf/37')->download('37.pdf');
    }
}
?>
