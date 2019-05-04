@extends('layouts.materi')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .logoRMK{
        margin: 0 auto;
        max-width: 60%;
    }
</style>
@endsection
@section('content-kiri')
    <div class="gradient-1" style="height: 100%">
        <div class="row">
            <div class="col-12 m-3">
                <button type="button" class="btn gradient-3">
                    Back
                    <span class="btn-icon-right">
                        <i class="fa fa-arrow-circle-left"></i>
                    </span>
                </button>
            </div>
        </div>
        <div class="row justify-content-center" style="text-align:center">
            <div class="col-8 mt-3">
                <div class="card card-widget" style="pointer-events:none">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <h3>Aljabar Linear</h3>
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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button>
        <div class="row justify-content-center">
            <div class="col-8 m-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="accordion-one" class="accordion">
                                <div class="card mt-3 mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa" aria-hidden="true"></i> Matrix</h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion-one" style="">
                                        <div class="basic-list-group">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3 mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa" aria-hidden="true"></i> Eliminasi Baris Elementer</h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion-one" style="">
                                        <div class="basic-list-group">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Cras justo odio<i class="fa" aria-hidden="true"></i></li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3 mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa" aria-hidden="true"></i> Vector</h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                        <div class="basic-list-group">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="exampleModalCenter" style="display: block; padding-right: 12px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Bab</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <input type="text" class="form-control" id="val-namaBab" name="val-namaBab" placeholder="Nama Bab">
                    <input type="text" class="form-control" id="val-deskripsiBab" name="val-deskripsiBab" placeholder="Deskripsi Bab">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
@endsection
