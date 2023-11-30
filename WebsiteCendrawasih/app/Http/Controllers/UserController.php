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

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('showuserlist')->with('success', 'User successfully deleted.');
    }

    public function edit(User $user)
    {
        return view('edituser', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'umur' => 'nullable|integer|min:0',
            'gender' => 'nullable|in:male,female',
            'tanggal_lahir' => 'nullable|date',
            'role' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $isAdmin = $request->has('is_admin') ? 1 : 0;
    
        $user->name = $request->name;
        $user->umur = $request->umur;
        $user->gender = $request->gender;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->role = $request->role;
        $user->is_admin = $isAdmin;
    
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('', $imageName, 'foto_guru');
            $user->photo = 'foto_guru/' . $imageName;
        }
    
        $user->save();
    
        return redirect()->route('showuserlist')->with('success', 'User successfully updated.');
    }

    public function create()
    {
        return view('tambahuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'umur' => 'nullable|integer|min:0',
            'gender' => 'nullable|in:male,female',
            'role' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $isAdmin = $request->has('is_admin') ? 1 : 0;

        $nameParts = explode(' ', $request->name);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : '';

        $email = strtolower($firstName . '.' . $lastName) . '@cendrawasih.ac.id';
        $password = $request->tanggal_lahir ? str_replace(['/', ''], '', $request->tanggal_lahir) : '';

        $request->merge([
            'email' => $email,
            'password' => $password,
        ]);

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->umur = $request->umur;
        $user->gender = $request->gender;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->role = $request->role;
        $user->is_admin = $isAdmin;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('', $imageName, 'foto_guru');
            $user->photo = 'foto_guru/' . $imageName;
        }

        $user->save();

        return redirect()->route('showuserlist')->with('success', 'Pengguna berhasil ditambahkan.');
    }
}
