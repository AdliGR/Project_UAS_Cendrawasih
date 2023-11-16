<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class TambahGaleryController extends Controller
{
    public function Galery()
    {
        $galleries = Gallery::all();
        return view('addgalery', compact('galleries'));
    }

    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('Galery')->with('status', 'Gallery deleted successfully');
    }

}
