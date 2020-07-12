<?php namespace App\Controllers;

class Banka extends BaseController
{
	public function index()
	{
		return view('banka/index');
	}

	//--------------------------------------------------------------------


	public function ekle()
	{
		return view('banka/ekle');
	}

	//--------------------------------------------------------------------


	public function kaydet()
	{
		dd($this->request->getPost());
	}

	//--------------------------------------------------------------------

}
