<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\ApiRequest;
use BalajiDharma\LaravelAdminCore\Actions\User\CreateUser;
use BalajiDharma\LaravelAdminCore\Actions\User\UpdateUser;
use BalajiDharma\LaravelAdminCore\Requests\StoreUserRequest;
use BalajiDharma\LaravelAdminCore\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Google\Client;
use Google\Service\Drive;
use Spatie\Browsershot\Browsershot;
class CalcController extends Controller
{
    protected $apiController;
    public function __construct(ApiController $apiController)
    {
        $this->middleware('can:user list', ['only' => ['index', 'show']]);
        $this->middleware('can:user create', ['only' => ['create', 'store']]);
        $this->middleware('can:user edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:user delete', ['only' => ['destroy']]);
        $this->apiController = $apiController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('admin.form_calc');
    }

    public function store(Request $request)
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
            'wicket' => $request->post('wicket'),
            'wicket_left' => $request->post('wicket_left'),
            'wicket_width' => $request->post('wicket_width'),
            'created_at' => date("Y-m-d H:i:s"),
        );

        $invalid_value = '';

        foreach ($params as $key => $value) {
            if($key != 'wicket' && $key != 'wicket_left' && $key != 'wicket_width') {
            if(empty($value)) {
                $invalid_value .= $key.',';
            }
            }
        }

        if(!empty($invalid_value)) {
            $invalid_value = substr($invalid_value, 0, -1);
            $status = 'Заповніть усі поля';
            return redirect()->route('admin.form_calc.index')->with('error', $status);
        } else {

        //DB::table('api_requests')->insert($params);
        $id = DB::table('api_requests')->insertGetId($params,'id');
        $file_link = $this->uploadToDrive(route('viewpdf', $id), $params['name'], $id);
        $status = 'Розрахунок створено. <a href="'.$file_link.'" target="_blank">'.$file_link.'</a>';
        return redirect()->route('admin.form_calc.index')->with('message', $status);
        }
    }

    public function uploadToDrive($url, $name, $id) {
//        $url = $request->query('url');

        if (!$url || !filter_var($url, FILTER_VALIDATE_URL)) {
            return response()->json(['error' => 'error URL'], 400);
        }

        try {
            $filename = Str::uuid() . '.pdf';
            $filepath = storage_path('app/public/pdfs/' . $filename);

            if (!Storage::exists('app/public/pdfs')) {
                Storage::makeDirectory('app/public/pdfs');
            }

            try {
                $params = $this->apiController->generateParametrPdf($id);
                $view = view('pdf', [
                    'html' => $params,
                    'document_root' => $_SERVER['DOCUMENT_ROOT'],
                    'app_url' => $_SERVER['APP_URL']
                ])->render();
                $chromePath = '/usr/bin/google-chrome';

                Browsershot::html($view)
                    ->noSandbox()
//                    ->setChromePath($chromePath)
                    ->timeout(60000)
                    ->format('A4')
                    ->save($filepath);

            } catch (\Exception $e) {
                return response()->json(['error' => 'Error create url'], 400);
            }

            $pdfUrl = '/storage/pdfs/' . $filename;

        }catch (\Exception $e) {
            Log::alert( 'Error create url' . $e->getMessage());
            return response()->json(['error' => 'Error create url' . $e->getMessage()], 400);
        }
//        $create_pdf = json_decode(file_get_contents("http://drawing-vorota.shop:3000/?url=".$url), true);
        $content = file_get_contents($filepath);

        $client = new Client();
        $client->setAuthConfig(env('GOOGLE_APPLICATION_CREDENTIALS'));
        $client->addScope(Drive::DRIVE_FILE);

        // Создание сервиса Google Drive
        $service = new Drive($client);

        // Пример загрузки файла
        $fileMetadata = new Drive\DriveFile([
            'name' => $name,
            'mimeType' => 'application/pdf',
            'parents' => [env('GOOGLE_DRIVE_FOLDER_ID')]
        ]);


        $file = $service->files->create($fileMetadata, [
            'data' => $content,
            'mimeType' => 'application/pdf',
            'uploadType' => 'multipart',
            'fields' => 'id'
        ]);

        $fileId = $file->id;
        $fileLink = "https://drive.google.com/file/d/{$fileId}/view?usp=sharing";
        DB::table('api_requests')
        ->where('id', $id)
        ->update(['google_file_link' => $fileLink]);
        return $fileLink;
    }


}
