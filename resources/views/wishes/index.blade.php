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
                        @if(Auth::user()->role == "USER")
                        <a href="request/create">
                            <button type="button" class="btn mb-1 btn-rounded btn-info">
                                Tambah
                                <span class="btn-icon-right">
                                    <i class="fa fa-plus color-info" style="color: white;"></i> 
                                </span>
                            </button>
                        </a>
                        @endif
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
                                                <th>Pengirim</th>
                                                @if (Auth::user()->role == 'ADMINISTRATOR')
                                                    <th>Ganti Status</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request[0] as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td><span class="badge badge-light px-2">{{$item->specialization->short}}</span></td>
                                                    <td>{{$item->course->name}}</td>
                                                    <td>{{$item->chapter->name}}</td>
                                                    <td>{{$item->module->name}}</td>
                                                    <td>{{$item->content}}</td>
                                                    <td>{{$item->user->full_name}}</td>
                                                    @if (Auth::user()->role == 'ADMINISTRATOR')
                                                    <td style="display:flex; justify-content:space-around">
                                                        <form method="POST" action="{{ route('request.update', $item->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="status" value="1">
                                                            <button type="submit" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Terima">
                                                                <span class="btn-icon">
                                                                    <i class="fa fa-check color-info"></i> 
                                                                </span>
                                                            </button>
                                                        </form>
                                                        <form method="POST" action="{{ route('request.update', $item->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="status" value="3">
                                                            <button type="submit" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                                <span class="btn-icon">
                                                                    <i class="fa fa-times color-danger"></i> 
                                                                </span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    @endif
                                                </tr>
                                            @endforeach
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
                                                <th>Pengirim</th>
                                                @if (Auth::user()->role == 'ADMINISTRATOR')
                                                <th>Ganti Status</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request[1] as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td><span class="badge badge-light px-2">{{$item->specialization->short}}</span></td>
                                                    <td>{{$item->course->name}}</td>
                                                    <td>{{$item->chapter->name}}</td>
                                                    <td>{{$item->module->name}}</td>
                                                    <td>{{$item->content}}</td>
                                                    <td>{{$item->user->full_name}}</td>
                                                    @if (Auth::user()->role == 'ADMINISTRATOR')
                                                    <td style="display:flex; justify-content:space-around">
                                                        <form method="POST" action="{{ route('request.update', $item->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="status" value="2">
                                                            <button type="submit" class="btn mb-1 btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Terima">
                                                                <span class="btn-icon">
                                                                    <i class="fa fa-check color-info"></i> 
                                                                </span>
                                                            </button>
                                                        </form>
                                                        <form method="POST" action="{{ route('request.update', $item->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="status" value="3">
                                                            <button type="submit" class="btn mb-1 btn-rounded btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tolak">
                                                                <span class="btn-icon">
                                                                    <i class="fa fa-times color-danger"></i> 
                                                                </span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    @endif
                                                </tr>
                                            @endforeach
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
                                                <th>Pengirim</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request[2] as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td><span class="badge badge-light px-2">{{$item->specialization->short}}</span></td>
                                                    <td>{{$item->course->name}}</td>
                                                    <td>{{$item->chapter->name}}</td>
                                                    <td>{{$item->module->name}}</td>
                                                    <td>{{$item->content}}</td>
                                                    <td>{{$item->user->full_name}}</td>
                                                </tr>
                                            @endforeach
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
                                                <th>Pengirim</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request[3] as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td><span class="badge badge-light px-2">{{$item->specialization->short}}</span></td>
                                                    <td>{{$item->course->name}}</td>
                                                    <td>{{$item->chapter->name}}</td>
                                                    <td>{{$item->module->name}}</td>
                                                    <td>{{$item->content}}</td>
                                                    <td>{{$item->user->full_name}}</td>
                                                </tr>
                                            @endforeach
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
<script>
    function asd(){
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost:8000/api/wish/',
            dataType: 'json',
            success: function (data) { 
                console.log($('#change'))
                if(JSON.parse(data)==0){
                    $('#change').css('display','hidden')
                } else{
                    $('#change').css('display','block');
                    $('#change').html(JSON.parse(data));
                }
                
            }
        });
    }
    asd();
</script>
@endsection
