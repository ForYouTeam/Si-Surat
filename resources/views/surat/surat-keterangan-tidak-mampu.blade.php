<div style="width: 90%; margin-left: 2rem; margin-top: 1.5rem; text-align: justify">
    <font size="3">
        &nbsp; &nbsp; &nbsp;Yang bertanda tangan di bawah ini jabatan kepala desa Tolai , Kecamatan Torue,
        Kabupaten Parigi Moutong, Provinsi Sulawesi Tengah menerangkan dengan sebenarnya bahwa pada:
    </font>
    <table style="font-size: 11pt; margin-top: 0.5rem; margin-left: 2rem; width: 100%">
        <tr>
            <td style="width: 1.5rem">1.</td>
            <td style="width: 13rem">Nama Lengkap</td>
            <td style="width: 0.4rem">:</td>
            <td>{{ $data->nama_pemohon }}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>No.KTP</td>
            <td>:</td>
            <td>{{ $data->no_ktp }}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Tempat / Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $data->tempat_lahir }} / {{ $data->tgl_lahir }}</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $data->jk }}</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>{{ $data->kewarganegaraan }}</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $data->agama }}</td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{ $data->pekerjaan }}</td>
        </tr>
        <tr>
            <td>9.</td>
            <td>Tempat Tinggal</td>
            <td>:</td>
            <td>{{ $data->tempat_tinggal }}</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1.5rem; text-align: justify">
    &nbsp; &nbsp; &nbsp; &nbsp;Bahwa yang tersebut namanya diatas, sepanjang pengetahuan dan penelitian kami hingga saat
    dikeluarkannya
    surat keterangan ini memang benar Keluarga yang KURANG MAMPU dan tidak memiliki penghasilan tetap.
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 0.5rem; text-align: justify">
    Surat Keterangan ini dibuat untuk keperluan : Tidak Mampu <br><br>
    &nbsp; &nbsp; &nbsp; &nbsp;Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan
    sebagaimana mestinya.
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 0.5rem; text-align: justify">
    <table style="width: 100%">
        <tr>
            <td style="width: 55%"></td>
            <td align="center">Desa Tolai, {{ $data->tgl_surat }} <br> Penandatangan</td>
        </tr>
        <tr>
            <td style="height: 100px"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><u><b> {{$data->pj}} </b></u><br>NIP : {{$data->nip}}</td>
        </tr>
    </table>
</div>
