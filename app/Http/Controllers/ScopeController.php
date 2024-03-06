<?php

namespace App\Http\Controllers;

use App\Models\scope;
use Illuminate\Http\Request;

class ScopeController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.scope.scope');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('planning.scope.scope');
    }

    public function store(Request $request)
    {
        scope::create([
            'requirements' => $request->requirements,
            'category' => $request->category,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $scope = scope::find($id);
        $scope->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        return view('planning.risk.edit');
    }

    public function update(Request $request, $id)
    {
        $scope= scope::find($id);
        $scope->update([
            'requirements' => $request->requirements,
            'category' => $request->category,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }

}
