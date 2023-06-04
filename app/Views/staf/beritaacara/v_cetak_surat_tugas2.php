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
        <p>
        <h3 style="text-align: center;"><b><u>SURAT TUGAS PEMBIMBING SKRIPSI</u></b><br>No. 0<?= $mhs['id_mahasiswa'] ?>/Prodi TI/ST-PP.20.09/X/<?= date('Y') ?></h3>
        </p>
        <p>Assalamu'alaikum. Wr. Wb.</p>
        <p>Dalam rangka penulisan skripsi, Kepala Program Studi Teknik Informatika
            Fakultas Teknologi Informasi, Universitas YARSI, dengan ini menugaskan: </p>

        <table style="font-weight: bold;">
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
                <td>:</td>
                <td><?= $mhs['pembimbing_ilmu'] ?></td>
            </tr>

            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sebagai</td>
                <td>:</td>
                <td>Pembimbing Agama</td>
            </tr>
        </table>
        <p>bagi mahasiswa berikut ini:</p>
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

        </table>
        <p>Dengan judul : <b>"<?= $mhs['judul_skripsi'] ?>"</b></p>

        <p>Skripsi tersebut diharapkan telah selesai selambat-lambatnya 6 (enam) bulan setelah surat
            tugas ini dikeluarkan. </p>
        <p>Demikianlah surat tugas ini diberikan agar pihak-pihak yang terkait dapat membantu
            seperlunya.</p>
        <p>Wassalamu'alaikum. Wr. Wb.</p>
        <br>

        <p style="text-align: right;">Jakarta, <?= date('d M Y') ?></p>
        <p style="text-align: right;">Kepala Program Studi <?= $mhs['nama_prodi'] ?></p>
        <br>
        <br>
        <br>
        <br>
        <p style="text-align: right;"><b>(___________________________)</b></p>
        <br>

    </section>

    <section class="sheet padding-10mm">
        <article><img src="<?= base_url('yarsi.png') ?>" width="225px"></article>
        <p>
        <h3 style="text-align: center;"><b><u>SURAT TUGAS PEMBIMBING SKRIPSI</u></b><br>No. 0<?= $mhs['id_mahasiswa'] ?>/Prodi TI/ST-PP.20.09/X/<?= date('Y') ?></h3>
        </p>
        <p>Assalamu'alaikum. Wr. Wb.</p>
        <p>Dalam rangka penulisan skripsi, Kepala Program Studi Teknik Informatika
            Fakultas Teknologi Informasi, Universitas YARSI, dengan ini menugaskan: </p>

        <table style="font-weight: bold;">
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
                <td>:</td>
                <td><?= $mhs['pembimbing_agama'] ?></td>
            </tr>

            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sebagai</td>
                <td>:</td>
                <td>Pembimbing Agama</td>
            </tr>
        </table>
        <p>bagi mahasiswa berikut ini:</p>
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

        </table>
        <p>Dengan judul : <b>"<?= $mhs['judul_skripsi'] ?>"</b></p>

        <p>Skripsi tersebut diharapkan telah selesai selambat-lambatnya 6 (enam) bulan setelah surat
            tugas ini dikeluarkan. </p>
        <p>Demikianlah surat tugas ini diberikan agar pihak-pihak yang terkait dapat membantu
            seperlunya.</p>
        <p>Wassalamu'alaikum. Wr. Wb.</p>
        <br>

        <p style="text-align: right;">Jakarta, <?= date('d M Y') ?></p>
        <p style="text-align: right;">Kepala Program Studi <?= $mhs['nama_prodi'] ?></p>
        <br>
        <br>
        <br>
        <br>
        <p style="text-align: right;"><b>(___________________________)</b></p>
        <br>

    </section>
</body>

</html>