@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="grid">
    <h1>List Antrian Rumah Sakit</h1>
    
    <div class="container">
        <div class="g-col-6 g-col-md-4" id="box">
            <div class="box-head">
                <h3>Poli A</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">{{$nomorA['nomor'] ?? 'Kosong'}}</h1>
            </div>  
        </div>
        <div class="g-col-6 g-col-md-4" id="box">
            <div class="box-head">
                <h3>Poli B</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">{{$nomorB['nomor'] ?? 'Kosong'}}</h1>
            </div>  
        </div>
        <div class="g-col-6 g-col-md-4" id="box">
            <div class="box-head">
                <h3>Poli C</h3>
            </div>
            <div class="box-text">
                <h1 class="urutan" id="urutan" name="urutan">{{$nomorC['nomor'] ?? 'Kosong'}}</h1>
            </div>  
        </div>
        <a href="{{route('antrian.pendaftaran')}}">
            <button type="button" class="btn btn-success">Daftar Antrian</button>
        </a>
    </div>
</div>

@endsection
   