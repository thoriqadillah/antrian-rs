@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection

@section('title', 'Antrian')
@section('content')

<div class="grid">
    <h1>List Antrian Rumah Sakit</h1>
    
    <div class="container" id="antrian">
    </div>
    <div class="container">
        <a href="{{route('antrian.pendaftaran')}}">
            <button type="button" class="btn btn-success" >Daftar Antrian</button>
        </a>
    </div>    

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
                for(let i = 0;i < 3; i++){
                    $('#antrian').append($(
                        `<div class='card-group'>
                            <div class='card'>
                                <div class="card-body">
                                    <h3 class='card-title text-center'>${polis[i]['nama_poli']}</h3>
                                    <h1>${nomors[i]['nomor']}</h1>
                                </div>
                            </div>
                        </div>`
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
