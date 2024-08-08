<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function path($userId)
    {
        // Retrieve all file_path for the specified user
        $filePaths = FileManager::where('user_id', $userId)
            ->pluck('file_path'); // Get only the file_path column

        // return $filePaths;
        return URL::to('/tugas/' . $filePaths, [], false);
    }

    public function getAllFilePaths()
    {
        // Retrieve all file_path values for all users
        $filePaths = FileManager::pluck('file_path'); // Get only the file_path column

        return $filePaths;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FileManager $fileManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileManager $fileManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileManager $fileManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileManager $fileManager)
    {
        //
    }
}
