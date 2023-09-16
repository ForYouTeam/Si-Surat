@extends('layout.base')
@section('title')
    Home
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title font-weight-normal text-primary">{{$data['sktm']}}</h4>
                        <h6 class="card-subtitle mb-4">Surat KTM</h6>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-envelope float-right icon-grey-big text-success"></i>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title font-weight-normal text-primary">{{$data['domisili']}}</h4>
                        <h6 class="card-subtitle mb-4">Surat Domisili</h6>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-envelope float-right icon-grey-big text-primary"></i>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title font-weight-normal text-primary">{{$data['keputusan']}}</h4>
                        <h6 class="card-subtitle mb-4">Surat Keputusan</h6>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-envelope float-right icon-grey-big text-danger"></i>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title font-weight-normal text-primary">{{$data['tt']}}</h4>
                        <h6 class="card-subtitle mb-4">Surat Tanda Terima</h6>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-envelope float-right icon-grey-big text-warning"></i>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title font-weight-normal text-primary">{{$data['undangan']}}</h4>
                        <h6 class="card-subtitle mb-4">Surat Undangan</h6>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-envelope float-right icon-grey-big text-dark"></i>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
