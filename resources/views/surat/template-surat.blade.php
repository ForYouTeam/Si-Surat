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
                        <font size="4">PEMERINTAH KABUPATEN KOTA PALU</font><br>
                        <font size="4">KECAMATAN ULUJADI</font><br>
                        <font size="5"><b>DESA PRINDAFAN</b></font><br>
                        <font size="2">Alamat : Jalan. Gawalise. no 4 Palu Barat Kecamatan balaroa Rt:001, Rw:002
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
    @switch($data['letter_type_id'])
        @case('1')
            @include('surat.surat-domisili')
        @break

        @case('2')
            @include('surat.surat-keterangan-tidak-mampu')
        @break

        @default
    @endswitch
</body>

</html>
