@extends('layout.base')
@section('title')
    Data Surat
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background-color: white">
                    <h5 class="card-title mb-4 float-left">Buat {{ $type['data']['name'] }} </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('make') }}" method="POST">
                        @csrf
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
                            @switch($data)
                                @case(1)
                                    @include('pages.form.domisili')
                                @break

                                @case(2)
                                    @include('pages.form.sktm')
                                @break

                                @default
                            @endswitch
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
