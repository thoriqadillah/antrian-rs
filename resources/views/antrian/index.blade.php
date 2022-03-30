@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="grid">
    <h1>List Antrian Rumah Sakit</h1>
    
    <div class="container">
        <div class="g-col-6 g-col-md-4">
            <div class="box-head">
                <h3>Poli A</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">C16</h1>
            </div>  
        </div>
        <div class="g-col-6 g-col-md-4">
            <div class="box-head">
                <h3>Poli A</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">C16</h1>
            </div>  
        </div>
        <div class="g-col-6 g-col-md-4">
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
   