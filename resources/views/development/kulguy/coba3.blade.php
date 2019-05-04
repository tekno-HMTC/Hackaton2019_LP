@extends('layouts.master')
<!-- ini kulguy -->

@section('AddCss')
<style>
  .matkul-wrap {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 70%;
    height: 100%;
    word-wrap: break-word;
    margin: 0 auto;
  }

  .matkul {
    text-align: center;
    word-wrap: break-word;
  }

  .card{
      transition: all .2s ease-in-out;
  }
  
  .card:hover{
      transform: scale(1.05);
      cursor: pointer;
  }

</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card gradient-1" style="pointer-events:none">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="text-white mt-3 mb-1">Rumpun Mata Kuliah</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row matkul-wrap">
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-9 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-8 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-7 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-6 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-5 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-1 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-2 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-3 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                    <div class="card text-center pb-3 gradient-4 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title text-white m-3">Algoritma Pemograman</h2>
                            <img class="m-4" src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text m-3">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
        </div>

        
    </div>
@endsection
