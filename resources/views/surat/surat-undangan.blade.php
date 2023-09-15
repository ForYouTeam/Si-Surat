<div style="width: 90%; margin-top: 0.5rem; text-align: justify">
    <table style="font-size: 11pt; margin-top: 0.5rem; margin-left: 2rem; width: 100%">
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>{{$data->new_no_surat}}</td>

            <td style="width: 10rem"></td>
            <td align="right">Tolai, {{$data->tgl_surat}}</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td> {{$data->lampiran}} </td>

            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>:</td>
            <td> {{$data->perihal}} </td>

            <td></td>
            <td></td>
        </tr>
    </table>
    <table style="font-size: 11pt; margin-top: 0.5rem; margin-left: 2rem; width: 100%">
        <tr>
            <td>Kepada Yth</td>
        </tr>
        <tr>
            <td>Para Kepala Dusun/RT/RW</td>
        </tr>
        <tr>
            <td>Desa Tolai</td>
        </tr>
        <tr>
            <td>Di Tempat</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1.5rem; text-align: justify">
    Dengan Hormat <br><br>
    &nbsp; &nbsp; &nbsp; Sehubungan dengan adanya sesuatu hal yang harus dimusyawarahkan terkait {{$data->kegiatan}}, maka dengan ini kami mengundang Bapak/Ibu untuk mengahadiri pada:
    <br>
    <table style="width: 100%; margin-top: 1rem;">
        <tr>
            <td style="width: 2.5rem"></td>
            <td>Hari</td>
            <td>:</td>
            <td>{{$data->hari}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{$data->tgl}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Waktu</td>
            <td>:</td>
            <td>{{$data->waktu}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Tempat</td>
            <td>:</td>
            <td>{{$data->tempat}}</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1rem; text-align: justify">
    &nbsp; &nbsp; &nbsp; &nbsp;Demi kelancaran acara tersebut diharapkan kepada para RT mempersiapkan data penduduk  di wilayah masing masing sesuai dengan keadaan terbaru.
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 0.5rem; text-align: justify">
    &nbsp; &nbsp; &nbsp; &nbsp;Demikian surat undangan ini kami sampaikan, Saya berharap kepada Bapak/Ibu dapat hadir pada waktunya. Atas perhatian dan kehadiranya kami ucapkan terima kasih.
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1rem; text-align: justify">
    <table style="width: 100%">
        <tr>
            <td style="width: 55%"></td>
            <td align="center">Tolai, {{$data->tgl_surat}} <br> {{$data->pj}}</td>
        </tr>
        <tr>
            <td style="height: 80px"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><u><b>{{$data->pj}}</b></u><br>NIP : {{$data->nip}}</td>
        </tr>
    </table>
</div>