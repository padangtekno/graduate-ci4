<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A4</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="<?= base_url('paper') ?>/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">
        <article><img src="<?= base_url('yarsi.png') ?>" width="225px"></article>
        <h3 style="text-align: center;"><b>BERITA ACARA UJIAN SKRIPSI</b></h3>
        <p>Yang bertanda tangan di bawah ini Komisi Penguji Skripsi Program Studi Teknik Informatika Program
            Sarjana Fakultas Teknologi Informasi Universitas YARSI dengan ini menyatakan dengan sebenarnya bahwa
            pada:</p>

        <table style="font-weight: bold;">
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</td>
                <td>:</td>
                <td><?= date('d F Y', strtotime($mhs['tgl_ujian'])) ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam</td>
                <td>:</td>
                <td><?= $mhs['jam_ujian'] ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bertempat di</td>
                <td>:</td>
                <td><?= $mhs['tempat'] ?></td>
            </tr>
        </table>
        <p>Telah menyelengarakan Ujian Skripsi terhadap mahasiswa:</p>
        <table style="font-weight: bold;">
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
                <td>:</td>
                <td><?= $mhs['nama_mahasiswa'] ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NPM</td>
                <td>:</td>
                <td><?= $mhs['npm'] ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>
                <td>:</td>
                <td><?= $mhs['nama_prodi'] ?></td>
            </tr>
        </table>
        <p>Dengan judul : <b>"<?= $mhs['judul_skripsi'] ?>"</b></p>
        <table>
            <tr>
                <td>Hasil ujian dengan kualifikasi: </td>
                <td style="border: 1px solid #999; padding: 8px 20px;">
                    <h2><?= $mhs['hasil_ujian_huruf'] ?></h2>
                </td>
                <td style="border: 1px solid #999; padding: 8px 20px;">
                    <h2><?= $mhs['hasil_ujian_angka'] ?></h2>
                </td>
            </tr>
        </table>
        <br>
        <center>Jakarta, <?= date('d M Y') ?></center>
        <center>Ketua Komisi Penguji</center>
        <br>
        <br>
        <br>
        <br>
        <center><b>(<?= $mhs['ketua_komisi_penguji'] ?>)</b></center>
        <br>
        <table style="text-align: center;" width="100%">
            <tr>
                <td>Penguji Murni</td>
                <td>Pembimbing Ilmu / Penguji</td>
                <td>Pembimbing Agama / Penguji</td>
            </tr>
            <tr>
                <td>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b>(<?= $mhs['penguji_murni'] ?>)</b>
                </td>
                <td>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b>(<?= $mhs['pembimbing_ilmu'] ?>)</b>
                </td>
                <td>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b>(<?= $mhs['pembimbing_agama'] ?>)</b>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>