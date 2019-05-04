@extends('layouts.materi')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .logoRMK{
        margin: 0 auto;
        max-width: 60%;
    }
    .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
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
                <div class="row justify-content-center">
                    <div>
                        <h4 class="text-white">Daftar Materi</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 mb-4">
                <div class="basic-list-group">
                    <div class="row justify-content-center">
                        <div class="col-10 mb-4 mb-sm-0">
                            <div class="list-group" id="list-tab" role="tablist">
                            <a style="border:none" class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-2">
                                            <i class="fa fa-video-camera"></i>
                                        </span>
                                        <h6>Sifat Perkalian Matrix</h6>
                                    </div>
                                </a> 
                                <a style="border:none" class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-1">
                                            <i class="fa fa-file-text"></i>
                                        </span>
                                        <h6>Aturan Perkalian Matrix</h6>
                                    </div>
                                </a>
                                <a style="border:none" class="list-group-item list-group-item-action active show" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-1">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        <h6>Teknik Perkalian Matrix</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-kanan')
<div style="height: 100%">
    <div class="row justify-content-center" style="height: 100%">
        <div class="col-10 m-4">
            <div class="col-12" style="height: 80%">
                <div class="row">
                    <h4>Judul Materi</h4>
                </div>
                <div class="card card-widget" style="background-color: #ffffff; height:100%">
                    <div class="card-body">
                        <div class="media" style="height: 100%">
                            <div class="media-body" style="height: 100%">
                                <div class="row justify-content-center" style="height: 100%">
                                    <img src="https://hdwallpaper20.com/wp-content/uploads/2016/05/zedge-wallpapers-fire-dragon.jpg"  width=100%>
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
