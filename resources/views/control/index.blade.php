@extends('layouts.master')
@section('title', 'control')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
<<<<<<< HEAD
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
=======
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
<center>
    <div class="navbar-nav align-items-center ms-auto">
            <a href="#" class="nav-link" >
                <i class="fa fa-shopping-cart me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Procurement</span >
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fa fa-exclamation-triangle me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
    </div>
</center>
</nav>
@endsection