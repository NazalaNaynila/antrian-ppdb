<!doctype html>
<html lang="en">
  <head>
    <!--Required meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('storage/css/style.css') !!}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
        * {
            font-family: 'Secular One';
        }
    </style>
    <title>Antrian PPDB</title>
  </head>
  <body>
    <h1 class="text-center mt-4">Selamat Datang</h1>
    <div class="text-center mt-5">
        <img src="{{ asset('storage/img/logosmk.png') }}" alt="logo" width="200">
    </div>
    <h3 class="text-center mt-4">Penerimaan Peserta Didik Baru</h3>
    <h3 class="text-center">Tahun Ajaran 2023/2024</h3>
    <div class="mt-5 text-center">
        <a type="button" href="/form" class="btn btn-danger btn-end">Next</a>
    </div>
    @if (Session::has('success'))
    <div class="pt-3">
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
        
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>