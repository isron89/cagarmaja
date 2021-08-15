<?php

namespace App\Models;

use CodeIgniter\Model;

class dataModel extends Model
{
    protected $table    = 'cagarbudaya';
    protected $id       = 'id_cagar';
    protected $useTimestamps = true;

    public function tampilData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_cagar' => $id])->first();
    }

    public function getVerif()
    {
        $notverif = $this->where(['kode_pengelolaan' => ''])->countAllResults();
        $semua = $this->countAll();
        $hasil = $semua - $notverif;

        return $hasil;
    }

    public function getNotVerif()
    {
        return $this->where(['kode_pengelolaan' => ''])->countAllResults();
    }
}
