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

    public function update(Request $request, $id)
    {
        $request->validate([
            'display_name' => 'required',
            'name' => 'required',
            'is_admin' => 'nullable|boolean',
            'role' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $user = User::findOrFail($id);
    
        $user->display_name = $request->display_name;
        $user->name = $request->name;
        $user->is_admin = $request->boolean('is_admin');
        $user->role = $request->role;
    
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
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
            'display_name' => 'required',
            'name' => 'required',
            'password' => 'required|min:3',
            'is_admin' => 'nullable|boolean',
            'role' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $email = strtolower(str_replace(' ', '.', $request->name)) . '@cendrawasih.ac.id';

        $user = new User();
        $user->display_name = $request->display_name;
        $user->name = $request->name;
        $user->email = $email;
        $user->password = bcrypt($request->password);
        $user->is_admin = $request->boolean('is_admin');
        $user->role = $request->role;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('', $imageName, 'foto_guru');
            $user->photo = 'foto_guru/' . $imageName;
        }

        $user->save();

        return redirect()->route('showuserlist')->with('success', 'User successfully added.');
    }
}
