@extends('layouts.app')
@section('title', 'Home')

@section('jumbotron')
<div class="jumbotron" >
  <h1 class="display-4">RS Brawijaya</h1>
  <p class="lead">Pilihan untuk keluarga anda </p>
  <!-- <a href="https://ibb.co/n0M0bB6"><img src="https://i.ibb.co/59h96kG/pexels-pavel-danilyuk-6812561.jpg" alt="pexels-pavel-danilyuk-6812561"></a>  <a href="{{route('antrian.pendaftaran')}}"> -->     
  <div class="text-center">
    <button type="button" class="btn btn-info" style='color: white'>Daftar Disini</button>
  <!-- </a>   -->
  </div>
</div>
@endsection
@section('content')
<div class="container">
  <div class="row">
    @foreach($posts as $post)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
               <h2 class="card-title" >{{  $post->nama_poli  }}</h2>
               <p class="card-text">{!! $post->deskripsi !!}</p>
            </div>
        </div>
    </div>
    @endforeach  
  </div>    
</div>
@endsection

