<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBeritaAcara;
use App\Models\ModelDosen;

class BeritaAcara extends BaseController
{

    public function __construct()
    {

        $this->ModelBeritaAcara = new ModelBeritaAcara();
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {
        $data = [
            'judul' => 'Berita Acara Ujian Skripsi',
            'menu'  => 'beritaacara',
            'submenu'  => '',
            'page'  => 'staf/beritaacara/v_daftar_mahasiswa',
            'mhs'   => $this->ModelBeritaAcara->allDataMahasiswa(),
            'dosen' => $this->ModelDosen->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function cetakBeritaAcara($id_mahasiswa)
    {
        $data = [
            'judul' => 'CetakBerita Acara',

        ];
        return view('staf/beritaacara/v_cetak_berita_acara', $data);
    }
}
