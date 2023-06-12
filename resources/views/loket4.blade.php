@extends('sidebar')
@section('content')
<?php $sidetitle = 'Loket4' ?>

 {{-- CONTENT HERE --}}
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Loket 4 - Perpindahan Orang Tua</h1>
  </div>
  <div class="row">
    <div class="col">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NISN</th>
              <th>Jalur Pendaftaran</th>
              <th>Nomor Antrian</th>
              <th>Nomor Telepon</th>
              <th>Aksi</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            @foreach ($datas as $data)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $data->Nama }}</td>
              <td>{{ $data->NISN }}</td>
              <td>{{ $data->Jalur_Pendaftaran }}</td>
              <td>{{ $data->Nomor_Antrian }}</td>
              <td>{{ $data->No_Telefon }}</td>
              <td>
                @if($data->status == true)
                <a href="/operator/panggil/{{ $data->id }}" id="btn-delete-post" class="btn btn-primary btn-sm">PANGGIL</a>
                @else
                <a href="/operator/panggil/{{ $data->id }}" id="btn-delete-post" class="btn btn-success btn-sm">PANGGIL</a>
                @endif
                <a href="/operator/loket1/{{ $data->id }}/delete" id="btn-delete-post" class="btn btn-danger btn-sm">DELETE</a>
              </td>
              <td>
                @if($data->status == true)
                {{ $data->updated_at->format('d-m-y h:i') }}
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
{{-- END CONTENT --}}

@if(session('playsound'))
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <audio src="{{ asset('storage/suara_antrian/'. session('playsound')) }}" id="myAudio"></audio>
    </div>
  </div>
</div>

<script>
  var audio = document.getElementById("myAudio");
    audio.loop = false;
    audio.play();
</script>
@endif

@endsection