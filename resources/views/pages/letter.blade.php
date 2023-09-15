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
                                    <th>Surat</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nomor Surat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tb-body">
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
            $.get(`${baseUrl}/api/v1/letter`, (res) => {
                    let data = res.data

                    $('#tb-body').html('')
                    if (data.length > 0) {
                        $.each(data, (i, d) => {
                            if (d.nomor_surat) { // Check if nomor_surat is defined
                            $('#tb-body').append(`
                                <tr>
                                    <td style="width: 20px">${i + 1}</td>
                                    <td class="text-capitalize">${d.letter_type.name}</td>
                                    <td class="text-capitalize">${d.nama_pemohon}</td>
                                    <td class="text-capitalize">${d.nomor_surat}</td>
                                    <td style="width: 250px">
                                        <a href="/letters/remake/${d.nomor_surat}" id="btn-edit" type="button" data-id="${d.id}" class="btn btn-custon-rounded-three btn-primary">
                                            <i class="fa fa-print" aria-hidden="true"></i> Cetak
                                        </a>
                                    </td>
                                </tr>
                            `);
                            }
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
