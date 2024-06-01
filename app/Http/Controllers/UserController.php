<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('users', compact('users'));
    }

    public function createUser()
    {
        $users = User::latest()->get();
        return view('user', compact('users'));
    }

    public function storeUser(Request $request)
    {
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Simpan password dengan enkripsi
        $user->save();

        return redirect()->back();
    }



    public function storePhone(Request $request)
    {
        $phone = new Phone;
        $phone->user_id = $request->user_id;
        $phone->phone = $request->phone;
        $phone->save();

        return redirect()->back();
    }
}
