@extends('layouts.app')
@section('title', 'Pendaftaran Antrian')
@section('content')

<div class="container mt-5" >
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h3 class="my-4">Form Antrian</h3>
    <form action="{{route('antrian.pendaftaran.post')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="inputName">
        </div>
        <div class="mb-3">
            <label for="inputDate" class="form-label">Tanggal</label>
            <input type="text" class="form-control date" name="tanggal" id="inputDate">
        </div>
        <div class="mb-3">
            <label for="inputPoli" class="form-label">Poliklinik</label>
            <select class="form-select" name="poli" id="inputPoli">
                <option selected>-</option>
                <option value="1">Poli A</option>
                <option value="2">Poli B</option>
                <option value="3">Poli C</option>
            </select>
        </div>
        <a href="{{route('antrian')}}">
            <button type="button" class="btn btn-outline-primary">Kembali</button>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@section('custom-script')
<script>
    $('#inputDate').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    }).datepicker("setDate", 'now');
</script>
@endsection
    
@endsection
