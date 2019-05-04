@extends('layouts.master')
@section('AddCss')
<style>w
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

}
</style>
@endsection
@section('content')
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
                                <div class="media align-items-center kontainer mb-3" style="cursor:pointer" onclick="browse()";>
                                    <div class="row justify-content-center" style="width:100%">
                                        <input type = "file" id = "file" style="display:none">
                                        <img src="{!! asset('template/images/logo.png') !!}" width="200px" height="200px" class="profpic ml-4">
                                        <div class="editprofpic ml-4">
                                        <i class="fa fa-edit fa-3x logos"></i>
                                        <h2 style="position:absolute; top:40%; left:0%">Sunting Foto Profil</h2>
                                        </div>
                                    </div>
                                </div>
                                <h3>Komang Yoganteng Mahaputra Wisnuthama</h3>
                                <h4>05111740000114</h4>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-8 col-xl-9">
                        <div class="card p-5">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title border-bottom p-3">AKUN</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-username">Username 
                                                </label>
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Masukkan nama pengguna">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password Lama
                                                </label>
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Masukkan password lamamu!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password Baru
                                                </label>
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Masukkan password yang aman..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-confirm-password">Konfirmasi Password Baru
                                                </label>
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..konfirmasi disini!">
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
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-username">ID LINE 
                                                </label>
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Masukkan ID LINE anda">
                                            </div>
                                        </div>
                                        <div class="bootstrap-modal">
                                            <div class="form-group row">
                                                
                                                <div class="col-md-12">
                                                    <label class="col-lg-4 col-form-label" for="val-password">Token
                                                    <button type="button" style="background-color:Transparent; border:none; cursor:pointer"data-toggle="modal" data-target="#basicModal1"><i class="fa fa-question-circle"></i></button>
                                                    </label>
                            
                                                    <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Masukkan token">
                                                </div>
                                            </div>
                                            <!-- Button trigger modal -->
                                           
                                            <!-- Modal -->
                                            <div class="modal fade" id="basicModal1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Cara mendapatkan token ninja saga</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ol class="list-group list-group-flush">
                                                                <li class="list-group-item">Tambahkan sebagai teman akun bot LINE kita LPencerdas dengan memindai QR Code dibawah ini</li>
                                                                <img src="{{ asset('template/images/barcode.png') }}"/> 
                                                                <li class="list-group-item">Chat bot tersebut "Get Token" untuk mendapatkan token yang bisa memverifikasi akun anda yang mana kalau sudah terverifikasi akun anda bisa mendapatkan notifikasi terkait permintaan anda.</li>
                                                                <li class="list-group-item">Masukan token tersebut ke tempat yang sudah disediakan</li>
                                                                <li class="list-group-item">Tekan tombol verifikasi</li>
                                                            </ol>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="bootstrap-modal">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Verifikasi</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="basicModal">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Verifikasi</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="media align-items-center ml-5 mb-5">
                                                                        <img src="{!! asset('template/images/logo.png') !!}" width="200px" height="200px" alt="Responsive image">
                                                                    </div>
                                                                    <h3>Komang Yoganteng Mahaputra Wisnuthama</h3>
                                                                    <h4>QoeHH L4GhyyiE Chen4nkZZ N1hch!!!</h4>
                                                                </div>
                                                            </div>
                                                            APAKAH INI ANDA?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">YA, BENAR</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK, ITU BUKAN SAYA</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
@endsection
