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

    public function detailDataMahasiswa($id_mahasiswa)
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('id_mahasiswa', $id_mahasiswa)
            ->get()->getRowArray();
    }
    
    public function updateBeritaAcara($data)
    {
        $this->db->table('tbl_mahasiswa')
            ->where('id_mahasiswa', $data['id_mahasiswa'])
            ->update($data);
    }
}
