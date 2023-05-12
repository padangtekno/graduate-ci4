<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftaran;

class DashboardMahasiswa extends BaseController
{

    public function __construct()
    {
        $this->ModelPendaftaran = new ModelPendaftaran();
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
}
