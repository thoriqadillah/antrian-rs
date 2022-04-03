@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class='container'>
    @foreach($posts as $post)
        <article class="mb-5">
        <h2>
            {{  $post->nama_poli  }}
        </h2>
        {!! $post->deskripsi !!}
        </article>
    @endforeach
    <a href="{{route('antrian.pendaftaran')}}">
        <button type="button" class="btn btn-info" style='color: white'>Daftar Disini</button>
    </a>
</div>
@endsection

