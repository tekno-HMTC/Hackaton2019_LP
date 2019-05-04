@extends('layouts.master')
<!-- ini kulguy -->

@section('AddCss')
<style>
    .nav-item {
        min-width: 25%;
        text-align: center;
    }

    .row.col-md-8 {
        margin: auto;
    }

    .content-body{
        min-height: 0px !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
                <h5 class="card-title" style="display: flex;justify-content: space-between;">Permintaan Materi Baru</h5>
                <div class="form-validation">
                    <form class="form-valide" action="#" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Rumpun Mata Kuliah <span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select class="form-control" id="select-rmk" name="specialization_id">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Mata Kuliah <span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select id="select-course" class="form-control" id="val-skill" name="course_id">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Bab<span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select id="select-chapter" class="form-control" id="val-skill" name="chapter_id">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Modul <span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select id="select-module" class="form-control" id="val-skill" name="module_id">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Materi <span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Apa yang kamu minta?"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="row col-md-8">
                                <button type="submit" class="btn btn-primary" style="margin: auto;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
@section('addJS')
<script>

    function getRMK(){
        var o = new Option("Pilih", "");
        $('#select-rmk').append(o)
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost:8000/api/spec/', 
            dataType: 'json',
            success: function (data) { 
                $.each(data, function(index, element) {
                    var opt = new Option(element.name, element.id);
                    $('#select-rmk').append(opt);
                });
            }
        });
    }

    function pilihRMK(){
        $('#select-course').find('option').remove();
        var o = new Option("Pilih", "");
        $('#select-course').append(o)
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost:8000/api/specs/' + $('#select-rmk').find(":selected").val(),  
            dataType: 'json',
            success: function (data) { 
                $.each(data, function(index, element) {
                    var opt = new Option(element.name, element.id);
                    $('#select-course').append(opt);
                });
            }
        });
    }

    function pilihCourse(){
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost:8000/api/course/' + $('#select-course').find(":selected").val(),
            dataType: 'json',
            success: function (data) { 
                $.each(data, function(index, element) {
                    var opt = new Option(element.name, element.id);
                    $('#select-chapter').append(opt);
                });
            }
        });
    }

    function pilihChapter(){
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost/api/chapter/' + $('#select-chapter').find(":selected").val(),
            dataType: 'json',
            success: function (data) { 
                $.each(data, function(index, element) {
                    var opt = new Option(element.name, element.id);
                    $('#select-module').append(opt);
                });
            }
        });
    }

    getRMK();
    $('#select-rmk').change(function(){
        console.log('edit RMK');
        pilihRMK();
    });
    $('#select-course').change(function(){
        console.log('edit MK');
        pilihCourse()
    });
    $('#select-chapter').change(pilihChapter());

</script>
@endsection