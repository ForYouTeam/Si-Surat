@extends('layout.base')
@section('title')
    Data Surat
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background-color: white">
                    <form action="{{ route('add') }}" method="GET">
                        @csrf
                        <h5 class="card-title mb-4 float-left">Table Surat </h5>
                        {{-- <a href="{{ route('surat-kelahiran') }}" class="btn btn-success float-right mr-3">Cetak Surat</a> --}}
                        <div class="col-2 float-right">
                            <select name="letter_type_id" class="form-control" id="" required
                                aria-placeholder="Jenis Surat">
                                <option value="" selected disabled>Jenis Surat</option>
                                @foreach ($type['data'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table center-aligned-table" id="tabel-data">
                            <thead>
                                <tr class="text-primary">
                                    <th>No</th>
                                    <th>Invoice Subject</th>
                                    <th>Client</th>
                                    <th>VatNo.</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>034</td>
                                    <td>Designs</td>
                                    <td>Client</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td>$349</td>
                                    <td><a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>034</td>
                                    <td>Nazar</td>
                                    <td>Client</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td>$349</td>
                                    <td><a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
