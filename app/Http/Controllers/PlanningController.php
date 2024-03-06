<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\BebanBarang;
use App\Models\BebanSubkon;
use App\Models\Procurement;
use App\Models\scope;
use App\Models\Stakeholder;
use Illuminate\Http\Request;
use App\Models\Risk;
use App\Models\quality;
=======
use Illuminate\Http\Request;
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69

class PlanningController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
<<<<<<< HEAD
            $risks = Risk::all();
            $scope = scope::all();
            $stakeholder = Stakeholder::all();
            $quality = quality::all();
            $procurement = Procurement::all();
            $bebanbarang = BebanBarang::all();
            $bebansubkon = BebanSubkon::all();
            return view('planning.index', compact('risks', 'scope', 'stakeholder', 'quality','procurement','bebanbarang','bebansubkon'));
        }elseif(Auth()->User()->roles == 'adminPlanning'){
            $risks = Risk::all();
            $scope = scope::all();
            $stakeholder = Stakeholder::all();
            $quality = quality::all();
            $procurement = Procurement::all();
            $bebanbarang = BebanBarang::all();
            $bebansubkon = BebanSubkon::all();
            return view('planning.index', compact('risks', 'scope', 'stakeholder', 'quality','procurement','bebanbarang','bebansubkon'));
=======
            return view('planning.index');
        }elseif(Auth()->User()->roles == 'adminPlanning'){
            return view('planning.index');
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }
}
