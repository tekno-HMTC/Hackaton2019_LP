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
                                <select class="form-control" id="val-skill" name="rmk">
                                    <option value="">Pilih</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="angular">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Mata Kuliah <span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select class="form-control" id="val-skill" name="mk">
                                    <option value="">Pilih</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="angular">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Bab<span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select class="form-control" id="val-skill" name="bab">
                                    <option value="">Pilih</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="angular">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-8 ">
                                <label class="col-form-label" for="val-username">Modul <span class="text-danger">*</span></label>
                            </div>
                            <div class="row col-md-8">
                                <select class="form-control" id="val-skill" name="modul">
                                    <option value="">Pilih</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="angular">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
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
