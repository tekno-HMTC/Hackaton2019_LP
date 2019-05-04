@extends('layouts.testingmala')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .logoRMK{
        margin: 0 auto;
        max-width: 60%;
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
                        <h1 class="text-white">Hehe</h1>
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
                        <div class="media">
                            <div class="media-body">
                                <a href="" class="judulMateri"><h1>Matrix</h1></a>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-video-camera"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-file-text"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-image"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-video-camera"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2" style="flex-direction: row-reverse">
                                    <div>
                                        <button type="button" class="btn mb-1 btn-primary">Pelajari
                                            <span class="btn-icon-right">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-widget">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <a href="" class="judulMateri"><h1>Matrix</h1></a>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-video-camera"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-file-text"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-image"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2">
                                    <span class="mr-3">
                                        <i class="fa fa-video-camera"></i>
                                    </span>
                                    <a href=""><h4>Perkalian Matrix</h4></a>
                                </div>
                                <div class="row m-3 p-2" style="flex-direction: row-reverse">
                                    <div>
                                        <button type="button" class="btn mb-1 btn-primary">Pelajari
                                            <span class="btn-icon-right">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
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
