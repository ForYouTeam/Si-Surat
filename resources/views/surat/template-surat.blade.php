<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <table style="width: 100%">
            <tr>
                <td style="width: 4rem"></td>
                <td>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Lambang_Kota_Palu.png/640px-Lambang_Kota_Palu.png"
                        alt="" style="max-width: 3.5rem;">
                </td>
                <td align="center">
                    <div>
                        <font size="4">PEMERINTAH KABUPATEN PARIGI MOUTONG</font><br>
                        <font size="4">KECAMATAN TORUE</font><br>
                        <font size="5"><b>DESA TOLAI</b></font><br>
                        <font size="2">Alamat : Parigi Moutong kecamatan Torue, Desa Tolai
                        </font><br>
                    </div>
                </td>
                <td style="width: 6rem"></td>
            </tr>
        </table>
        <div style="padding: 2px; background-color: black; width: 90%; margin-left: 2rem; margin-top: 0.5rem"></div>
        {{-- jika menggunakan surat standar --}}
        {{-- <div style="margin-top: 0.5rem">
            <font size="3"><b><u>SURAT [TEMPLATE]</u></b></font><br>
            <font size="2">Nomor : [TEMPLATE]</font>
        </div> --}}

        {{-- Jika menggunakan surat keputusan --}}
        {{-- <div style="margin-top: 0.5rem">
            <font size="3"><b><u>SURAT KEPUTUSAN [TEMPLATE]</u></b></font><br>
            <font size="2">Nomor : [TEMPLATE]</font>
        </div> --}}

    </center>
    {{-- @include('surat.surat-domisili') --}}
    {{-- @include('surat.surat-tanda-terima') --}}
    {{-- @include('surat.surat-keputusan') --}}
    {{-- @include('surat.surat-keterangan-tidak-mampu') --}}
    @switch($data->id_jenis_surat)
        @case('1')
            @include('surat.surat-domisili')
        @break

        @case('2')
            @include('surat.surat-keterangan-tidak-mampu')
        @break
        @case('3')
            @include('surat.surat-keputusan')
        @break
        @case('4')
            @include('surat.surat-tanda-terima')
        @break
        @case('5')
            @include('surat.surat-undangan')
        @break
    @endswitch
</body>

</html>
