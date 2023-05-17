<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBeritaAcara;

class BeritaAcara extends BaseController
{

    public function __construct()
    {

        $this->ModelBeritaAcara = new ModelBeritaAcara();
    }

    public function index()
    {
        $data = [
            'judul' => 'Berita Acara',
            'menu'  => 'beritaacara',
            'submenu'  => '',
            'page'  => 'staf/beritaacara/v_daftar_mahasiswa',
            'mhs'   => $this->ModelBeritaAcara->allDataMahasiswa(),
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
