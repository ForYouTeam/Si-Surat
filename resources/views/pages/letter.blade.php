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
                            <select name="id_jenis_surat" class="form-control" id="" required
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
                                    <th>Nama Pemohon</th>
                                    <th>Nomor Surat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>1</td>
                                    <td>Ahmad</td>
                                    <td>SRT-002</td>
                                    <td><a href="#" class="btn btn-primary"><i class="fa fa-print"></i></a>
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
@section('js')
    <script>
        const baseUrl = `{{ config('app.url') }}`

        function clearInput() {
            $('.val').val('')
            $('.alrt').html('')
        }

        $(document).on('click', '#btn-add', function() {
            clearInput()
            $('#modal-data').modal('show')
        })

        function getAllData() {
            // $('#table-data').DataTable().destroy()
            $.get(`${baseUrl}/api/v1/pj`, (res) => {
                    let data = res.data

                    $('#tb-body').html('')
                    if (data.length > 0) {
                        $.each(data, (i, d) => {
                            $('#tb-body').append(`
                        <tr>
                            <td style="width: 20px">${i + 1}</td>
                            <td class="text-capitalize">${d.nama}</td>
                            <td class="text-capitalize">${d.jabatan}</td>
                            <td class="text-capitalize">${d.nip}</td>
                            <td style="width: 250px">
                                <button id="btn-edit" type="button" data-id="${d.id}" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                                <button id="btn-del" type="button" data-id="${d.id}" class="btn btn-custon-rounded-three btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                            </td>
                        </tr>
                    `)
                        })
                    } else {
                        $('#tb-body').append(`
                <tr>
                    <td colspan="6" style="text-align: center">
                        Data tidak ditemukan <br>
                        Silahkan tambah data terlebih dahulu
                    </td>
                </tr>
            `)
                    }

                    // $('#table-data').DataTable();
                })
                .fail((err) => {
                    iziToast.error({
                        title: 'Error',
                        message: 'Server sedang maintenance',
                        position: 'topRight'
                    });
                })
        }

        $(document).ready(function() {
            getAllData()
        })
    </script>
@endsection
