<div style="width: 90%; margin-left: 2rem; margin-top: 1.5rem; text-align: justify">
    <font size="3">
        Pada Tanggal {{$data->tgl_surat}}:
    </font>
    <table style="font-size: 12pt; margin-top: 0.5rem; width: 100%">
        <tr>
            <td style="width: 1.5rem">1.</td>
            <td style="width: 6rem">Nama</td>
            <td style="width: 0.4rem">:</td>
            <td>{{$data->nama_pemohon}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$data->jabatan_new}}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">Selanjutnya disebut pihak pertama</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1.5rem; text-align: justify">
    Pihak pertama menyerahkan barang inventaris kepada pihak kedua telah menerimanya, adapun barang yang di maksud antara lain berupa : <br>
    <table style="width: 100%; text-align: center; margin-top: 1rem" border="1">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Volume</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>{{$data->nama_barang}}</td>
            <td> {{$data->volume}} </td>
            <td>{{$data->keterangan}}</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1.5rem; text-align: justify">
    Dengan ketentuan:
    <table style="width: 100%; text-align: justify">
        <tr>
            <td>1</td>
            <td>Pihak kedua menggunakan barang untuk kepentingan kegiatan.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pihak kedua bertanggung jawab apabila terjadi kehilangan/kerusakan barang yang diterima.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Pihak kedua tidak memindah tangankan barang yang diterima kepada pengelola dan</td>
        </tr>
        <tr>
            <td></td>
            <td>petugas/pengurus aset desa / pihaka pertama.</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 0.8rem; text-align: justify">
    Demikian, Berita acara ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1rem; text-align: justify">
    <table style="width: 100%">
        <tr>
            <td align="center" style="width: 55%">Pihak pertama <br> yang menerima,</td>
            <td></td>
            <td align="center" style="width: 55%">Pihak kedua <br> yang menerima,</td>
        </tr>
        <tr>
            <td style="height: 70px"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td align="center"><b>{{$data->pihak_pertama}}</b></td>
            <td></td>
            <td align="center"><b>{{$data->pihak_kedua}}</b></td>
        </tr>
        <tr>
            <td style="height: 30px"></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td align="center" style="width: 55%">Mengetahui <br> Kepala desa {{$data->pj}},</td>
            <td></td>
            <td align="center" style="width: 55%">Saksi <br> Mewakili kader {{$data->nama_pemohon}},</td>
        </tr>
        <tr>
            <td style="height: 70px"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td align="center"><b>{{$data->pj}}</b></td>
            <td></td>
            <td align="center"><b>{{$data->nama_pemohon}}</b></td>
        </tr>
    </table>
</div>