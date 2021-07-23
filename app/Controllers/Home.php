<?php

namespace App\Controllers;
use App\Models\UfModel;

class Home extends BaseController
{
	public function index()
	{
		return view('inicio');
	}

	public function store(){
		$uf = new UfModel;
		$data = [
			'fecha' => $this->request->getPost('fecha'),
			'valor' => $this->request->getPost('valor')
		];
		$uf->save($data);
		$data = ['status'=> 'Nuevo registro Guardado'];
		return $this->response->setJSON($data);
	}
}
