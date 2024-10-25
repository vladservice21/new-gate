<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class DeleteOldPdfs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-old-pdfs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $files = File::files(storage_path('app/public/pdfs/'));
        $now = Carbon::now();
        $fileExpiration = 24 * 60 * 60;
        foreach ($files as $file) {
            $fileTime = File::lastModified($file);

            if ($now->timestamp - $fileTime > $fileExpiration) {
                File::delete($file);
                Log::info('Delete olf PDF: ' . $file->getFilename());
            }
        }
    }
}
