@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="grid">
    <h1>List Antrian Rumah Sakit</h1>
    
    <div class="container">
        <div class='card-group'>
            <div class='card'>
                <div class="card-body">
                    <h3 class='card-title text-center'>{{$poli[0]['nama_poli']}}</h3>
                    <h1>{{$nomorA['nomor'] ?? 'Kosong'}}</h1>
                  </div>
            </div>
        </div>
        <div class='card-group'>
            <div class='card'>
                <div class="card-body">
                    <h3 class='card-title text-center'>{{$poli[1]['nama_poli']}}</h3>
                    <h1>{{$nomorB['nomor'] ?? 'Kosong'}}</h1>
                  </div>
            </div>
        </div>
        <div class='card-group'>
            <div class='card'>
                <div class="card-body">
                    <h3 class='card-title text-center'>{{$poli[2]['nama_poli']}}</h3>
                    <h1>{{$nomorC['nomor'] ?? 'Kosong'}}</h1>
                  </div>
            </div>
        </div>
        <a href="{{route('antrian.pendaftaran')}}">
            <button type="button" class="btn btn-success" >Daftar Antrian</button>
        </a>
    </div>
</div>

@endsection
   