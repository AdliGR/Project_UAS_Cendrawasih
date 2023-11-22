<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function showuserlist()
    {
        $users = User::all();
        return view('userlist', ['users' => $users]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('showuserlist')->with('status', 'Pengguna berhasil dihapus.');
    }

    public function edit(User $user)
    {
        return view('usersedit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('showuserlist')->with('success', 'User updated successfully');
    }

    public function create()
    {
        return view('tambahuser');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',
        ]);

        $isAdmin = $request->has('is_admin') ? 1 : 0;

        $user = new User([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'is_admin' => $isAdmin,
        ]);

        $user->save();


        return redirect()->route('users.create')->with('status', 'User berhasil dibuat!');
    }
}
