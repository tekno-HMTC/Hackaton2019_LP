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
  }

  .wrap {
    /*
	I wish this worked cross-browser
    column-fill: balance;
	*/
    height: auto;

    /* Gradient to stripe columns */
}

</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="./images/users/8.jpg" class="rounded-circle" alt="">
                            <h5 class="text-white mt-3 mb-1">Ana Liem</h5>
                            <p class="m-0">05111740000114</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Slides With indicators</h4>
                      <div class="bootstrap-carousel">
                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="carousel-item">
                                      <img class="d-block w-100" src="images/big/img5.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item active">
                                      <img class="d-block w-100" src="images/big/img6.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100" src="images/big/img5.jpg" alt="Third slide">
                                  </div>
                              </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div class="basic-list-group">
                <div class="list-group" style="flex-direction:row !important">
                  <a href="#" class="list-group-item list-group-item-action active">Alpro</a>
                  <a href="#" class="list-group-item list-group-item-action">AJK</a>
                  <a href="#" class="list-group-item list-group-item-action">IGS</a>
                  <a href="#" class="list-group-item list-group-item-action">NCC</a>
                  <a href="#" class="list-group-item list-group-item-action">RPL</a>
                  <a href="#" class="list-group-item list-group-item-action">MIS </a>
                  <a href="#" class="list-group-item list-group-item-action">MI</a>
                  <a href="#" class="list-group-item list-group-item-action">DTK</a>
                  <a href="#" class="list-group-item list-group-item-action">KCV</a>
                </div>
            </div>
          </div>
        </div>

        <div class="row pb-3 pt-3 mb-3 mt-3">
          <div class="col-md-6 col-lg-3">
              <div class="card text-center gradient-2">
                  <div class="card-body">
                      <h2 class="card-title">Algoritma Pemograman</h2>
                      <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                  </div>
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

        <div class="row pb-3 pt-3 mb-3 mt-3">
          <div class="col-md-6 col-lg-3">
              <div class="card text-center gradient-1">
                  <div class="card-body">
                      <h2 class="card-title">Algoritma Pemograman</h2>
                      <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                  </div>
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

        <div class="row pb-3 pt-3 mb-3 mt-3">
          <div class="col-md-6 col-lg-3">
              <div class="card text-center gradient-3">
                  <div class="card-body">
                      <h2 class="card-title">Algoritma Pemograman</h2>
                      <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                  </div>
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
@endsection
