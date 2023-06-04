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
            'mhs2'   => $this->ModelDashboardDosen->dataMahasiswaBimbinganAgama(),
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

    public function cetakSuratTugas2($id_mahasiswa)
    {
        $data = [
            'judul' => 'Cetak Surat Tugas',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
        ];
        return view('staf/beritaacara/v_cetak_surat_tugas2', $data);
    }

    public function suratUndangan()
    {
        $data = [
            'judul' => 'Surat Undangan',
            'menu' => 'suratundangan',
            'page'  => 'dosen/v_data_surat_undangan',
            'mhs'   => $this->ModelDashboardDosen->dataSuratUndangan(),
        ];
        return view('v_template_dosen', $data);
    }

    public function cetakSuratUndangan($id_mahasiswa)
    {
        $data = [
            'judul' => 'Cetak Surat Tugas',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
        ];
        return view('staf/beritaacara/v_cetak_undangan', $data);
    }

    public function beritaAcara()
    {
        $data = [
            'judul' => 'Berita Acara',
            'menu' => 'beritaacara',
            'page'  => 'dosen/v_data_berita_acara',
            'mhs'   => $this->ModelDashboardDosen->dataBeritaAcara(),
        ];
        return view('v_template_dosen', $data);
    }

    public function cetakBeritaAcara($id_mahasiswa)
    {
        $data = [
            'judul' => 'Cetak Surat Tugas',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
        ];
        return view('staf/beritaacara/v_cetak_berita_acara', $data);
    }
}
