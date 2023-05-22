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

<body class="legal">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">
        <article><img src="<?= base_url('yarsi.png') ?>" width="225px"></article>
        <p> <b>Rujukan Kami : 00<?= $mhs['id_mahasiswa'] ?>/Prodi/PP.20.10/I/2023</b><br>
            <b>Rujukan Anda :</b><br>
            <b>Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Undangan Ujian Skripsi</b>
        </p>

        <p>
            Kepada Yth <br>
            <?= $mhs['penguji_murni'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Penguji Murni / Ketua Komisi Penguji <br>
            <?= $mhs['pembimbing_ilmu'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Pembimbing Ilmu / Penguji <br>
            <?= $mhs['pembimbing_agama'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembimbing Agama / Penguji <br>
        </p>
        <p>di <br> Universitas YARSI</p>
        <p>



        </p>
        <p>Assalamu'alaikum. Wr. Wb.</p>
        <p>Sehubungan dengan penyelesaian studi mahasiswa Program Studi Teknik Informatika
            Program Sarjana Fakultas Teknologi Informasi Universitas YARSI:
        </p>
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
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prodi</td>
                <td>:</td>
                <td><?= $mhs['nama_prodi'] ?></td>
            </tr>

        </table><br>
        Dengan Judul Skripsi : <br>
        <b>"<?= $mhs['judul_skripsi'] ?>"</b>
        <p>Kami mohon kesediaan Bapak/Ibu untuk hadir sebagai Pembimbing sekaligus Penguji
            dalam ujian skripsi yang Insya Allah akan dilakukan secara daring pada:
        </p>

        <table style="font-weight: bold;">
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</td>
                <td>:</td>
                <td><?= date('d F Y', strtotime($mhs['tgl_ujian'])) ?></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu</td>
                <td>:</td>
                <td><?= $mhs['jam_ujian'] ?></td>
            </tr>

            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat</td>
                <td>:</td>
                <td><?= $mhs['tempat'] ?></td>
            </tr>
        </table>
        <p>Demikian, atas perhatian Bapak/Ibu kami mengucapkan terimakasih.</p>

        <p>Wassalamu’alaikum Wr. Wb.</p>
        <br>

        <p style="text-align: right;">Jakarta, <?= date('d M Y') ?></p>
        <p style="text-align: right;">Kepala Program Studi <?= $mhs['nama_prodi'] ?></p>
        <br>
        <br>
        <br>
        <br>
        <p style="text-align: right;"><b>(___________________________)</b></p>
        <br>
        <p>Tembusan Yth. <br>
            &nbsp;&nbsp;&nbsp;&nbsp;1. Dekan FTI Universitas YARSI <br>
            &nbsp;&nbsp;&nbsp;&nbsp;2. Arsip</p>
    </section>


</body>

</html>