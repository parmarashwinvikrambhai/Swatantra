<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'category' => 'required|in:client,lawyer',
            'email' => 'required|email|unique:users,email',
            'firstname' => 'required',
            'password' => 'required|min:8'
        ]);
        // dd($request->all());
        Users::create([
            'category' => $request->category,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'You have successfully registered.');
        // dd($request->all());
        // return view('welcome');
    }



    public function login(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $checkLogin = Users::select('password')->where('email', $request->email)->first();

        if (Hash::check($request->password, $checkLogin['password'])) {
            $user = Users::select("category", "id", "firstname", "email")->where("email", $request->email)->first();
            $request->Session()->put('id', $user['id']);
            $request->Session()->put('firstname', $user['firstname']);
            $request->Session()->put('email', $user['email']);

            if ($user['category'] == $request->category) {
                if ($request->category == "client") {
                    // $id = session()->get('id');
                    // $postArtical = Cases::select('client_name', 'case_title', 'case_type', 'case_details', 'photo', 'created_at')->where('client_id', '!=', $id)->get()->toArray();
                    $postArtical = Cases::all();
                    return redirect()->route('getClients')->with('postArtical', $postArtical);
                // return redirect()->route('getDocument');
                } elseif ($request->category == "lawyer") {
                    $postArtical = Cases::all();
                    return redirect()->route('dashboard')->with('postArtical', $postArtical);
                }
            }
        }

        return view("login")->with('errormsg', 'Entered Email or Password may wrong.');
    }

    public function indexx()
    {
        return view('login');
    }

    public function index()
    {
        return view('registration');
    }

    public function logout()
    {
        // session()->forget('id');
        Auth::logout();
        return view('client.index');
    }

    // public function indexing()
    // {
    //     return view('client/index');
    // }
}
