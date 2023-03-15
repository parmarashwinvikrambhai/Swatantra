<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function practice(){
        return view('client/practice');
    }

    public function client(){
        return view('client/clients');
    }

    public function resources(){
        return view('client/resources');
    }

    public function registration(){
        return view('client/registration');
    }

    public function contact(){
        return view('client/contact');
    }

    public function case(){
        return view('client/case');
    }
}
