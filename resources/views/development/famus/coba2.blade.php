@extends('layouts.master')

@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center ml-5 mb-4">
                                    <img src="{!! asset('template/images/logo.png') !!}" width="200px" height="200px" alt="Responsive image">
                                </div>
                                <h3 class="ml-4">Komang Yoganteng Mahaputra Wisnuthama</h3>
                                <h4 class="ml-4">05111740000114</h4>
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
                                        <div class="form-group row justify-content-end">
                                            <div class="col-lg-3 ml-auto">
                                                <button type="submit" class="btn btn-light">Submit</button>
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
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Masukkan nama pengguna">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-lg-4 col-form-label" for="val-password">Token
                                                </label>
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Masukkan password lamamu!">
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end">
                                            <div class="col-lg-3 ml-auto">
                                                <button type="submit" class="btn btn-light">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
