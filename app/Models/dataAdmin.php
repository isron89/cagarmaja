<?php

namespace App\Models;

use CodeIgniter\Model;

class dataAdmin extends Model
{

    protected $table = 'cagarbudaya';
    protected $id = 'id_cagar';
    protected $primaryKey = 'id_cagar';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_cagar', 'kode_pengelolaan', 'deskripsi', 'alamat', 'desa', 'kecamatan', 'kabupaten', 'provinsi', 'latitude', 'longitude'];

    public function tampilData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_cagar' => $id])->first();
    }
}
