<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        body{
            font-size: 12px;
            margin-top: 0px;
        }
        #title{
            font-size: 16px;
        }

        ol {
            margin-top: 0;
        }

    </style>
</head>

<body>
<table style="width: 587px;">
    <tbody>
    <tr style="height: 100px;">
        <td style="width: 100px; height: 100px;"><img src="{{public_path().'/assets/images/pemkot-bw-ok.png'}}" width="70" height="70" /></td>
        <td id="title" style="width: 600px; text-align: center; height: 115px;">
            <strong>PEMERINTAH KOTA SAMARINDA<br>
            DINAS KOMUNIKASI DAN INFORMATIKA<br>
            Jalan Kesuma Bangsa No. 84 Kode Pos 75123<br>
            S A M A R I N D A</strong>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="border-top: thick double #000000;"></td>
    </tr>
    </tbody>
</table>
<table style="width: 584px;">
    <tbody>
    <tr style="height: 27px;">
        <td style="width: 67px;">Nomor&nbsp;</td>
        <td style="width: 12px;">:</td>
        <td style="width: 280px; ">486.1/101/100.21/ DISKOMINFO/2017</td>
        <td style="width: 25px; "></td>
        <td style="width: 350px;" rowspan="4">
            Kepada:<br /> Yth. Walikota Samarinda<br /> Cq. Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu<br /> Di-<br /> <span style="text-decoration: underline;"><strong>Samarinda</strong></span>
        </td>
    </tr>
    <tr style="height: 28px;">
        <td style="width: 67px;">Lampiran</td>
        <td style="width: 12px;">:</td>
        <td style="width: 280px;"><strong>-</strong>&nbsp;</td>
        <td style="width: 25px; ">&nbsp;</td>
    </tr>
    <tr style="height: 29px;">
        <td style="width: 67px; ">Perihal</td>
        <td style="width: 12px; ">:</td>
        <td style="width: 280px;"><strong><u>Rekomendasi Izin Reklame Tidak Tetap</u></strong>&nbsp;</td>
        <td style="width: 25px; ">&nbsp;</td>
    </tr>
    </tbody>
</table>
<br>
<p>Menunjuk surat permohonan atas nama Sdr, {{$rekomendasi->dataUsaha->user->name or ''}} Nomor : 011/CSJ-CGCS/V/2017 tanggal 2 Mei 2017, perihal permohonan rekomendasi izin reklame tidak tetap.</p>
<strong>Memberikan Rekomendasi Kepada :</strong>
<table style="width: 567px;">
    <tbody>
    <tr>
        <td style="width: 180px; ">1. Nama Institusi</td>
        <td style="width: 10px;">:</td>
        <td style="width: 416px; ">{{$rekomendasi->dataUsaha->nama or ''}}</td>
    </tr>
    <tr >
        <td style="width: 180px; ">2. Nama Penanggung Jawab</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px; ">{{$rekomendasi->dataUsaha->user->name or ''}}</td>
    </tr>
    <tr >
        <td style="width: 180px; ">3. Alamat</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px; ">{{$rekomendasi->dataUsaha->alamat}}</td>
    </tr>
    <tr >
        <td style="width: 180px; ">4. Telp/HP</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px; ">{{$rekomendasi->dataUsaha->kontak}}</td>
    </tr>
    </tbody>
