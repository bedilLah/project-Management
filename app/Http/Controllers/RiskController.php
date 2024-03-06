<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

use Illuminate\Http\Request;
use App\Models\Risk;
use App\Models\ProjectDefinition;
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Risk;
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69

class RiskController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $risks = Risk::all();
<<<<<<< HEAD
            $projectDefinition = ProjectDefinition::all();
            return view('planning.risk.risk', compact('projectDefinition'));
=======
            $nameProjects = $this->getNameProjects();
            return view('planning.risk', ['risks' => $risks, 'nameProjects' => $nameProjects]);
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
<<<<<<< HEAD
        $projectDefinition = ProjectDefinition::all();
        return view('planning.risk.risk', compact('projectDefinition'));
=======
        return view('planning.add_risk');
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
    }

    public function store(Request $request)
    {
        Risk::create([
<<<<<<< HEAD
            'start_date' => $request->start_date,
            'description_ofrisk' => $request->description_ofrisk,
            'submitter' => $request->submitter,
            'name_project' => $request->name_project,
            'probability_factor' => $request->probability_factor,
            'impact_factor' => $request->impact_factor,
            'exposure' => $request->exposure,
            'Risk_reponse_type'=>$request->Risk_reponse_type,
            'Risk_reponse_plan'=>$request->Risk_reponse_plan,
            'impact_description'=>$request->impact_description,
            'assigned_to'=>$request->assigned_to,
            'status'=>$request->status,
            'due_date'=>$request->due_date,
            $request->except(['_token']),
=======
            'name_project' => $request->name_project,
            'risk_type' => $request->risk_type,
            'risk_owner' => $request->risk_owner,
            'description_ofrisk' => $request->description_ofrisk,
            'risk_rating' => $request->risk_rating,
            'risk_treatment' => $request->risk_treatment,
            'describe_action' => $request->describe_action,
            'probability'=>$request->probability,
            'impact'=>$request->impact,
            'impact_description'=>$request->impact_description,
            'action_toreduce'=>$request->action_toreduce,
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    
<<<<<<< HEAD
=======
    public function getNameProjects()
    {
        $nameProjects = DB::table('project_definitions')->distinct()->pluck('name_project')->toArray();
        return $nameProjects;
    }
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69

    public function destroy($id)
    {
        $risks = Risk::find($id);
        $risks->delete();
        return redirect('/planning');
    }

<<<<<<< HEAD
    public function show($id)
    {
        $risks = Risk::find($id);
        $projectDefinition = ProjectDefinition::all();
        return view('planning.risk.edit', compact('risks', 'projectDefinition'));
    }

    public function update(Request $request, $id)
    {
        $risks= Risk::find($id);
        $risks->update([
            'start_date' => $request->start_date,
            'description_ofrisk' => $request->description_ofrisk,
            'submitter' => $request->submitter,
            'name_project' => $request->name_project,
            'probability_factor' => $request->probability_factor,
            'impact_factor' => $request->impact_factor,
            'exposure' => $request->exposure,
            'Risk_reponse_type'=>$request->Risk_reponse_type,
            'Risk_reponse_plan'=>$request->Risk_reponse_plan,
            'impact_description'=>$request->impact_description,
            'assigned_to'=>$request->assigned_to,
            'status'=>$request->status,
            'due_date'=>$request->due_date,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }

=======
    public function edit($id)
    {
        $risks = Risk::find($id);
        $nameProjects = $this->getNameProjects();
        return view('planning.risk', compact('risk', 'nameProjects'));
    }
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
}
