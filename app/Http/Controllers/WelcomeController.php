<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // http://127.0.0.1:8000/test?name=Pala
    public function welcome(Request $request) {
        if ($request->name == 'Pala') {
            return view('test', ["name"=> 'Pala']);
        } else {
            return redirect('/');
        }

        // return view('test', ["name"=> "Pala"]);
    }
}
