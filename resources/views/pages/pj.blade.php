@extends('layout.base')
@section('title')
    Penanggung Jawab
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background-color: white">
                    <h5 class="card-title mb-4 float-left">Table Penanggung Jawab </h5>
                    <button id="btn-add" class="btn btn-primary float-right">Tambah Data</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table center-aligned-table" id="tabel-data">
                            <thead>
                                <tr class="text-primary">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Nip</th>
                                    <th>Aksi</th>
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
    <div id="modal-data" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-body">
                    <h4 class="" id="modal-title">Formulir Tambah Data</h4>
                    <hr>
                    <div class="" style="margin-top: 20px">
                        <form action="#">
                            <input type="hidden" class="val" name="id" id="id">
                            <div class="form-group-inner">
                                <label style="float: left">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control val"
                                    placeholder="Input disini">
                                <span class="text-danger alrt" id="alert-nama"></span>
                            </div>
                            <div class="form-group-inner">
                                <label style="float: left">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" class="form-control val"
                                    placeholder="Input disini">
                                <span class="text-danger alrt" id="alert-jabatan"></span>
                            </div>
                            <div class="form-group-inner">
                                <label style="float: left">NIP</label>
                                <input type="text" name="nip" id="nip" class="form-control val"
                                    placeholder="Input disini">
                                <span class="text-danger alrt" id="alert-nip"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-custon-four btn-md btn-danger">Cancel</button>
                    <button onclick="postData()" class="btn btn-custon-four btn-md btn-primary">Simpan</button>
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
            $('#tabel-data').DataTable().destroy()
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
                            `);
                        });
                    }
                    $('#tabel-data').DataTable()
                })
                .fail((err) => {
                    iziToast.error({
                        title: 'Error',
                        message: 'Server sedang maintenance',
                        position: 'topRight'
                    });
                })
        }

        function postData() {
            const data = {
                id: $('#id').val(),
                nama: $('#nama').val(),
                jabatan: $('#jabatan').val(),
                nip: $('#nip').val()
            }

            $.ajax({
                url: `${baseUrl}/api/v1/pj`,
                method: "POST",
                data: data,
                success: function(res) {
                    $('#modal-data').modal('hide')
                    Swal.fire({
                        title: 'Success',
                        text: 'Proses Berhasil.',
                        icon: 'success',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Oke'
                    });

                    getAllData()
                },
                error: function(err) {
                    if (err.status = 422) {
                        let data = err.responseJSON
                        let errorRes = data.errors;
                        if (errorRes.length >= 1) {
                            $.each(errorRes.data, (i, d) => {
                                $(`#alert-${i}`).html(d)
                            })
                        }
                    } else {
                        iziToast.error({
                            title: 'Error',
                            message: 'Server sedang maintenance',
                            position: 'topRight'
                        });
                    }
                },
                dataType: "json"
            });
        }


        $(document).on('click', '#btn-del', function() {
            let dataId = $(this).data('id')
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data tidak dapat dipulihkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Waiting',
                        text: "Processing Data!",
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                    $.ajax({
                        url: `${baseUrl}/api/v1/pj/${dataId}`,
                        type: 'delete',
                        success: function(result) {
                            let data = result.data;
                            setTimeout(() => {
                                Swal.close()
                                getAllData()
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Berhasil Menghapus Data.',
                                    icon: 'success',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Oke'
                                });
                            }, 500);
                        },
                        error: function(result) {
                            let data = result.responseJSON
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: data.response.message,
                                position: 'topRight'
                            });
                        }
                    });
                }
            })
        })

        $(document).on('click', '#btn-edit', function() {
            clearInput()
            $('#modal-title').html('Formulir Edit Data')
            let dataId = $(this).data('id')
            $.get(`${baseUrl}/api/v1/pj/${dataId}`, (res) => {
                let data = res.data
                $.each(data, (i, d) => {
                    if (i != "created_at" && i != "updated_at") {
                        $(`#${i}`).val(d)
                    }
                })
                $('#modal-data').modal('show')
            }).fail((err) => {
                iziToast.error({
                    title: 'Error',
                    message: 'Server sedang maintenance',
                    position: 'topRight'
                });
            })
        })

        $(document).ready(function() {
            getAllData()
        })
    </script>
@endsection
