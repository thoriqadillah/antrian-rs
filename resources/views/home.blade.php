@extends('layouts\main')

@section('container')
    @foreach($posts as $post)
    <article class="mb-5">
    <h2>
        {{  $post->nama_poli  }}
    </h2>
    {!! $post->deskripsi !!}
    </article>
    @endforeach
    <button type="button" class="btn btn-info">Daftar Disini</button>
@endsection

