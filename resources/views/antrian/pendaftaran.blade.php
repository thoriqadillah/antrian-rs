@extends('layouts.app')
@section('title', 'Pendaftaran Antrian')
@section('content')

<div class="container mt-5" style="max-width: 960px;">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h3 class="my-4 header">Form Antrian</h3>
    <form action="{{route('antrian.pendaftaran.post')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="inputName" value="{{Auth::user()->name;}}" required>
        </div>
        <div class="mb-3">
            <label for="inputDate" class="form-label">Tanggal</label>
            <input type="text" class="form-control date" name="tanggal" id="inputDate"  required>
        </div>
        <div class="mb-3">
            <label for="inputPoli" class="form-label">Poliklinik</label>
            <select class="form-select" name="poli" id="inputPoli"  required>
                <option selected>-</option>
                @foreach ($polis as $poli)
                    <option value="{{$poli->id}}">{{$poli->nama_poli}}</option>
                @endforeach
            </select>
        </div>
        <a href="{{route('antrian')}}">
            <button type="button" class="btn btn-outline-dark">Kembali</button>
        </a>
        <button type="submit" class="btn fw-bold" style="background-color: #efefef; color: #000">Submit</button>
    </form>
</div>

@section('custom-script')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script>
    var date = new Date();
    date.setDate(date.getDate());
    $('#inputDate').datepicker({
        autoclose: true,
        startDate: date,
        todayBtn: true,
        format: 'dd-mm-yyyy'
    }).datepicker("setDate", 'now');
</script>
@endsection
    
@endsection
