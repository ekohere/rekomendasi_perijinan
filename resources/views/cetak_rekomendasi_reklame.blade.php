<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Cetak Rekomendasi</title>
    <meta name="author" content="TIM SIA POLITANI">
    <meta name="keywords" content="bukti, registrasi, politani">
</head>
    <style type="text/css">
        #kiri {
            width: 70%; float: left;
        }
        #kanan {
            width: 30%; float: right;
        }
        .title {
            text-align: center;
        }
        table {
            table-layout: auto;
            border-collapse: collapse;
            width: 100%;
        }

        table td {
            border: 0px solid #ccc;
        }

    </style>
</head>

<body>
<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="110px" valign="middle" align="right"><img src="{{public_path().'/assets/images/logo.png'}}" width="70" height="70" /></td>
        <td colspan="6" class="title"><div><strong>PEMERINTAH KOTA SAMARINDA<br />
                    DINAS KOMUNIKASI DAN INFORMATIKA <br />
                    Jalan Kesuma Bangsa No. 84 Kode Pos 75123 </br>
                    SAMARINDA</strong></div></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3"><a href="#">http://diskominfo.samarindakota.go.id</a></td>
        <td colspan="3" ><a href="#">info@diskominfo.samarindakota.go.id</a></td>
    </tr>
  
    <tr>
        <td colspan="7" style="border-top: thick double #000000;"></td>
    </tr>
    <tr>
        <td width="10px">Nomor</td>
        <td width="2px">:</td>
        <td width="10px">486.1/       /100.21/       /</td>
        <td></td>
        <td colspan="3" rowspan="3">
            Kepada <br> Yth. Walikota Samarinda <br>
            Cq. Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Di-<br>
            <b>Samarinda</b>
        </td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>:</td>
        <td>-</td>
        <td></td>
    </tr>
    <tr>
        <td>Perihal</td>
        <td>:</td>
        <td><b>Rekomendasi Izin Reklame Tidak Tetap</b></td>
        <td></td>
    </tr>
</table>
<br>



   
{{--<div id="kanan">
     <table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            Kepada <br> Yth. Walikota Samarinda <br>
            Cq. Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Di-<br> <b>
            Samarinda</b>
        </td>
    </tr>
    </table>
    <br> 
</div>--}}

