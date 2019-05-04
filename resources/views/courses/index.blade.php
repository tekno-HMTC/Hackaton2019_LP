@extends('layouts.materi')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .logoRMK{
        margin: 0 auto;
        max-width: 60%;
    }
    .card{
        cursor: pointer;
        transition: all .2s ease-in-out
    }
    .card:hover{
        transform: scale(1.05);
    }

    .card-widget__title {
        color: black;
    }

    .card-widget__subtitle{
        color: gray;
    }

    .card-widget__icon i{
        color: #425C6C !important;
    }
</style>
@endsection
@section('content-kiri')
    <div class="" style="height: 100%;background-color: #425C6C;">
        <div class="row">
            <div class="col-12 m-3">
                <a href="{{ route('specializations.index') }}">
                <button type="button" class="btn" style="background-color: #FFD15D; color:white;">
                    Back
                    <span class="btn-icon-right">
                        <i class="fa fa-arrow-circle-left"></i>
                    </span>
                </button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center" style="text-align:center">
            <div class="col-12 mt-3 mb-3">
                <img class="logoRMK" src="/{{$rmk->path_logo}}" alt="">
            </div>
            <div class="col-8 mt-3">
                <div class="card card-widget" style="pointer-events:none">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <h2>{{$rmk->short}}</h2>
                                <h5>{{$rmk->name}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-kanan')
<div class="container-fluid m-4">
        <div class="row justify-content-center">
            <div class="col-8 m-4">
                <div class="col-12">
                    @foreach ($mk as $item)
                        <div class="card card-widget">
                            <div class="card-body">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fa fa-copy"></i></span>
                                    <div style="display:flex; justify-content:space-between;width: 100%;">
                                        <div class="media-body">
                                            <h2 class="card-widget__title">{{$item->name}}</h2>
                                            <h5 class="card-widget__subtitle">All Properties</h5>
                                        </div>
                                        <div>
                                            <button type="button" class="btn mb-1 btn-primary">Lihat <span class="btn-icon-right"><i class="fa fa-paper-plane"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                    <button type="button" class="btn mb-1 btn-rounded btn-info">
                        Add
                        <span class="btn-icon-right">
                            <i class="fa fa-plus color-info" style="color: white;"></i> 
                        </span>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
@endsection
