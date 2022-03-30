@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="grid">
    <h1>List Antrian Rumah Sakit</h1>
    
    <div class="container">
        @for($i = 0; $i < count($poli); $i++)
        <div class='card-group'>
            <div class='card'>
                <div class="card-body">
                    <h3 class='card-title text-center'>{{$poli[$i]->nama_poli}}</h3>
                    <h1>{{$nomor[$i]->nomor ?? 'Kosong'}}</h1>
                  </div>
            </div>
        </div>
        @endfor
        <a href="{{route('antrian.pendaftaran')}}">
            <button type="button" class="btn btn-success" >Daftar Antrian</button>
        </a>
    </div>
</div>

@endsection
   