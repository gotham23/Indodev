<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    // Menampilkan halaman upload
    public function index()
    {
        return view('upload.index');
    }

    // Menyimpan file yang diupload
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',   // Validasi title
            'author' => 'required|string|max:255',  // Validasi author
            'file' => 'required|file|mimes:jpg,png,pdf|max:10240', // Validasi file
        ]);

        // Ambil file yang diupload
        $file = $request->file('file');
        $filePath = $file->storeAs('uploads', $file->getClientOriginalName(), 'public');

        // Simpan data title, author, dan file ke database
        Upload::create([
            'title' => $request->title,
            'author' => $request->author,  // Menyimpan nama penulis
            'filename' => $file->getClientOriginalName(),
            'filepath' => $filePath,
        ]);

        // Redirect ke halaman hasil upload setelah sukses
        return redirect()->route('upload.show')->with('success', 'File berhasil diupload!');
    }

    // Menampilkan hasil upload
    public function show()
    {
        $uploads = Upload::all(); // Ambil semua data upload dari database
        return view('upload.result', compact('uploads'));
    }
}
