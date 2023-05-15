<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftaran;
use App\Models\ModelProdi;

class DashboardDosen extends BaseController
{

    public function __construct()
    {
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelProdi = new ModelProdi();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard Dosen',
            'menu' => 'dashboard',
            'page'  => 'dosen/v_dashboard',
        ];
        return view('v_template_mahasiswa', $data);
    }
}
