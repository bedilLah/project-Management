<?php

namespace App\Http\Controllers;

use App\Models\ProjectDefinition;
use Illuminate\Http\Request;

class ProjectDefinitionController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            $projectDefinition = projectDefinition::all();
<<<<<<< HEAD
            return view('initiating.projectDefinition.projectDefinition', compact(['projectDefinition']));
        }elseif(Auth()->User()->roles == 'adminInitiating'){
            $projectDefinition = projectDefinition::all();
            return view('initiating.projectDefinition.projectDefinition', compact(['projectDefinition']));
=======
            return view('initiating.projectDefinition', compact(['projectDefinition']));
        }elseif(Auth()->User()->roles == 'adminInitiating'){
            $projectDefinition = projectDefinition::all();
            return view('initiating.projectDefinition', compact(['projectDefinition']));
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 

    public function create()
    {
        $projectDefinition = projectDefinition::all();
<<<<<<< HEAD
        return view('initiating.projectDefinition.projectDefinition', compact(['projectDefinition']));
=======
        return view('initiating.projectDefinition', compact(['projectDefinition']));
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
    }

    public function store(Request $request)
    {
        ProjectDefinition::create([
            'name_project'=>$request->name_project,
            'code_project'=>$request->code_project,
            'contract_value'=>$request->contract_value,
            'bussines_line'=>$request->bussines_line,
            'date'=>$request->date,
            'status'=>$request->status,
            'source_ofFunds'=>$request->source_ofFunds,
            'schema_bussines'=>$request->schema_bussines,
            'contract_duration'=>$request->contract_duration,
            'warranty_period'=>$request->warranty_period,
            $request->except(['_token']),
        ]);
        return redirect ('/initiating');
    }

    public function destroy($id)
    {
        $projectDefinition = projectDefinition::find($id);
        $projectDefinition->delete();
        return redirect('/initiating');
    }
}
