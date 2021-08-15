<?php

namespace App\Controllers;

use App\Models\dataAdmin;

class Admin extends BaseController
{

    protected $dataAd;
    public function __construct()
    {
        $this->dataAd = new dataAdmin();
    }

    public function index()
    {
        $data = [
            'title' => 1
        ];

        return view('admin/dashboard', $data);
    }
}
