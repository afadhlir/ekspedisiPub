<?php

namespace App\Controllers;

class Ekspedisi extends BaseController
{
	public function index()
	{
		$data = [
			"title" => 'Dashboard Ekspedisi',
			'content' => 'ekspedisi/v_ekspedisi'
		];

		echo view('layout_ekspedisi/v_wrapper',$data);
	}

	public function updateprogress()
	{

		echo "pengajuan";
	}
}