</table>
<br />
<strong>Untuk Memasang Reklame :</strong>
<table style="width: 567px;">
    <tbody>
    <tr>
        <td style="width: 180px;">1.&nbsp;Jenis Reklame</td>
        <td style="width: 10px;">:</td>
        <td style="width: 416px;">{{$rekomendasi->jenis_reklame or ''}}</td>
    </tr>
    <tr>
        <td style="width: 180px;">2.&nbsp;Ukuran &amp; Jumlah</td>
        <td style="width: 10px;">:</td>
        <td style="width: 416px;">{{$rekomendasi->ukuran_reklame or ''}}</td>
    </tr>
    <tr>
        <td style="width: 180px;">3.&nbsp;Teks Reklame</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px;">{{$rekomendasi->teks_reklame or ''}}</td>
    </tr>
    <tr>
        <td style="width: 180px;">4.&nbsp;Tempat Pemasangan</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px;">{{$rekomendasi->lokasi_pemasangan or ''}}</td>
    </tr>
    <tr>
        <td style="width: 180px; ">5. Lama Pemasangan</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px; ">{{\Carbon\Carbon::parse($rekomendasi->lama_pemasangan_from)->format('d/m/Y')}} s/d {{\Carbon\Carbon::parse($rekomendasi->lama_pemasangan_to)->format("d/m/Y")}}</td>
    </tr>
    <tr >
        <td style="width: 180px; ">6. Rekomendasi ini berlaku</td>
        <td style="width: 10px; ">:</td>
        <td style="width: 416px;"> {{\Carbon\Carbon::parse($rekomendasi->lama_pemasangan_from)->addDays(-2) ->format("d/m/Y")}} s/d {{\Carbon\Carbon::parse($rekomendasi->lama_pemasangan_to)->addDays(6)->format("d/m/Y")}}</td>
    </tr>
    </tbody>
</table>
<br />
<strong>Dengan ketentuan sbb :</strong>
<ol>
    <li>Pemegang ijin diwajibkan melunasi pembayaran pajak reklame, Spanduk &amp; bendera kewajiban lainnya pada instansi</li>
    <li>Naskah Reklame, Spanduk dan Bendera harus menggunakan bahasa Indonesia yang baik dan benar/mendapat persetujuan dari institusi yang berwenang.</li>
    <li>Reklame, Spanduk dan Bendera yang dipasang/dipertunjukan adalah yang telah diberi ijin, tidak diperkenankan dipindahkan dan atau diubah teks/gambarnya tanpa sepengetahuan Pemerintah Kota Samarinda.</li>
    <li>Reklame, Spanduk dan Bendera yang telah diberi izin wajib dicantumkan tanda pengesahan antara lain : Nomor dan Tanggal izin tersebut pada sisi sebelah kanan bawah reklame yang dipasang</li>
    <li>Pemegang izin diwajibkan memelihara kebersihan lokasi pemasangan spanduk masing-masing</li>
    <li>Pemegnag izin berkewajiban menanggung segala akibat jika penyelenggaraan reklame</li>
    <li>Pemegang izin wajib membongkar reklame, Spanduk &amp; Bendera yang dipasangnya paling lambat 1 kali 24 jam setelah batas waktu izin berkahir.&nbsp;</li>
    <li>Apabila pemegang izin tidak membongkar/menyingkirkan spanduk &amp; benderanya sesuai dengan ketentuan, reklame tersebut akan dibongkar/disingkirkan oleh petugas pemerintah kota samarinda dan segala biaya yang timbul karenanya dibebankan kepada yang bersangkutan.</li>
    <li>Pemegang izin ini diwajibkan memasang reklame, Spanduk &amp; Bendera (dalam bentuk apapun)nsecar rapi dan tidak tumpang tindih dengan reklame lain yang sudah terpasang sebelumnya.</li>
    <li>Pemegang izin ini tidak diperkenankan memasang reklame, Spanduk &amp; Bendera di taman kota dan dimedia jalan yang ada tanamannya, pagar/halaman kantor, rumah dan tempat ibadah.</li>
    <li>Surat izin ini dicabut apabila pemegang izin tidak mentaati/tidak memenuhi ketentuan-ketentuan dan persyaratan dalam peraturan Daerah yang berlaku</li>
</ol>
<table style="float: right; width: 400px" >
    <tbody>
    <tr>
        <td style="text-align: center;">Ditetapkan di : Samarinda</td>
    </tr>
    <tr style="text-align: center;">
        <td>Pada Tanggal : 24 Juli 2017</td>
    </tr>
    <tr>
        <td style="text-align: center;">Kepala,</td>
    </tr>
    <tr>
        <td style="text-align: center;">&nbsp;</td>
    </tr>
    <tr>
        <td style="text-align: center;">&nbsp;</td>
    </tr>
    <tr>
        <td style="text-align: center;"><strong><u>Dr. Aji Syarif Hidayatullah, S. Sos. M.Psi</u></strong></td>
    </tr>
    <tr>
        <td style="text-align: center;"><strong>NIP. 197001027 1999003 1 004</strong></td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>
