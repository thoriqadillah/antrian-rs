@extends('layouts.app')

@section('title', 'Admin')
@section('content')

<div class="container">
    <div class="card-group">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Loket 1</h3>
                @if (session('loket'))
                    <h1>{{session('loket')}}</h1>
                @else
                    <h1>{{$loket}}</h1>
                @endif
                <a href="{{route('next_pasien', ['poli' => '1'])}}" class="btn btn-primary">NEXT</a>
            </div>
        </div>
    
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Loket 2</h3>
                <h1>P2 2</h1>
                <a href="{{route('next_pasien', ['poli' => '2'])}}" class="btn btn-primary">NEXT</a>
            </div>
        </div>
    
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Loket 3</h3>
                <h1>P3 3</h1>
                <a href="{{route('next_pasien', ['poli' => '3'])}}" class="btn btn-primary">NEXT</a>
            </div>
        </div>
    </div>
</div>

@endsection