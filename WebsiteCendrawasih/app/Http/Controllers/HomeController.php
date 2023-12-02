<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Gallery;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        $galleries = Gallery::all();
        $users = User::where(function($query) {
            $query->where('role', 'Kepala sekolah')
                ->orWhere('role', 'Wakil Kepala sekolah')
                ->orWhere('role', 'kepala sekolah')
                ->orWhere('role', 'wakil kepala sekolah');
        })->get();

        foreach ($galleries as $gallery) {
            $foto = Foto::where('acara', $gallery->name_event)->first();
            $gallery->gambar_path = $foto ? asset($foto->file_path_foto_comp) : '';
        }

        return view('home', compact('galleries', 'users'));
    }

    public function home2(){
        return view('home2');
    }

    public function index(){
        return view('index');
    }

    public function aboutus(){
        return view('about');
    }

    public function gallery()
    {
        $acaraList = Foto::distinct()->pluck('acara');
        $firstAcara = $acaraList->first();

        return view('gallery', compact('acaraList', 'firstAcara'));
    }

    public function show($acara)
    {
        $photos = Foto::where('acara', $acara)->get();

        return response()->json(['photos' => $photos]);
    }
}
