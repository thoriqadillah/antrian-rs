<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <title>Form Antrian</title>
</head>
<body>
    <div class="container mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <h3 class="my-4">Form Antrian</h3>
        <form action="{{route('antrian.post')}}" method="post">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script>
</html>