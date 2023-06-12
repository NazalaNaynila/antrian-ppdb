<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
      * {
          font-family: 'Secular One';
      }
  </style>
    <title>Display | Antrian PPDB</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('storage/css/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row py-2 border mb-2">
        <div class="col">
          <h1 class="text-center">DAFTAR ANTRIAN PPDB 2023/2024</h1>
        </div>
      </div>
    </div>
      
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-md-2 g-5 mb-2">
          <div class="col">
            <div class="card">
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>NOMOR ANTRIAN</b>
              </div>
              <div class="card-body">
                <h1 class="card-title" style="font-size: 150px;">
                  {{-- {{ $panggil->no_antrian }} --}}
                  <div id="counter"></div>
                </h1>
                <h4>
                  <div id="counterName"></div>
                  {{-- {{ $panggil->nama }}</h4> --}}
              </div>
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>
                  <div id="counterJalur"></div>
                {{-- if($panggil->jalur == "Zonasi")
                LOKET 1
                elseif($panggil->jalur == "Prestasi")
                LOKET 2
                elseif($panggil->jalur == "Afirmasi")
                LOKET 3
                elseif($panggil->jalur == "Perpindahan Orang Tua")
                LOKET 4
                endif --}}
                </b>
              </div>
            </div>
          </div>
          {{-- VIDEO --}}
          <div class="col">
            <video autoplay loop muted playsinline width="600">
              <source src="storage/img/video.mp4" type="video/mp4">
            </video>
          </div>
          {{-- END VIDEO --}}
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-5">
          <div class="col">
            <div class="card">
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>LOKET 1</b>
              </div>
              <div class="card-body">
                @if($loket1 != null)
                <h1 class="card-title">{{ $loket1->no_antrian }}</h1>
                @else
                <h3 class="card-title">0</h3>
                @endif
              </div>
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>ZONASI</b>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>LOKET 2</b>
              </div>
              <div class="card-body">
                @if($loket2 != null)
                <h1 class="card-title">{{ $loket2->no_antrian }}</h1>
                @else
                <h3 class="card-title">0</h3>
                @endif
              </div>
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>PRESTASI</b>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>LOKET 3</b>
              </div>
              <div class="card-body">
                @if($loket3 != null)
                <h1 class="card-title">{{ $loket3->no_antrian }}</h1>
                @else
                <h3 class="card-title">0</h3>
                @endif
              </div>
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>AFIRMASI</b>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>LOKET 4</b>
              </div>
              <div class="card-body">
                @if($loket4 != null)
                <h1 class="card-title">{{ $loket4->no_antrian }}</h1>
                @else
                <h3 class="card-title">0</h3>
                @endif
              </div>
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>PERPINDAHAN ORANG TUA</b>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script>
        $(document).ready(function(){
          setInterval(function() {
            countAntrian()
          }, 1000);
        });

        function countAntrian() {
          $.ajax({
            url: '/operator/count',
            type: "GET",
            dataType: "json",
            success: function(data) {
              if (data['jalur'] == 'Zonasi'){
                var theJalur = 'LOKET 1';
              } else if (data['jalur'] == 'Prestasi'){
                var theJalur = 'LOKET 2';
              } else if (data['jalur'] == 'Afirmasi'){
                var theJalur = 'LOKET 3';
              } else if (data['jalur'] == 'Perpindahan Orang Tua'){
                var theJalur = 'LOKET 4';
              }
              $("#counter").empty().append(data['no_antrian']);
              $("#counterName").empty().append(data['nama']);
              $("#counterJalur").empty().append(theJalur);
            }
          });
        }
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>