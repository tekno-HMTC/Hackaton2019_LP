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
                <a href="{{ route('specializations.courses.chapters.index',[$module->chapter->course->specialization->id, $module->chapter->course->id]) }}">
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
                        <h1 class="text-white" style="word-wrap: break-word;">{{$module->name}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 mb-4">
                <div class="basic-list-group">
                    <div class="row justify-content-center">
                        <div class="col-6 mb-4 mb-sm-0">
                            <div class="list-group" id="list-tab" role="tablist">
                                @foreach ($module->materials as $item)
                                    <a style="border:none" class="list-group-item" data-toggle="list" href="#{{$item->id}}">{{$item->name}}</a> 
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
<div class="container-fluid m-4">
    <div class="row justify-content-center">
        <div class="col-10 m-4">
            <div class="col-12">
                <div class="card card-widget">
                    <div class="card-body">
                        <div class="card-title" style="display:flex; justify-content:space-between;">
                                <div style="display: flex">
                                    <form method="POST" id="ASDD-{{$module->id}}" action="{{route('specializations.courses.chapters.modules.destroy', [$module->chapter->course->specialization->id, $module->chapter->course->id, $module->chapter->id, $module->id])}}">
                                        @csrf
                                        {{ method_field('DELETE') }} 
                                        <span class="mr-3">
                                            <i class="fa fa-times" style="color:red" onclick="submit()"></i>
                                        </span>      
                                        <script>
                                            function submit(){
                                                $('#ASDD-'+{{$module->id}}).submit();
                                            }
                                        </script>      
                                    </form>
                                    <i class="fa fa-folder"></i>&nbsp;&nbsp;{{$module->name}}
                                </div>
                                @if (\Auth::user()->role == 0)
                                    <button type="button"
                                     data-toggle="modal"
                                     data-target="#modal-{{$module->id}}"
                                     class="btn btn-outline-info">Tambah Materi</button>
                                @endif
                        </div>
                        <div class="media">
                            <div class="media-body">
                                @foreach ($module->materials as $item)
                                    @if ($item->type == "VIDEO")
                                        <div class="row"><span class="mr-3"><i class="fa fa-file-video-o"></i></span>
                                            <a href="{{route('specializations.courses.chapters.modules.materials.show',[$module->chapter->course->specialization->id, $module->chapter->course->id, $module->chapter->id, $module->id, $item->id])}}">{{$item->name}}</a>
                                        </div>    
                                    @elseif ($item->type == "IMAGE")
                                        <div class="row"><span class="mr-3"><i class="fa fa-file-image-o"></i></span>
                                            <a href="{{route('specializations.courses.chapters.modules.materials.show',[$module->chapter->course->specialization->id, $module->chapter->course->id, $module->chapter->id, $module->id, $item->id])}}">{{$item->name}}</a>
                                        </div>
                                    @else
                                        <div class="row"><span class="mr-3"><i class="fa fa-file-code-o"></i></span>
                                            <a href="{{route('specializations.courses.chapters.modules.materials.show',[$module->chapter->course->specialization->id, $module->chapter->course->id, $module->chapter->id, $module->id, $item->id])}}">{{$item->name}}</a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="modal fade" id="modal-{{$module->id}}" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Materi</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                    </div>
                                    <form class="form-valide" action="{{ route('specializations.courses.chapters.modules.materials.store',[$module->chapter->course->specialization->id, $module->chapter->course->id, $module->chapter->id, $module->id])}}" method="POST" novalidate="novalidate">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-validation">
                                                <div class="form-group">
                                                    <div class="row col-md-12">
                                                        <input class="form-control input-rounded" id="name" name="name" placeholder="Masukkan Nama Materi" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row col-md-12">
                                                        <input class="form-control input-rounded" id="description" name="description" placeholder="Deskripsi Materi" type="text">
                                                    </div>
                                                </div>
                                                <div class="default-tab">
                                                    <ul class="nav nav-tabs mb-3" role="tablist">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#image">Image</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#video">Video</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#html">HTML</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="image" role="tabpanel">
                                                            <div class="dropzone">
                                                                <div class="form-group">
                                                                    <div class="fallback">
                                                                        <input class="l-border-1" name="image_path" multiple="multiple" type="file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="video">
                                                            <div class="row col-md-12">
                                                                <input class="form-control input-rounded" id="video_path" name="video_path" placeholder="Path youtube video" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="html">
                                                            <textarea class="description" id="html" name="html"></textarea>
                                                            {{-- <input class="form-control input-rounded" id="html" name="html" placeholder="html" type="text"> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="module_id" value="{{$module->id}}"/>
                                                <input type="hidden" name="active" value="0"/>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
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
<script src="{!!asset('js/tinymce/tinymce.min.js')!!}"></script>
<script>
tinymce.init({
    selector:'textarea.description',
    plugins: "image",
    entity_encoding: "named",    
    // menubar: "insert",
    // toolbar: "image",
});
</script>
@endsection