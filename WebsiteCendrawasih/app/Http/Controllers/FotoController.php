<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Foto;
use App\Models\Gallery;

class FotoController extends Controller
{
    public function addfoto()
    {
        $events = Gallery::pluck('name_event', 'name_event');
        return view('addfoto', compact('events'));
    }

    public function listfoto(Request $request)
    {
        $name_event = $request->input('name_event');

        $gallery = Gallery::where('name_event', $name_event)->first();

        if (!$gallery) {
            abort(404);
        }

        $photos = Foto::where('acara', $gallery->name_event)->get();

        return view('listfoto', [
            'name_event' => $gallery->name_event,
            'photos' => $photos
        ]);
    }

    public function deletePhoto(Request $request)
    {
        $photoIdToDelete = $request->input('photoToDelete');
    
        // Mengambil foto yang akan dihapus
        $photoToDelete = Foto::find($photoIdToDelete);
    
        // Hapus file fisik dari storage atau folder
        if (file_exists(public_path($photoToDelete->file_path))) {
            unlink(public_path($photoToDelete->file_path));
        }
    
        // Hapus record dari database
        $photoToDelete->delete();
    
        return redirect()->back()->with('success', 'Foto berhasil dihapus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'acara' => 'required|string',
            'file_path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $acara = $request->input('acara');
    
        if ($request->hasFile('file_path')) {
            foreach ($request->file('file_path') as $file) {
                $nama_file = $file->getClientOriginalName();
                $fileExist = Foto::where('nama_file', $nama_file)->exists();
    
                if (!$fileExist) {
                    $file_path = $file->storeAs('', $nama_file, 'public_foto');
    
                    Foto::create([
                        'nama_file' => $nama_file,
                        'acara' => $acara,
                        'file_path' => 'foto/' . $nama_file,
                    ]);
                } else {
                    return redirect()->route('foto.store')->with('error', 'File sudah ada.');
                }
            }
    
            return redirect()->route('foto.store')->with('status', 'Foto berhasil ditambahkan.');
        } else {
            return redirect()->route('foto.store')->with('error', 'Tidak ada file yang diunggah.');
        }
    }
}
