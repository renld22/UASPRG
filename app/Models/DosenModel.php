<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $allowedFields = ['kode_dosen', 'nama_dosen', 'nama_matkul'];

    public function getDosen($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function addDosen($data)
    {
        return $this->insert($data);






}
}
