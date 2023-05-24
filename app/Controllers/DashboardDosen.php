<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDashboardDosen;
use App\Models\ModelProdi;
use App\Models\ModelBeritaAcara;

class DashboardDosen extends BaseController
{

    public function __construct()
    {
        $this->ModelDashboardDosen = new ModelDashboardDosen();
        $this->ModelProdi = new ModelProdi();
        $this->ModelBeritaAcara = new ModelBeritaAcara();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard Dosen',
            'menu' => 'dashboard',
            'page'  => 'dosen/v_dashboard',
        ];
        return view('v_template_dosen', $data);
    }

    public function suratTugas()
    {
        $data = [
            'judul' => 'Surat Tugas',
            'menu' => 'surattugas',
            'page'  => 'dosen/v_data_surat_tugas',
            'mhs'   => $this->ModelDashboardDosen->dataMahasiswaBimbinganIlmu(),
        ];
        return view('v_template_dosen', $data);
    }

    public function cetakSuratTugas($id_mahasiswa)
    {
        $data = [
            'judul' => 'Cetak Surat Tugas',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
        ];
        return view('staf/beritaacara/v_cetak_surat_tugas', $data);
    }
}
