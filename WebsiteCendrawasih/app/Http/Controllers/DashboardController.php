<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Fasilitas;
use App\Models\Event;

class DashboardController extends Controller
{
    public function Admindashboard ()
    {
        $galleries = Gallery::all();
        $fasilitas = Fasilitas::all();
        $events = Event::all();

        return view('dashboard', compact('galleries', 'fasilitas', 'events'));
    }
}
