@extends('layout.base')
@section('title')
    Data Surat
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background-color: white">
                    <h5 class="card-title mb-4 float-left">Tambah {{ $type['data']['name'] }} </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pemohon</label>
                                <input type="hidden" name="letter_type_id" value="{{ $data }}">
                                <input type="text" class="form-control p-input" name="nama_pemohon"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tgl Surat</label>
                                <input type="date" class="form-control p-input" name="tgl_surat" required>
                            </div>
                        </div>
                        @include('pages.form.sktm')
                    </div>
                    <button class="btn btn-primary float-right">Buat</button>
                </div>
            </div>
        </div>
    </div>
@endsection
