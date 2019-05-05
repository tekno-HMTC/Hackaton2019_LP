@extends('layouts.master')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .matkul-wrap {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        height: 100%;
    }

    .matkul {
        text-align: left;
        width: 33%;
        word-wrap: break-word;
        color: black;
        border: none;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        margin-bottom: 0;
    }

    .matkul a:hover{
        text-decoration: underline;
    }

    .wrap {
        height: auto;
    }

    a.list-group-item{
        text-align: center;
        font-weight: 900;
    }

    .card-title {
        text-align: center;
    }

    .logo{
        margin: 0 auto;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    .rmk-wrap1 {
        background-color: white;
        margin-top: 10px;
    }

    .rmk-wrap2 {
        background-color: white;
    }
    
    .rmk-wrap2 h2 {
        color: #222222;
    }

    a {
        color: black;
    }

    a:hover {
        color: black;
    }

    .add-modal {
        background-color: white;
        height: 40px;
    }

    .kanan {
        float: right;
    }

    .asd {
        top: 10%;
    }

</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
        <div style="background-image: url('/template/images/homepage.jpg');background-size: 1265px; height: 500px;"></div>
        <div class="row">
          <div class="col-xl-12">
            <div class="basic-list-group">
                <div class="list-group" style="flex-direction:row !important">
                    @foreach ($rmk as $item)
                        <a href="#{{$item->short}}" class="list-group-item list-group-item-action">{{$item->short}}</a>      
                    @endforeach
                </div>
            </div>
          </div>
        </div>
        <div class="asd">
        @foreach ($rmk as $item)
            <div class="row pb-3" id="{{$item->short}}" >
                <div class="col-md-12">
                    @if($item->id % 2 == 1)
                        <div class="card text-center rmk-wrap1" style="margin-bottom:0px;">    
                    @else
                        <div class="card text-center rmk-wrap2"style="margin-bottom:0px;">
                    @endif
                        <div class="card-body" style="display:flex; justify-content:space-between;">
                              <div style="width: 25%; ">
                                  <div class="logo">
                                      <img src={!! asset($item->path_logo)!!} height="50" style="top: 50%">
                                      <h2 class="card-title" style="padding-top:2rem;">{{$item->name}}</h2>
                                  </div>
                              </div>
                              <div class="col-lg-9">
                                    @if (\Auth::user()->role == "ADMINISTRATOR")
                                    @if($item->id % 2 == 1)
                                        <div class="asd">
                                            <button type="button" data-toggle="modal" data-target="#modal-{{$item->id}}" class="btn mb-1 btn-outline-success add-modal kanan"><i class="fa fa-plus"></i></button>
                                        </div>
                                    @else 
                                        <div class="asd">
                                            <button type="button" data-toggle="modal" data-target="#modal-{{$item->id}}" class="btn mb-1 btn-outline-success add-modal kanan"><i class="fa fa-plus"></i></button>
                                        </div>
                                    @endif
                                    @endif
                                  <div class="row justify-content-center">
                                      <div class="col-12">
                                          <div class="list-group matkul-wrap" id="list-tab" role="tablist">
                                              @foreach ($item->courses as $course)
                                                <li class="matkul list-group-item" ><a href="{{route('specializations.courses.chapters.index',[$item->id,$course->id])}}">{{$course->name}}</a></li>
                                              @endforeach
                                          </div>
                                      </div>
                                  </div>
                                    <div class="modal fade" id="modal-{{$item->id}}" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Mata Kuliah</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                                </button>
                                            </div>
                                        <form class="form-valide" action="{{ route('specializations.courses.store', [$item->id])}}" method="POST" novalidate="novalidate">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-validation">
                                                        <div class="form-group">
                                                            <!-- <div class="row col-md-12">
                                                                <label class="col-form-label" for="name">Nama Mata Kuliah<span class="text-danger">*</span></label>
                                                            </div> -->
                                                            <div class="row col-md-12">
                                                                <input class="form-control input-rounded" id="name" name="name" placeholder="Masukkan mata kuliah" type="text">
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
                </div>
                
              </div>
        @endforeach
        </div>

    </div>
@endsection
