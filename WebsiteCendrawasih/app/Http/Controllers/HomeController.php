<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class HomeController extends Controller
{
    public function home(){
        
        $fotos = Foto::all();
        return view('home', compact('fotos'));
    }

    public function home2(){
        return view('home2');
    }
}
