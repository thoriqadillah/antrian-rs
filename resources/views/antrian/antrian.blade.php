@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="grid">
    <h1>List Antrian Rumah Sakit</h1>
    <div class="container">
        <a class="mb-2" href="{{route('antrian.pendaftaran')}}">
            <button type="button" class="btn-daftar" style="margin-bottom:20px;" >Daftar Antrian</button>
        </a>
    </div>    
    <div class="container" id="antrian"></div>

    @auth
        <div class="container card-group" id="antrian-wrapper">
            <div class="card border-dark text-center my-5" id="lists">
                <div class="antrian">
                    <div class="card-headers">
                        <img src="https://i.ibb.co/K2L3hnF/stethoscope-icon-gfe1c62d5a-1280.png" class="img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Nomor Antrian Anda</h5>
                        <h1 class="card-text">{{ $loket . '' . $nomor }}</h1>
                    </div>
                </div>
            </div>
        </div>
    @endauth


<script>
    $(document).ready(function(){
        get_antrian();
        setInterval(get_antrian, 1000);
    });
    function get_antrian(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'antrian/nomor',
            type: 'get',
            success: function(res) {
                const nomors = res.nomors;
                const polis = res.polis;
                $('#antrian').html("")
                let arr = ['A', 'B', 'C'];
                for(let i = 0;i < 3; i++){
                    $('#antrian').append($(
                        `<div class="antrian-wrapper">
                            <div class="container">
                                <div class="card-headers">
                                    <img src="https://i.ibb.co/K2L3hnF/stethoscope-icon-gfe1c62d5a-1280.png" class="img">
                                        <div class="card-body">
                                            <h3 class='card-title text-center'>${arr[i]} ${polis[i]['nama_poli']}</h3>
                                            <h1>${arr[i]}${nomors[i]['nomor']}</h1>
                                        </div>
                                 </div>
                            </div>
                        </div>
                        `
                        )
                    )
                    }
            },
            statusCode: {
                404: function() {
                    alert('web not found');
                }
            },
            error: function(x, xs, xt) {
                console.log(JSON.stringify(x));
            }
        });
    }
</script>
@endsection
