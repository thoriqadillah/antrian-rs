@extends('layouts.app')
@section('custom-css')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection
@section('title', 'Admin')
@section('content')

<div class="container">
    <div class="card-group">
        <div class="card text-center antrian-wrapper" style="width: 18rem;">
            <div class="card-headers">
                <img src="https://i.ibb.co/K2L3hnF/stethoscope-icon-gfe1c62d5a-1280.png" class="img">
                <div class="card-body">
                    <h3 class="card-title">Loket 1</h3>
                    <h1 class="nomor" data-id="1">{{ 'A' . $loket_1 ?? '1' }}</h1>
                    <span class="refresh" data-id="1"></span>
                    <button class="next px-4" data-id='1'>NEXT</button>
                </div>
            </div>
        </div>
    
        <div class="card text-center antrian-wrapper" style="width: 18rem;">
            <div class="card-headers">
                <img src="https://i.ibb.co/K2L3hnF/stethoscope-icon-gfe1c62d5a-1280.png" class="img">
                <div class="card-body">
                    <h3 class="card-title">Loket 2</h3>
                    <h1 class="nomor" data-id="2">{{ 'B' . $loket_2 ?? '1' }}</h1>
                    <span class="refresh" data-id="2"></span>
                    <button class="next px-4" data-id='2'>NEXT</button>
                </div>
            </div>
        </div>
    
        <div class="card text-center antrian-wrapper" style="width: 18rem;">
            <div class="card-headers">
                <img src="https://i.ibb.co/K2L3hnF/stethoscope-icon-gfe1c62d5a-1280.png" class="img">
                <div class="card-body">
                    <h3 class="card-title">Loket 3</h3>
                    <h1 class="nomor" data-id="3">{{ 'C' . $loket_3 ?? '1' }}</h1>
                    <span class="refresh" data-id="3"></span>
                    <button class="next px-4" data-id='3'>NEXT</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-script')

<script>
$(".next").on('click', function() {
    let id = $(this).data("id");
    let arr = ['A', 'B', 'C'];
    updateAntrian(id, arr[id - 1]);
});

function updateAntrian(id, loket) {
    let nomor = 1;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: `/next/${id}`,
        type: 'get',
        success: function(res) {
            let nomor = res.nomor;
            $(`.nomor[data-id=${id}]`).text(loket + "" + nomor);
        },
        statusCode: {
            404: function() {
                alert('web not found');
            }
        },
        error: function(x, xs, xt) {
            $(`.refresh[data-id=${id}]`).append(`<button class="next" id="refresh"  data-id='3' onClick="window.location.reload()">REFRESH</button>`)
        }
    });

}

</script>

@endsection