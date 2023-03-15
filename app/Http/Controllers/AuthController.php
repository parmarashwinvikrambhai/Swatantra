<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        Users::create([
            'email' => $request->email,
            'firstname' => $request->firstname,
            'password' => Hash::make($request->password)
        ]);
        // dd($request->all());
        return view('welcome');
    }

    public function index()
    {
        return view('registration');
    }

    public function indexing(){
        return view('client/index');
    }
}