{{--<p>Menunjuk surat permohonan atas nama Sdr. {{$rekomendasi->dataUsaha->user->name or ''}}, Nomor : 011/CSJ-CGCS/V/2017 tanggal 2 Mei 2017, perihal permohonan rekomendasi izin reklame tidak tetap.</p>

<table  border="0" cellpadding="0" cellspacing="0">

    <tr>
        <b>Memberikan Rekomendasi Kepada :</b>
    </tr>
    <tr>
        <td width="5%">1. </td>
        <td>Jenis Reklame</td>
        <td>:</td>
        <td>{{$rekomendasi->jenis_reklame or ''}}</td>
    </tr>
    <tr>
        <td>2. </td>
        <td>Nama Penangung Jawab</td>
        <td>:</td>
        <td>{{$rekomendasi->dataUsaha->user->name or ''}}</td>
    </tr>
    <tr>
        <td>3. </td>
        <td>Alamat</td>
        <td>:</td>
        <td>--}}{{--{{$rekomendasi->dataUsaha->user->biodata->alamatSekarang->alamatLengkap}}--}}{{--</td>
    </tr>
    <tr>
        <td>4. </td>
        <td>Telp/Hp</td>
        <td>:</td>
        <td>{{$rekomendasi->dataUsaha->user->biodata->kontak}}</td>
    </tr>  
</table>
<br>

<table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <b>Untuk Memasang Reklame :</b>
    </tr>
    <tr>
        <td>1. </td>
        <td>Jenis Reklame</td>
        <td>:</td>
        <td>{{$rekomendasi->jenis_reklame or ''}}</td>
    </tr>
    <tr>
        <td>2. </td>
        <td>Ukuran & Jumlah</td>
        <td>:</td>
        <td>{{$rekomendasi->ukuran_reklame or ''}}</td>
    </tr>
    <tr>
        <td>3. </td>
        <td>Teks Reklame</td>
        <td>:</td>
        <td>{{$rekomendasi->teks_reklame or ''}}</td>
    </tr>
    <tr>
        <td>4. </td>
        <td>Tempat Pemasangan</td>
        <td>:</td>
        <td>{{$rekomendasi->lokasi_pemasangan or ''}}</td>
    </tr>
    <tr>
        <td>5. </td>
        <td>Lama Pemasangan</td>
        <td>:</td>
        <td>asdasd</td>
    </tr>
    <tr>
        <td>6. </td>
        <td>Rekomendasi ini berlaku</td>
        <td>:</td>
        <td>asdasd</td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0">
    <tr><b> Dengan ketentuan sbb :</b></tr>
    <tr>
        <td>
            1. Pemegang ijin diwajibkan melunasi pembayaran pajak reklame, Spanduk & bendera kewajiban lainnya pada instansi.
        </td>
    </tr>
    <tr>
        <td>
            2.  Naskah Reklame, Spanduk dan Bendera harus menggunakan bahasa Indonesia yang baik dan benar/mendapat persetujuan dari institusi yang berwenang.
        </td>
    </tr>
    <tr>
        <td>
            3.  Reklame, Spanduk dan Bendera yang dipasang/dipertunjukan adalah yang telah diberi ijin, tidak diperkenankan dipindahkan dan atau diubah teks/gambarnya tanpa sepengetahuan Pemerintah Kota Samarinda.
        </td>
    </tr>
    <tr>
        <td>
            4.  Reklame, Spanduk dan Bendera yang telah diberi izin wajib dicantumkan tanda pengesahan antara lain : Nomor dan Tanggal izin tersebut pada sisi sebelah kanan bawah reklame yang dipasang.
        </td>
    </tr>
    <tr>
        <td>
            5.  Pemegang izin diwajibkan memelihara kebersihan lokasi pemasangan spanduk masing-masing.
        </td>
    </tr>
    <tr>
        <td>
            6.  Pemegnag izin berkewajiban menanggung segala akibat jika penyelenggaraan reklame.
        </td>
    </tr>
    <tr>
        <td>
            7.  Pemegang izin wajib membongkar reklame, Spanduk & Bendera yang dipasangnya paling lambat 1 kali 24 jam setelah batas  waktu izin berkahir.  
        </td>
    </tr>
    <tr>
        <td>
            8.  Apabila pemegang izin tidak membongkar/menyingkirkan spanduk & benderanya sesuai dengan ketentuan, reklame tersebut akan dibongkar/disingkirkan oleh petugas pemerintah  kota samarinda dan segala biaya yang timbul karenanya dibebankan kepada yang bersangkutan.
        </td>
    </tr>
    <tr>
        <td>
            9.  Pemegang izin ini diwajibkan memasang reklame, Spanduk & Bendera (dalam bentuk apapun)nsecar rapi dan tidak tumpang tindih dengan reklame lain yang sudah terpasang sebelumnya.
        </td>
    </tr>
    <tr>
        <td>
            10. Pemegang izin ini tidak diperkenankan memasang  reklame, Spanduk & Bendera di taman kota dan dimedia jalan yang ada tanamannya, pagar/halaman kantor, rumah dan tempat ibadah.
        </td>
    </tr>
    <tr>
        <td>
            11. Surat izin ini dicabut apabila pemegang izin tidak mentaati/tidak memenuhi ketentuan-ketentuan dan persyaratan dalam peraturan Daerah yang berlaku 
        </td>
    </tr>
</table>
<div id="kanan">
    <p align="center">
        Ditetapkan di : Samarinda<br>
        Pada Tanggal : 16 Mei 2017<br>
        Kepala, <br><br><br><br><br>
        <u><b>Dr. Aji Syarif Hidayatullah, S. Sos. M.Psi</u><br>
        NIP. 197001027 1999003 1 004</b>

    </p>
</div>--}}
</body>
</html>
