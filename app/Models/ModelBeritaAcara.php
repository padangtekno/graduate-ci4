<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBeritaAcara extends Model
{
    public function allDataMahasiswa()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->get()->getResultArray();
    }
}
