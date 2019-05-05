@extends('layouts.materi')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .logoRMK{
        margin: 0 auto;
        max-width: 60%;
    }

    .list-group-item:hover{
        background-color: gray;
        color:white;
    }

    .list-group-item.show.active{
        color:white !important;
        background-color: white !important; 
    }

</style>
@endsection
@section('content-kiri')
    <div style="background-color: #425C6C; height: 100%">
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
                            <div id="list-group" class="list-group" id="list-tab" role="tablist">                                
                                <a style="border:none" class="list-group-item gradient-3" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-2">
                                            <i class="fa fa-video-camera"></i>
                                        </span>
                                        Sifat Perkalian Matrix
                                    </div>
                                </a> 
                                <a style="border:none" class="list-group-item" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-1">
                                            <i class="fa fa-file-text"></i>
                                        </span>
                                        Aturan Perkalian Matrix
                                    </div>
                                </a>
                                <a style="border:none" class="list-group-item" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-1">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        Teknik Perkalian Matrix
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
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Nonaktifkan
                    </label>
                </div>
                <div class="row">
                    <h3>Judul Materi</h3>
                </div>
                <div class="card card-widget" style="background-color: #000000; height:100%">
                    <div class="card-body">
                        <div class="media" style="height: 100%">
                            <div class="media-body" style="height: 100%">
                                <div class="row justify-content-center" style="height: 100%">                                    
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/y2-uaPiyoxc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                    
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
@section('addJS')
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("list-group");
    var btns = header.getElementsByClassName("list-group-item");
    for (var i = 0; i < btns.length; i++) {        
        btns[i].addEventListener("click", function() {
            console.log("lala")
            var current = header.getElementsByClassName("gradient-3");
            current[0].className = current[0].className.replace(" gradient-3", "");
            this.className += " gradient-3";
        });
    }
    </script>
@endsection
