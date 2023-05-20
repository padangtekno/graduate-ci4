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
        ];
        return view('v_template_staf', $data);
    }

    public function editBeritaAcara($id_mahasiswa)
    {
        $data = [
            'judul' => 'Edit Berita Acara Ujian Skripsi',
            'menu'  => 'beritaacara',
            'submenu'  => '',
            'page'  => 'staf/beritaacara/v_edit_berita_acara',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
            'dosen' => $this->ModelDosen->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function updateBeritaAcara($id_mahasiswa)
    {
        $data = [
            'id_mahasiswa' => $id_mahasiswa,
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'pembimbing_ilmu' => $this->request->getPost('pembimbing_ilmu'),
            'pembimbing_agama' => $this->request->getPost('pembimbing_agama'),
            'judul_skripsi' => $this->request->getPost('judul_skripsi'),
            'tgl_ujian' => $this->request->getPost('tgl_ujian'),
            'jam_ujian' => $this->request->getPost('jam_ujian'),
            'penguji_murni' => $this->request->getPost('penguji_murni'),
            'ketua_komisi_penguji' => $this->request->getPost('ketua_komisi_penguji'),
            'hasil_ujian_huruf' => $this->request->getPost('hasil_ujian_huruf'),
            'hasil_ujian_angka' => $this->request->getPost('hasil_ujian_angka'),
            'tempat' => $this->request->getPost('tempat'),
        ];
        $this->ModelBeritaAcara->updateBeritaAcara($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to('BeritaAcara/editBeritaAcara/' . $id_mahasiswa);
    }


    public function cetakBeritaAcara($id_mahasiswa)
    {
        $data = [
            'judul' => 'Cetak Berita Acara',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
        ];
        return view('staf/beritaacara/v_cetak_berita_acara', $data);
    }

    public function cetakSuratTugas($id_mahasiswa)
    {
        $data = [
            'judul' => 'Cetak Berita Acara',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
        ];
        return view('staf/beritaacara/v_cetak_surat_tugas', $data);
    }
}
