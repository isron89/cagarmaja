<?php

namespace App\Controllers;

use App\Models\dataModel;

class Home extends BaseController
{
	protected $dataM;
	public function __construct()
	{
		$this->dataM = new dataModel();
	}

	public function index()
	{
		//$cagar = $this->dataM->findAll();
		$verif = $this->dataM->getVerif();
		$notVerif = $this->dataM->getNotVerif();
		$data = [
			'cagar' => $this->dataM->tampilData(),
			'verif' => $verif,
			'notverif' => $notVerif
		];

		return view('pages/beranda', $data);
	}
}
