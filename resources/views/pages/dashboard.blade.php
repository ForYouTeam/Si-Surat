@extends('layout.base')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <p class="card-text text-dark">SKTM</p>
                        <h4 class="bold-text">{{$data['sktm']}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <p class="card-text text-dark">Surat Keterangan Domisili</p>
                        <h4 class="bold-text">{{$data['domisili']}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <p class="card-text text-dark">Surat Keputusan</p>
                        <h4 class="bold-text">{{$data['keputusan']}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <p class="card-text text-dark">Surat Tanda Terima</p>
                        <h4 class="bold-text">{{$data['tt']}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <p class="card-text text-dark">Surat Undangan</p>
                        <h4 class="bold-text">{{$data['undangan']}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
