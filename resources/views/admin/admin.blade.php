@extends('layouts.app')

@section('title', 'Admin')
@section('content')

<div class="container">
    <div class="card-group">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Loket 1</h3>
                <h1 class="nomor" data-id="1">{{ $loket_1 }}</h1>
                <span class="refresh" data-id="1"></span>
                <button class="btn btn-primary btn-md btn-block next"  data-id='1'>NEXT</button>
            </div>
        </div>
    
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Loket 2</h3>
                <h1 class="nomor" data-id="2">{{ $loket_2 }}</h1>
                <span class="refresh" data-id="2"></span>
                <button class="btn btn-primary next"  data-id='2'>NEXT</button>
            </div>
        </div>
    
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Loket 3</h3>
                <h1 class="nomor" data-id="3">{{ $loket_3 }}</h1>
                <span class="refresh" data-id="3"></span>
                <button class="btn btn-primary next"  data-id='3'>NEXT</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-script')

<script>
$(".next").on('click', function() {
    let id = $(this).data("id");
    updateAntrian(id);
});

function updateAntrian(id) {
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
            nomor = res.nomor;
            $(`.nomor[data-id=${id}]`).text(nomor);
        },
        statusCode: {
            404: function() {
                alert('web not found');
            }
        },
        error: function(x, xs, xt) {
            $(`.refresh[data-id=${id}]`).append(`<button class="btn btn-outline-primary btn-md btn-block"  data-id='3' onClick="window.location.reload()">REFRESH</button>`)
        }
    });

}

</script>

@endsection