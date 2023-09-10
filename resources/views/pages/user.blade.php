@extends('layout.base')
@section('title')
    Data User
@endsection
@section('content')
<div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header" style="background-color: white">
            <h5 class="card-title mb-4 float-left">Table User </h5>
            <button class="btn btn-primary float-right">Tambah Data</button>
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