<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\SubTask;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class FileUploadController extends Controller
{
    public function fileUpload(Request $request, $id)
    {
        $subTask = SubTask::find($id); 

        if (\Carbon\Carbon::now() >= \Carbon\Carbon::parse($subTask->task_due)) {
            return redirect()->back()->with('error', 'The deadline for this task has passed.');
        }

        // initialised 
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

        // if not uploaded
        if (!$receiver->isUploaded()) {
            return redirect()->back()->with('error', 'Check your internet connection');
        }

        $fileReceived = $receiver->receive();

        if ($fileReceived->isFinished()) {

            // uploaded file
            $file = $fileReceived->getFile();

            // file extension
            $fileExtension = $file->getClientOriginalExtension();

            $filename = "tugas" . '.' . $fileExtension;

            $storage = Storage::disk(config('filesystems.default'));
            $path = Storage::disk('public')->putFileAs('videos', $file, $filename);

            // Delete chunked files
            unlink($file->getPathname());

            FileManager::create([
                'SubTask_id' => $id,
                'user_id' => Auth::id(),
                'file_name' => $filename,
                'file_path' => $path
            ]);


        }

        $handler = $fileReceived->handler();
        return [
            'done' => $handler->getPercentageDone(),
            'status' => true
        ];
    }

    public function store(Request $request, $id)
    {
        FileManager::create([
            'SubTask_id' => $id,
            'user_id' => Auth::id(),
            'file_name' => "-",
            'file_path' => '-',
            'file_links' => $request->isLinks
        ]);

        return redirect()->back();
    }
}
