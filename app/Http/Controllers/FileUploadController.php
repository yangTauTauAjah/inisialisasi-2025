<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|file|max:102400', // Maksimal ukuran 100MB
        ]);

        // Dapatkan file yang diunggah
        $file = $request->file('file');

        // Dapatkan nama file asli
        $filename = $file->getClientOriginalName();

        // Simpan file ke storage (default: storage/app/public/uploads)
        $filePath = $file->storeAs('uploads', $filename, 'public');

        // Mengembalikan respons dengan pesan sukses
        return back()
            ->with('success', 'File berhasil diunggah!')
            ->with('file', $filePath);
    }
}
