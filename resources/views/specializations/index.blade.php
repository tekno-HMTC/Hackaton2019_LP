@extends('layouts.master')
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

  .matkul-wrap .card{
      transition: all .2s ease-in-out;
  }
  
  .matkul-wrap .card:hover{
      transform: scale(1.05);
      cursor: pointer;
  }

  .m-4 {
    height: 140px;
  }

  .card-title {
      text-align: center;
      font-size: 30px;
  }

  .card.text-center.pb-3 {
        background-color: #425C6C;
  }

</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card border-info">
                    <div class="card-body">
                        <h5 class="card-title">Rumpun Mata Kuliah di Teknik Informatika</h5>
                        <div class="row matkul-wrap">
                            @foreach ($rmk as $item)
                                <div class="matkul mt-3 mb-3 col-md-6 col-lg-3">
                                    <a href="{{route('specializations.courses.index',$item->id)}}">
                                    <div class="card text-center pb-3 justify-content-center">
                                        <div class="card-body">
                                            <h2 class="card-title text-white m-3">{{$item->short}}</h2>
                                            <img class="m-4" src="/{{$item->path_logo}}">
                                            <h5 class="text-white card-text m-3">{{$item->name}}</h5>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>        
</div>
@endsection
