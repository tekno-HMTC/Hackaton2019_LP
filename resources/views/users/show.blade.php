@extends('layouts.master')
@section('AddCss')
<style>
.profpic {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.editprofpic {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  width: 200px;
  height: 200px;
  
  text-align: center;
}

.kontainer:hover .profpic {
  opacity: 0.3;
}

.kontainer:hover .editprofpic {
  opacity: 1;
}

.logos {
    position: absolute;
    top: 0;
    left: 0;
}

ol li {
    display: list-item !important;
    list-style: decimal !important;
}
</style>
@endsection
@section('content')
<form method="POST" action="{{route('users.update', $user->id)}}" enctype='multipart/form-data'>
@csrf
{{ method_field('PUT') }}
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <script>
                                    function browse(){
                                        document.getElementById("file").click();
                                    }
                                </script>
                                <div class="media align-items-center kontainer mb-3" style="cursor:pointer;margin-bottom: 30px !important;" onclick="browse()";>
                                    <div class="row justify-content-center" style="width:100%">
                                        <input type = "file" id = "file" name="file" style="display:none">
                                        @if ($user->profile_picture_path != null)
                                            <img src="{!! asset('storage/'.$user->profile_picture_path) !!}" width="200px" height="200px" class="profpic ml-4">
                                        @else
                                            <img src="{!! asset('template/images/logo.png') !!}" width="200px" height="200px" class="profpic ml-4">
                                        @endif
                                        <div class="editprofpic ml-4">
                                        <i class="fa fa-edit fa-3x logos"></i>
                                        <h2 style="position:absolute; top:40%; left:0%">Sunting Foto Profil</h2>
                                        </div>
                                    </div>
                                </div>
                                <h3>{{$user->full_name}}</h3>
                                <h4>{{$user->username}}</h4>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-8 col-xl-9">
                        <div class="card p-1">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title border-bottom p-3">AKUN</h2>
                            </div>
                            <div class="card-body" style="padding-top:0; padding-bottom:0;">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Full Name 
                                                        </label>
                                                        <input type="text" class="form-control" id="val-username" name="full_name" placeholder="Masukkan nama pengguna" value="{{$user->full_name}}">
                                                    </div>
                                                </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-username">Username 
                                                </label>
                                                <input type="text" class="form-control" id="val-username" name="username" placeholder="Masukkan nama pengguna" value="{{$user->username}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password Lama
                                                </label>
                                                <input type="password" class="form-control" id="val-password" name="old_password" placeholder="Kosongkan apabila tidak mengganti password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password Baru
                                                </label>
                                                <input type="password" class="form-control" id="val-password" name="password" placeholder="Kosongkan apabila tidak mengganti password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-confirm-password">Konfirmasi Password Baru
                                                </label>
                                                <input type="password" class="form-control" id="val-confirm-password" name="password_confirmation" placeholder="Kosongkan apabila tidak mengganti password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title border-bottom p-3">LINE</h2>
                            </div>
                            <div class="card-body" style="padding-top:0; padding-bottom:0;">
                                <div class="form-validation">
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-username">ID LINE 
                                                </label>
                                                <input type="text" class="form-control" id="val-username" name="id_line" placeholder="Masukkan ID LINE anda" value="{{$user->id_line}}">
                                            </div>
                                        </div>
                                        <div class="bootstrap-modal">
                                            <div class="form-group row">
                                                
                                                <div class="col-md-12">
                                                    <label class="col-lg-4 col-form-label" for="val-password">Token
                                                    <button type="button" style="background-color:Transparent; border:none; cursor:pointer"data-toggle="modal" data-target="#basicModal1"><i class="fa fa-question-circle"></i></button>
                                                    </label>
                            
                                                    <input type="text" class="form-control" id="val-password" name="uuid" placeholder="Masukkan token" value="{{$user->uuid}}">
                                                </div>
                                            </div>
                                            <!-- Button trigger modal -->
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="basicModal1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Langkah mendapatkan token verifikasi</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="padding-left: 55px;">
                                                            <ol class="list-group list-group-flush">
                                                                <li class="list-group-item">Tambahkan sebagai teman akun bot LINE kita LPencerdas dengan memindai QR Code dibawah ini</li>
                                                                <img src="{{ asset('template/images/barcode.png') }}" style="height: 200px;width: 200px;text-align: center;margin: auto;"/> 
                                                                <li class="list-group-item">Chat bot tersebut "Get Token" untuk mendapatkan token yang bisa memverifikasi akun anda yang mana kalau sudah terverifikasi akun anda bisa mendapatkan notifikasi terkait permintaan anda.</li>
                                                                <li class="list-group-item">Masukan token tersebut ke tempat yang sudah disediakan</li>
                                                                <li class="list-group-item">Tekan tombol verifikasi</li>
                                                            </ol>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection
@section('addJs')
@endsection