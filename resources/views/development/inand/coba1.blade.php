@extends('layouts.master')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .nav-item {
        min-width: 25%;
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
                <h5 class="card-title" style="display: flex;justify-content: space-between;">
                    <div>
                        Permintaan 
                    </div>
                    <div>
                        <a href="#">
                            <button type="button" class="btn mb-1 btn-rounded btn-info">
                                Tambah
                                <span class="btn-icon-right">
                                    <i class="fa fa-plus color-info" style="color: white;"></i> 
                                </span>
                            </button>
                        </a>
                    </div>
                </h5>
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#baru"><span class="btn-icon"><i class="fa fa-exclamation  color-info"></i></span>&nbsp;&nbsp;Permintaan Baru</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#proses"><span class="btn-icon"><i class="fa fa-spinner color-info"></i></span>&nbsp;&nbsp;Permintaan Diproses</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#selesai"><span class="btn-icon"><i class="fa fa-info color-info"></i></span>&nbsp;&nbsp;Permintaan Selesai</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tolak"><span class="btn-icon"><i class="fa fa-times color-info"></i></span>&nbsp;&nbsp;Permintaan Ditolak</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="baru" role="tabpanel">
                            <div class="p-t-15">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RMK</th>
                                                <th>Mata Kuliah</th>
                                                <th>Bab</th>
                                                <th>Modul</th>
                                                <th>Materi</th>
                                                <th>Ganti Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Matrix</td>
                                                <td>Perkalian Matrix</td>
                                                <td>Video penjelasan dong</td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Terima">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-check color-info"></i> 
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-times color-danger"></i> 
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Eigen</td>
                                                <td>Eigen value</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Terima">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-check color-info"></i> 
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-times color-danger"></i> 
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Sistem Digital</td>
                                                <td>Biner</td>
                                                <td>Biner</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Terima">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-check color-info"></i> 
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-times color-danger"></i> 
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="proses">
                            <div class="p-t-15">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RMK</th>
                                                <th>Mata Kuliah</th>
                                                <th>Bab</th>
                                                <th>Modul</th>
                                                <th>Materi</th>
                                                <th>Ganti Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Matrix</td>
                                                <td>Perkalian Matrix</td>
                                                <td>Video penjelasan dong</td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selesai">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-check color-info"></i> 
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-times color-danger"></i> 
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Eigen</td>
                                                <td>Eigen value</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selesai">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-check color-info"></i> 
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-times color-danger"></i> 
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Sistem Digital</td>
                                                <td>Biner</td>
                                                <td>Biner</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selesai">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-check color-info"></i> 
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                        <span class="btn-icon">
                                                            <i class="fa fa-times color-danger"></i> 
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="selesai">
                            <div class="p-t-15">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RMK</th>
                                                <th>Mata Kuliah</th>
                                                <th>Bab</th>
                                                <th>Modul</th>
                                                <th>Materi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Matrix</td>
                                                <td>Perkalian Matrix</td>
                                                <td>Video penjelasan dong</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Eigen</td>
                                                <td>Eigen value</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Sistem Digital</td>
                                                <td>Biner</td>
                                                <td>Biner</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tolak">
                            <div class="p-t-15">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RMK</th>
                                                <th>Mata Kuliah</th>
                                                <th>Bab</th>
                                                <th>Modul</th>
                                                <th>Materi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Matrix</td>
                                                <td>Perkalian Matrix</td>
                                                <td>Video penjelasan dong</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Aljabar Linear</td>
                                                <td>Eigen</td>
                                                <td>Eigen value</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><span class="badge badge-light px-2">DTK</span></td>
                                                <td>Sistem Digital</td>
                                                <td>Biner</td>
                                                <td>Biner</td>
                                                <td>Penjelasan ETS nya kemaren</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            
        </div>
    </div>
</div>
@endsection
