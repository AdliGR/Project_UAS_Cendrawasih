<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Fasilitas;

class DashboardController extends Controller
{
    public function Admindashboard ()
    {
        $galleries = Gallery::all();
        $fasilitas = Fasilitas::all();

        return view('dashboard', compact('galleries', 'fasilitas'));
    }
}
