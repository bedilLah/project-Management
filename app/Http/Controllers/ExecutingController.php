<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExecutingController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminExecuting' || Auth()->user()->roles == 'projectManager') {
            return view('executing.index');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
        
=======
        if (Auth()->User()->roles == 'superadmin'){
            return view('executing.index');
        }elseif(Auth()->User()->roles == 'adminExecuting'){
            return view('executing.index');
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
    } 
}
