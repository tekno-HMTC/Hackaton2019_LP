@extends('layouts.materi')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .logoRMK{
        margin: 0 auto;
        max-width: 60%;
    }

    .card-title {
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        color: black;
    }

    .media .row {
        margin-left: 4px;
        padding: 8px;
    }

    a:hover {
        color: black;
    }

</style>
@endsection
@section('content-kiri')
    <div class="gradient-1" style="height: 100%">
        <div class="row">
            <div class="col-12 m-3">
                <button type="button" class="btn gradient-3">
                    Back
                    <span class="btn-icon-right">
                        <i class="fa fa-arrow-circle-left"></i>
                    </span>
                </button>
            </div>
            <div class="col-12 mt-4 mb-4">
                <div class="row justify-content-center">
                    <div>
                        <h1 class="text-white">Matrix</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 mb-4">
                <div class="basic-list-group">
                    <div class="row justify-content-center">
                        <div class="col-6 mb-4 mb-sm-0">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a style="border:none" class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" aria-selected="false">Matrix</a> 
                                <a style="border:none" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" aria-selected="false">Matrix</a> 
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
        <div class="col-10 m-4">
            <div class="col-12">
                <div class="card card-widget">
                    <div class="card-body">
                        <div class="card-title"><i class="fa fa-folder"></i>&nbsp;&nbsp;Matrix</div>
                        <div class="media">
                            <div class="media-body">
                                <div class="row"><span class="mr-3"><i class="fa fa-folder-open"></i></span>
                                    <a href="">Perkalian Matrix</a>
                                </div>
                                <div class="row"><span class="mr-3"><i class="fa fa-folder-open"></i></span>
                                    <a href="">Inverse Matrix</a>
                                </div>
                                <div class="row"><span class="mr-3"><i class="fa fa-folder-open"></i></span>
                                    <a href="">Penjumlahan Matrix</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>  
</div>
@endsection
