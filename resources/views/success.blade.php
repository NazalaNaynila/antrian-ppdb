<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- My CSS -->
     <link rel="stylesheet" type="text/css" href="{!! asset('storage/css/style.css') !!}">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
        * {
            font-family: 'Secular One';
        }
    </style>
  </head>
  <body>
    <div class="text-center">
    <img src="storage/img/gif.gif">
    </div>
    <h1 class="text-center mt-4">Selamat, {{ $store->Nama }} Data Anda Telah diterima!!!</h1> <br>
    <h3 class="text-center mt-4">Nomor Antrian Anda</h3>
    <h3 class="text-center mt-4">{{ $store->Nomor_Antrian }}</h3>
    <div class="mt-5 text-center">
        <a type="button" href="/form" class="btn btn-primary">BACK TO FORM</a>
        <a type="button" href="/form" class="btn btn-primary">PRINT</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>