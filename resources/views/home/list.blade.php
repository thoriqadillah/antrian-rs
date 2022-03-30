@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="row">
    <h1>List Antrian Rumah Sakit</h1>
    <div class="container">
        <div class="icon-box1">
            <div class="box-head">
                <h3>Poli A</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">C16</h1>
            </div>  
        </div>
        <div class="icon-box1">
            <div class="box-head">
                <h3>Poli A</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">C16</h1>
            </div>  
        </div>
        <div class="icon-box1">
            <div class="box-head">
                <h3>Poli A</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">C16</h1>
            </div>  
        </div>
    </div>
</div>

@endsection
   