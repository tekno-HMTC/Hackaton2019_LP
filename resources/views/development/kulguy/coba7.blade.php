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
        text-align: center;
        width: 33%;
        word-wrap: break-word;
        color: black;
        border: none;
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

</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
        <div style="background-image: url('/template/images/homepage.jpg');background-size: 1265px; height: 500px;"></div>
        <div class="row">
          <div class="col-xl-12">
            <div class="basic-list-group">
                <div class="list-group" style="flex-direction:row !important">
                  <a href="#alpro" class="list-group-item list-group-item-action">Alpro</a>
                  <a href="#ajk" class="list-group-item list-group-item-action">AJK</a>
                  <a href="#igs" class="list-group-item list-group-item-action">IGS</a>
                  <a href="#ncc" class="list-group-item list-group-item-action">NCC</a>
                  <a href="#rpl" class="list-group-item list-group-item-action">RPL</a>
                  <a href="#mis" class="list-group-item list-group-item-action">MIS </a>
                  <a href="#mi" class="list-group-item list-group-item-action">MI</a>
                  <a href="#dtk" class="list-group-item list-group-item-action">DTK</a>
                  <a href="#kcv" class="list-group-item list-group-item-action">KCV</a>
                </div>
            </div>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-md-12">
              <div class="card text-center" style="background-color: #FFD15D">
                  <div class="card-body" style="display:flex; justify-content:space-between;" id="alpro">
                        <div style="width: 25%">
                            <div style="margin: 0; position: absolute;top: 35%;margin-left: 40px;">
                                <img src={!! asset('template/images/RMK/alpro.png')!!} height="50" style="top: 50%">
                                <h2 class="card-title">Algoritma Pemograman</h2>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="list-group matkul-wrap" id="list-tab" role="tablist">
                                        <li class="matkul list-group-item" >Home</li>
                                        <li class="matkul list-group-item" >Profile</li>
                                        <li class="matkul list-group-item" >Messages</li>
                                        <li class="matkul list-group-item" >Settings</li>
                                        <li class="matkul list-group-item" >Home</li>
                                        <li class="matkul list-group-item" >Profile</li>
                                        <li class="matkul list-group-item" >Messages</li>
                                        <li class="matkul list-group-item" >Settings</li>
                                        <li class="matkul list-group-item" >Home</li>
                                        <li class="matkul list-group-item" >Profile</li>
                                        <li class="matkul list-group-item" >Messages</li>
                                        <li class="matkul list-group-item" >Settings</li>
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
