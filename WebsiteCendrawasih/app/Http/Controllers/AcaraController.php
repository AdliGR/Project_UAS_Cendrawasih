<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AcaraController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('acara', compact('events'));
    }

    public function create()
    {
        return view('addacara');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_acara' => 'required',
            'detail_acara' => 'required',
            'tanggal_acara' => 'required|date',
            'penanggung_jawab' => 'required',
            'jam' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('index.acara')->with('status', 'Event added successfully');
    }

    public function editacara($id)
    {
        $event = Event::find($id);
        return view('editacara', compact('event'));
    }

    public function updateacara(Request $request, $id)
    {
        $request->validate([
            'nama_acara' => 'required',
            'detail_acara' => 'required',
            'tanggal_acara' => 'required|date',
            'penanggung_jawab' => 'required',
            'jam' => 'required',
        ]);

        $event = Event::find($id);
        $event->update($request->all());

        return redirect()->route('index.acara')->with('status', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('index.acara')->with('status', 'Event deleted successfully');
    }
}
