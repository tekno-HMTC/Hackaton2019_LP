@extends('layouts.master')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .nav-item {
        min-width: 25%;
        text-align: center;
    }

    .matkul {
        width: 75%;
        text-align: center
    }

    .rmk-title {
        width: 20%;
        text-align: center
    }

    .list-group-item {
        display: flex;
        justify-content: space-between;
    }

    .nav-item {
        width: 12.5% !important;
        min-width: 12.5% !important;
    }

    a:hover:not(.active) {
        color: #425C6C !important;
    }

    .nav-link.active {
        background-color: #425C6C !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
    <div class="card-body">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#rpl" class="nav-link active show" data-toggle="tab" aria-expanded="false">RPL</a></li>
            <li class="nav-item"><a href="#ncc" class="nav-link" data-toggle="tab" aria-expanded="false">NCC</a></li>
            <li class="nav-item"><a href="#kcv" class="nav-link" data-toggle="tab" aria-expanded="true">KCV</a></li>
            <li class="nav-item"><a href="#ajk" class="nav-link" data-toggle="tab" aria-expanded="true">AJK</a></li>
            <li class="nav-item"><a href="#igs" class="nav-link" data-toggle="tab" aria-expanded="true">IGS</a></li>
            <li class="nav-item"><a href="#alpro" class="nav-link" data-toggle="tab" aria-expanded="true">ALPRO</a></li>
            <li class="nav-item"><a href="#mi" class="nav-link" data-toggle="tab" aria-expanded="true">MI</a></li>
            <li class="nav-item"><a href="#dtk" class="nav-link" data-toggle="tab" aria-expanded="true">DTK</a></li>
        </ul>
        <div class="basic-list-group">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="rmk-title">
                        <h4>RPL</h4>
                    </div>
                    <div class="matkul">
                        <div class="row">
                            <div class="col-md-4">A</div>
                            <div class="col-md-4">A</div>
                            <div class="col-md-4">A</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">A</div>
                            <div class="col-md-4">A</div>
                            <div class="col-md-4">A</div>
                        </div>
                    <div>
                </li>
                <li class="list-group-item">NCC</li>
                <li class="list-group-item">KCV</li>
                <li class="list-group-item">AJK</li>
                <li class="list-group-item">IGS</li>
                <li class="list-group-item">ALPRO</li>
                <li class="list-group-item">MI</li>
                <li class="list-group-item">DTK</li>
            </ul>
        </div>
    </div>
</div>
@endsection
