<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\Group;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();
        return view('back_end.user.list', compact('users'));
    }

    function create()
    {
        return view('back_end.user.create');
    }

    function store(Request $request) {
        $user = new User();
        $user->name = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->role=$request->role;
        $user->save();

        return redirect()->route('users.index');
    }

    function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
