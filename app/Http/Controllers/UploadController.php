<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    public function index()
    {
        return view('upload.index');
    }

  
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',  
            'author' => 'required|string|max:255',  
            'file' => 'required|file|mimes:jpg,png,pdf|max:10240', 
        ]);

        
        $file = $request->file('file');
        $filePath = $file->storeAs('uploads', $file->getClientOriginalName(), 'public');

        
        Upload::create([
            'title' => $request->title,
            'author' => $request->author, 
            'filename' => $file->getClientOriginalName(),
            'filepath' => $filePath,
        ]);

       
        return redirect()->route('upload.show')->with('success', 'File berhasil diupload!');
    }

    
    public function show()
    {
        $uploads = Upload::all(); 
        return view('upload.result', compact('uploads'));
    }
}
