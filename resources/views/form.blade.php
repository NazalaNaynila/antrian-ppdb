<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="{!! asset('storage/css/style.css') !!}">
@extends('layout')
       <!-- START FORM -->
       @section('konten')
      
       @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif

       <form action='/form' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='NISN' id="NISN" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='Nama' id="Nama" required>
                </div>
            </div>
            <div class="mb-3 row">
              <label for="Jalur_Pendaftaran" class="col-sm-2 col-form-label">Jalur Pendaftran</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name='Jalur_Pendaftaran' id="Jalur_Pendaftaran">
                  <option value="Zonasi">Zonasi</option>
                  <option value="Prestasi">Prestasi</option>
                  <option value="Afirmasi">Afirmasi</option>
                  <option value="Perpindahan Orang Tua">Perpindahan Orang Tua</option>
                </select>
                  {{-- <input type="text" class="form-control" name='Jalur_Pendaftran' id="Jalur_Pendaftran"> --}}
              </div>
          </div>
            <div class="mb-3 row">
              <label for="No_Telefon" class="col-sm-2 col-form-label">No Telefon</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name='No Telefon' id="No_Telefon" required>
              </div>
          </div>
          <a class="btn btn-primary" href="/form" role="button">RESET</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                SIMPAN
            </button>
            <!-- POP UP -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Apakah Anda Yakin Untuk Mengirimkan Data Tersebut Kepada Admin?</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">TIDAK</button>
                           <button type="submit" class="btn btn-success">IYA</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AKHIR POP UP -->
          </form>
        </div>
        <!-- AKHIR FORM -->
       @endsection        