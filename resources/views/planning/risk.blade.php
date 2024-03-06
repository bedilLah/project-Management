@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <center>
    <div class="navbar-nav align-items-center ms-auto">
        <a href="/planning" class="nav-link">
            <i class="fa fa-home"></i>
            <span class="d-none d-lg-inline-flex"></span>
        </a>
        <a href="#" class="nav-link" >
                <i class="fas fa-crosshairs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Scope</span >
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="far fa-calendar-alt me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Schedule</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="	fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fas fa-award me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Quality</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fa fa-cogs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Resources</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
            <a href="/risk" class="nav-link">
                <i class="fa fa-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fas fa-shopping-cart me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Procurement</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fas fa-users-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Stakeholder</span>
            </a> 
    </div>
    </center>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-4">Risk</h3>
        <form action="/risk/save" method="post">
            @csrf
            <div class="row mb-3">
            <div class="col-md-4">
            <label for="nameProject" class="form-label text-white">Name Project</label>
            <select name="name_project" id="nameProject" class="form-select mb-3 text-white" required>
                <option value="project">Select a Project</option>
                @foreach($nameProjects as $project)
                <option value="{{ $project }}">{{ $project }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Risk Type</label>
                <select name="risk_type" id="risk_type" class="form-select mb-3 text-white">
                    <option value="type">Select a Type</option>
                    <option value="Finance">Finance</option>
                    <option value="Technical">Technical</option>
                    <option value="User_Request">User Request</option>
                    <option value="Contractual">Contractual</option>
                    <option value="Equipment_Damage">Equipment Damage</option>
                    <option value="Operational">Operational</option>
                    <option value="Employee_Harm">Employee Harm</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Risk Owner</label>
                <select name="risk_owner" id="risk_owner" class="form-select mb-3 text-white">
                    <option value="owner">Select a Owner</option>
                    <option value="Project Excecution">Project Excecution</option>
                    <option value="Project Planning">Project Planning</option>
                    <option value="Project Management Office">Project Management Office</option>
                    <option value="Supply Chain Management">Supply Chain Management</option>
                    <option value="System Engineer">System Engineer</option>
                    <option value="Finance">Finance</option>
                    <option value="Budgeting">Budgeting</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Description Ofrisk</label>
                <input type="text" name="description_ofrisk" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Risk Rating</label>
                <input type="number" name="risk_rating" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Probability</label>
                <select name="probability" id="probability" class="form-select mb-3 text-white" onchange="calculateResult()">
                    <option>Select a Owner</option>
                    <option value="1">Very Low - 1</option>
                    <option value="2">Low - 2</option>
                    <option value="3">Moderate - 3</option>
                    <option value="4">High - 4</option>
                    <option value="5">Very High - 5</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Impact</label>
                <select name="impact" id="impact" class="form-select mb-3 text-white" onchange="calculateResult()">
                    <option value="1">Very Low - 1</option>
                    <option value="2">Low - 2</option>
                    <option value="3">Moderate - 3</option>
                    <option value="4">High - 4</option>
                    <option value="5">Very High - 5</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Risk Treatment</label>
                <select name="risk_treatment" id="risk_treatment" class="form-select mb-3 text-white" required>
                    <option value="">Select a Treatment</option>
                    <option value="Accept">Accept</option>
                    <option value="Mitigate">Mitigate</option>
                    <option value="Transfer">Transfer</option>
                    <option value="Avoid">Avoid</option>
                </select>
            </div>
        </div>    
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-4">Describe Action To Reduce Risk</h3>
        <a href="/risk/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
        <form action="/risk/save" method="post">
            @csrf
            <div class="row mb-3">
            <div class="col-md-4">
            <label for="" class="form-label text-white">Impact Description</label>
            <input type="text" name="impact_description" id="action_toreduce" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Action To Reduce</label>
                <input type="text" name="action_toreduce" id="action_toreduce" class="form-control mb-3 text-white" required>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
        <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>
</div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Risk</h2>
                <!-- <a href="/risk/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br> -->
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Name Project</small></th>
                                <th><small>Risk Type</small></th>
                                <th><small>Risk Owner</small></th>
                                <th><small>Description</small></th>
                                <th><small>Risk Rating</small></th>
                                <th><small>Risk Treatment</small></th>
                                <th><small>Describe Action to Reduce Risk</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $r)
                            <tr class="text-white">
                                <td><small>{{$r->name_project}}</small></td>
                                <td><small>{{$r->risk_type}}</small></td>
                                <td><small>{{$r->risk_owner}}</small></td>
                                <td><small>{{$r->description_ofrisk}}</small></td>
                                <td><small>{{$r->risk_rating}}</small></td>
                                <td><small>{{$r->risk_treatment}}</small></td>
                                <td><small>{{$r->describe_action}}</small></td>
                                <td>
                                    <!-- <a href="/risk/{{$r->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>       -->
                                    <a href="/risk/{{$r->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
