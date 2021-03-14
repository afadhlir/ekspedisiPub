<?php

namespace App\Controllers;

class Manager extends BaseController
{
	public function index()
	{
		$data = [
			"title" => 'Dashboard Manager',
			'content' => 'manager/v_manager'
		];

		echo view('layout_manager/v_wrapper',$data);
	}

	public function waitinglist()
	{

		echo "waitinglist";
	}
}
