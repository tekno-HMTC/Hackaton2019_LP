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
                    <button type="button" class="btn gradient-3">
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
                                            <form method="POST" action="{{route('specializations.courses.destroy', [$rmk->id, $item->id])}}">
                                                @csrf
                                                {{ method_field('DELETE') }} 
                                                <button type="submit" class="btn mb-1 btn-danger">Hapus</button>
                                            <form>
                                        </div>
                                        <div>
                                            <a href="{{route('specializations.courses.chapters.index',[$rmk->id,$item->id])}}"><button type="button" class="btn mb-1 btn-primary">Lihat <span class="btn-icon-right"><i class="fa fa-paper-plane"></i></span>
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                    <button type="button" class="btn mb-1 btn-rounded btn-info"  data-toggle="modal" data-target="#modal-tambah" >
                        Add
                        <span class="btn-icon-right">
                            <i class="fa fa-plus color-info" style="color: white;"></i> 
                        </span>
                    </button>
                    <div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Mata Kuliah</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                    </button>
                                </div>
                            <form class="form-valide" action="{{ route('specializations.courses.store', [$rmk->id])}}" method="POST" novalidate="novalidate">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-validation">
                                            <div class="form-group">
                                                <!-- <div class="row col-md-12">
                                                    <label class="col-form-label" for="name">Nama Mata Kuliah<span class="text-danger">*</span></label>
                                                </div> -->
                                                <div class="row col-md-12">
                                                    <input class="form-control input-rounded" id="name" name="name" placeholder="Nama mata kuliah" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <div class="row col-md-12">
                                                    <label class="col-form-label" for="description">Deskripsi Mata Kuliah<span class="text-danger">*</span></label>
                                                </div> -->
                                                <div class="row col-md-12">
                                                    <input class="form-control input-rounded" id="description" name="description" placeholder="Deskripsi mata kuliah" type="text">
                                                </div>
                                            </div>
                                            <input type="hidden" name="specialization_id" value="{{$item->id}}"/>
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
@endsection
