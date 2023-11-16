<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();

        return view('fasilitas', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitascreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fasilitas' => 'required|string',
            'total' => 'nullable|integer',
            'note' => 'nullable|string',
        ]);

        Fasilitas::create($request->all());

        return redirect()->route('fasilitas.create')->with('status', 'Fasilitas berhasil ditambahkan');
    }

    public function editForm($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('fasilitasedit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fasilitas' => 'required',
            'total' => 'required',
            'note' => 'required',
        ]);

        $fasilitas = Fasilitas::find($id);

        $fasilitas->fasilitas = $request->input('fasilitas');
        $fasilitas->total = $request->input('total');
        $fasilitas->note = $request->input('note');

        $fasilitas->save();

        return redirect(route('index.fasilitas'))->with('status', 'Fasilitas updated successfully');
    }


    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);

        if (!$fasilitas) {
            return redirect()->route('index.fasilitas')->with('error', 'Fasilitas not found');
        }

        $fasilitas->delete();

        return redirect()->route('index.fasilitas')->with('status', 'Fasilitas berhasil dihapus');
    }

}
