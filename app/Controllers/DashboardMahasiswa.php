<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftaran;
use App\Models\ModelProdi;

class DashboardMahasiswa extends BaseController
{

    public function __construct()
    {
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelProdi = new ModelProdi();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard Mahasiswa',
            'menu' => 'dashboard',
            'page'  => 'mahasiswa/v_dashboard'
        ];
        return view('v_template_mahasiswa', $data);
    }

    public function skl()
    {
        $data = [
            'judul' => 'Surat Keterangan Lulus',
            'menu' => 'skl',
            'page'  => 'mahasiswa/v_skl',
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
        ];
        return view('v_template_mahasiswa', $data);
    }

    public function printSkl()
    {
        $data = [
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
        ];
        return view('mahasiswa/v_print_skl', $data);
    }

    public function pengambilanIjazah()
    {
        $data = [
            'judul' => 'Formulir Pengambilan Izajah',
            'menu' => 'ijazah',
            'page'  => 'mahasiswa/v_pengambilan_ijazah',
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
            'prodi' => $this->ModelProdi->allData(),
        ];
        return view('v_template_mahasiswa', $data);
    }

    public function updateDataPengambilanIjazah($npm)
    {
        if ($this->validate([
            'nama_mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'agama' => [
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nama_mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'tgl_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'no_hp' => [
                'label' => 'Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'id_prodi' => [
                'label' => 'Program Studi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Dipilih !'
                ]
            ], 'ipk' => [
                'label' => 'IPK',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nama_ayah' => [
                'label' => 'Nama Ayah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nama_ibu' => [
                'label' => 'Nama Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'alamat_ortu' => [
                'label' => 'Alamat Orang Tua',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'telpon_ortu' => [
                'label' => 'Telepon Orang Tua',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ]
        ])) {
            $data = [
                'npm' => $npm,
                'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'agama' => $this->request->getPost('agama'),
                'alamat' => $this->request->getPost('alamat'),
                'no_hp' => $this->request->getPost('no_hp'),
                'id_prodi' => $this->request->getPost('id_prodi'),
                'ipk' => $this->request->getPost('ipk'),
                'tgl_lulus' => $this->request->getPost('tgl_lulus'),
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'nama_ibu' => $this->request->getPost('nama_ibu'),
                'alamat_ortu' => $this->request->getPost('alamat_ortu'),
                'telpon_ortu' => $this->request->getPost('telpon_ortu'),
            ];
            $this->ModelPendaftaran->updateDataPendaftaran($data);
            session()->setFlashdata('pesan', 'Data Formulir Berhasil Diupdate !!');
            return redirect()->to('DashboardMahasiswa/pengambilanIjazah');
        } else {
            return redirect()->to('DashboardMahasiswa/pengambilanIjazah')->withInput();
        }
    }

    public function cetakFormulirPengambilanIjazah()
    {
        $data = [
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
        ];
        return view('mahasiswa/v_cetak_formulir_pengambilan_ijazah', $data);
    }
}
