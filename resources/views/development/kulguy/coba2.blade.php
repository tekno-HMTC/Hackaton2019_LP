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
  
  .desk-rmk{
      word-wrap: break-word;
      width: 70%;
      margin: 0 auto;
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
                            <h2 class="text-white mt-3 mb-1">Rumpun Mata Kuliah</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="matkul-wrap">
                <div class="matkul col-md-6 col-lg-3">
                    <div class="card text-center gradient-2">
                        <div class="card-body">
                            <h2 class="card-title">Algoritma Pemograman</h2>
                            <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                        </div>
                    </div>
                </div>
                <div class="matkul col-md-6 col-lg-3">
                    <div class="card text-center gradient-2">
                        <div class="card-body">
                            <h2 class="card-title">Algoritma Pemograman</h2>
                            <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                        </div>
                    </div>
                </div>
                <div class="matkul col-md-6 col-lg-3">
                    <div class="card text-center gradient-2 justify-content-center">
                        <div class="card-body">
                            <h2 class="card-title">Algoritma Pemograman</h2>
                            <img class="m-4"src="https://dummyimage.com/240x160/000/fff">
                            <h5 class="text-white card-text desk-rmk">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</h5>
                        </div>
                    </div>
                </div>
                <div class="matkul col-md-6 col-lg-3">
                    <div class="card text-center gradient-2">
                        <div class="card-body">
                            <h2 class="card-title">Algoritma Pemograman</h2>
                            <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                        </div>
                    </div>
                </div>
                <div class="matkul col-md-6 col-lg-3">
                    <div class="card text-center gradient-2">
                        <div class="card-body">
                            <h2 class="card-title">Algoritma Pemograman</h2>
                            <p class="text-white card-text">Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman Deskripsi Algoritma Pemograman</p>
                        </div>
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
