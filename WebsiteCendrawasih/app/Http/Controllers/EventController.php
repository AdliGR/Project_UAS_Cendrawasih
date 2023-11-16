<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class EventController extends Controller
{
    public function createevent()
    {
        return view('addevent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_event' => 'required|string|max:255',
            'date' => 'required|date',
            'deskripsi' => 'required|string',
        ]);

        $existingEvent = Gallery::where('name_event', $request->input('name_event'))->first();

        if ($existingEvent) {
            return redirect()->route('createevent')->with('error', 'Event with the same name already exists!');
        }

        Gallery::create([
            'name_event' => $request->input('name_event'),
            'date' => $request->input('date'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
        return redirect()->route('createevent')->with('status', 'Gallery created successfully!');
    }
}
