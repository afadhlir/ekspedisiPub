<?php

namespace App\Controllers;

class Gudang extends BaseController
{
	public function index()
	{
		$data = [
			"title" => 'Dashboard Gudang',
			'content' => 'gudang/v_gudang'
		];

		echo view('layout_gudang/v_wrapper',$data);
	}

	public function pengajuan()
	{

		echo "pengajuan";
	}
}
