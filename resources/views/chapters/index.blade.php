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
    <div class="gradient-1" style="background: #425C6C; height: 100%;">
        <div class="row">
            <div class="col-12 m-3">
                <a href={{ route('specializations.courses.index',[$matkul->specialization->id]) }}>
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
                        <h2 class="text-white">{{$matkul->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 mb-4">
                <div class="basic-list-group">
                    <div class="row justify-content-center">
                        <div class="col-8 mb-4 mb-sm-0">
                            <div class="list" id="list-tab" role="tablist">
                                @foreach ($chapter as $item)
                                    <a style="border:none;background: white;" class="list-group-item" data-toggle="list" href="#{{$item->id}}">{{$item->name}}</a> 
                                @endforeach
                                @if(Auth::user()->role == "ADMINISTRATOR")
                                <button 
                                    data-target="#modal-tambah" data-toggle="modal"
                                    style="border:none;width: 100%;height: 40px;text-align: left;" class="list-group-item btn btn-outline-info active show gradient-3" data-toggle="list">Tambah Bab</button>
                                @endif
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
            @foreach ($chapter as $item)
                <div class="col-12" id="{{$item->id}}">
                    <div class="card card-widget">
                        <div class="card-body">
                            <div class="card-title" style="display:flex; justify-content:space-between;">
                                <div style="display: flex;">
                                    @if (\Auth::user()->role == "ADMINISTRATOR")
                                    <form method="POST" id="ASD-{{$item->id}}" action="{{route('specializations.courses.chapters.destroy', [$matkul->specialization->id, $matkul->id, $item->id])}}">
                                        @csrf
                                        {{ method_field('DELETE') }} 
                                        <span class="mr-3">
                                            <i class="fa fa-times" style="color:red" onclick="submit()"></i>
                                        </span>      
                                        <script>
                                            function submit(){
                                                $('#ASD-'+{{$item->id}}).submit();
                                            }
                                        </script>                           
                                    </form>
                                    @endif
                                    <i class="fa fa-folder"></i>&nbsp;&nbsp;{{$item->name}}
                                </div>
                                @if (\Auth::user()->role == "ADMINISTRATOR")
                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-{{$item->id}}">Tambah Modul</button>
                                @endif
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    @foreach ($item->modules as $modul)
                                        <div class="row" id="{{$modul->id}}">
                                            @if (\Auth::user()->role == "ADMINISTRATOR")
                                            <form method="POST" id="ASDD-{{$modul->id}}" action="{{route('specializations.courses.chapters.modules.destroy', [$matkul->specialization->id, $matkul->id, $item->id, $modul->id])}}">
                                                @csrf
                                                {{ method_field('DELETE') }} 
                                                <span class="mr-3">
                                                    <i class="fa fa-times" style="color:red" onclick="submit()"></i>
                                                </span>      
                                                <script>
                                                    function submit(){
                                                        $('#ASDD-'+{{$modul->id}}).submit();
                                                    }
                                                </script>      
                                            </form>
                                            @endif                                      
                                            <span class="mr-3"><i class="fa fa-folder-open"></i></span>
                                            <a href="{{route('specializations.courses.chapters.modules.show',[$matkul->specialization->id, $matkul->id, $item->id, $modul->id])}}">{{$modul->name}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal fade" id="modal-{{$item->id}}" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Modul</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                        </div>
                                        <form class="form-valide" action="{{ route('specializations.courses.chapters.modules.store', [$matkul->specialization->id, $matkul->id, $item->id])}}" method="POST" novalidate="novalidate">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-validation">
                                                    <div class="form-group">
                                                        <div class="row col-md-12">
                                                            <input class="form-control input-rounded" id="name" name="name" placeholder="Nama modul" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row col-md-12">
                                                            <input class="form-control input-rounded" id="description" name="description" placeholder="Deskripsi modul" type="text">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="chapter_id" value="{{$item->id}}"/>
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
            @endforeach
        </div>
    </div>  
</div>
<div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Bab</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            </div>
            <form class="form-valide" action="{{ route('specializations.courses.chapters.store', [$matkul->specialization->id, $matkul->id])}}" method="POST" novalidate="novalidate">
                @csrf
                <div class="modal-body">
                    <div class="form-validation">
                        <div class="form-group">
                            <div class="row col-md-12">
                                <input class="form-control input-rounded" id="name" name="name" placeholder="Nama bab" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <input class="form-control input-rounded" id="description" name="description" placeholder="Deskripsi bab" type="text">
                            </div>
                        </div>
                        <input type="hidden" name="course_id" value="{{$matkul->id}}"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
