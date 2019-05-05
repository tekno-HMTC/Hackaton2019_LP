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
                <a href="{{route('specializations.courses.chapters.modules.show',[$activeMaterial->module->chapter->course->specialization->id, $activeMaterial->module->chapter->course->id, $activeMaterial->module->chapter->id, $activeMaterial->module->id])}}">
                <button type="button" class="btn gradient-3">
                    Back
                    <span class="btn-icon-right">
                        <i class="fa fa-arrow-circle-left"></i>
                    </span>
                </button>
                </a>
            </div>
            <div class="col-12 mt-4 mb-4">                
                <div class="row justify-content-center">
                    <div style="word-wrap:break-word; width: 60%">                        
                        <h2 class="text-white" style="word-wrap: break-word;">{{$activeMaterial->module->name}}</h2>
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
                                @foreach ($activeMaterial->module->materials as $material)
                                    @if ($material->id == $activeMaterial->id)                                                                            
                                        <a style="border:none" class="list-group-item gradient-3" id="list-home-list" href="{{route('specializations.courses.chapters.modules.materials.show',[$activeMaterial->module->chapter->course->specialization->id, $activeMaterial->module->chapter->course->id, $activeMaterial->module->chapter->id, $activeMaterial->module->id, $material->id])}}" role="tab">
                                    @else
                                        <a style="border:none" class="list-group-item" id="list-home-list" href="{{route('specializations.courses.chapters.modules.materials.show',[$activeMaterial->module->chapter->course->specialization->id, $activeMaterial->module->chapter->course->id, $activeMaterial->module->chapter->id, $activeMaterial->module->id, $material->id])}}" role="tab">
                                    @endif                                
                                    <div class="row ml-2 mr-2">
                                        <span class="mr-2">
                                            @if($material->type == "VIDEO")
                                                <i class="fa fa-video-camera"></i>
                                            @elseif($material->type == "IMAGE")
                                                <i class="fa fa-image"></i>
                                            @elseif($material->type == "HTML")
                                                <i class="fa fa-file-code-o"></i>
                                            @endif                                            
                                        </span>
                                        {{$material->name}}
                                    </div>
                                </a>
                                @endforeach                                
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
                    <h3>{{$activeMaterial->name}}</h3>                    
                </div>                
                @if ($activeMaterial->type == "VIDEO")
                <div class="card card-widget" style="background-color: #000000; height:100%">
                    <div class="card-body">
                        <div class="media" style="height: 100%">
                            <div class="media-body" style="height: 100%">
                                <div class="row justify-content-center" style="height: 100%">                                    
                                    <iframe width="100%" height="auto" src="{{$activeMaterial->video_path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                @elseif($activeMaterial->type == "IMAGE")
                <div class="card card-widget" style="background-color: #ffffff; height:100%">
                    <div class="card-body">
                        <div class="media" style="height: 100%">
                            <div class="media-body" style="height: 100%">
                                <div class="row justify-content-center" style="height: 100%">
                                    <img src="{{asset('storage/'.$activeMaterial->image_path)}}"  width=100%>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($activeMaterial->type == "HTML")
                <div class="card card-widget" style="background-color: #ffffff; height:100%">
                    <div class="card-body">
                        <div class="media" style="height: 100%">
                            <div class="media-body" style="height: 100%">
                                <div class="row" style="height: 100%">
                                    <?php echo html_entity_decode($activeMaterial->html)?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif                    
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
