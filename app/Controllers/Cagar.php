<?php

namespace App\Controllers;

use App\Models\dataModel;

class Cagar extends BaseController
{
    protected $dataM;
    public function __construct()
    {
        $this->dataM = new dataModel();
    }

    public function detail($id)
    {

        //$data = $this->dataM->findAll();
        $cagar = $this->dataM->tampilData($id);

        $data = [
            'cagar' => $cagar
        ];

        //jika id tidak ada
        if (empty($data['cagar'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("ID cagar " . $id . " Tidak ditemukan");
        }

        return view('pages/detail', $data);
    }
}
