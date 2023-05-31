@extends('sidebar')
@section('content')
<?php $sidetitle = 'Loket1' ?>

 {{-- CONTENT HERE --}}
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Loket 1 - Zonasi</h1>
  </div>
  <div class="row">
    <div class="col">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NISN</th>
              <th>Jalur Pendaftaran</th>
              <th>Nomor Antrian</th>
              <th>Nomor Telepon</th>
              <th>Aksi</th>
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
                <a href="/operator/loket1/{{ $data->id }}/delete" id="btn-delete-post" class="btn btn-danger btn-sm">DELETE</a>
                <a href="/operator/panggil/{{ $data->id }}" id="btn-delete-post" class="btn btn-success btn-sm">PANGGIL</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
{{-- END CONTENT --}}

@endsection