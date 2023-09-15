<div style="width: 90%; margin-left: 2rem; margin-top: 1rem; text-align: justify">
    <font size="3">
        <center>
            Tentang <br> <br>
            <b>{{$data->tentang}}</b> <br><br>
            MEMUTUSKAN
        </center>
    </font>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1rem; text-align: justify">
    <table style="">
        <tr>
            <td>Menetapkan</td>
            <td>:</td>
            <td>{{$data->menetapkan}}</td>
        </tr>
        <tr>
            <td>Pertama</td>
            <td>:</td>
            <td>{{$data->pertama}}</td>
        </tr>
        <tr>
            <td>Kedua</td>
            <td>:</td>
            <td>{{$data->kedua}}</td>
        </tr>
        <tr>
            <td>Ketiga</td>
            <td>:</td>
            <td>{{$data->ketiga}}</td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin-left: 2rem; margin-top: 1.2rem; text-align: justify">
    <table style="width: 100%">
        <tr>
            <td style="width: 55%"></td>
            <td align="left">Ditetapkan Di : {{$data->tempat_penetapan}} <br> Pada Tanggal : {{$data->tgl_surat}} <br> <br> {{$data->pj}}</td>
        </tr>
        <tr>
            <td style="height: 80px"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td align="left"><u><b>{{$data->pj}}</b></u><br>NIP : {{$data->nip}}</td>
        </tr>
    </table>
</div>