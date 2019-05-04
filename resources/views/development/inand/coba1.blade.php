@extends('layouts.master')
<!-- ini kulguy -->

@section('AddCss')
<style>

</style>
@endsection
@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Permintaan</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>RMK</th>
                            <th>Mata Kuliah</th>
                            <th>Bab</th>
                            <th>Modul</th>
                            <th>Materi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Kolor Tea Shirt For Man</td>
                            <td><span class="badge badge-primary px-2">Sale</span>
                            </td>
                            <td>January 22</td>
                            <td class="color-primary">$21.56</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Kolor Tea Shirt For Women</td>
                            <td><span class="badge badge-danger px-2">Tax</span>
                            </td>
                            <td>January 30</td>
                            <td class="color-success">$55.32</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Blue Backpack For Baby</td>
                            <td><span class="badge badge-success px-2">Extended</span>
                            </td>
                            <td>January 25</td>
                            <td class="color-danger">$14.85</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
