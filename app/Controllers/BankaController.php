<?php namespace App\Controllers;

use App\Models\BankaModel;

class BankaController extends BaseController
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
		//dd($this->request->getPost());

		$bankaModel = new BankaModel();

		$data = [
			'ders'    	 => $this->request->getPost('ders'),
			'aciklama'   => $this->request->getPost('aciklama'),
			'grup'   	 => $this->request->getPost('grup'),
			'soru'   	 => $this->request->getPost('soru'),
			'asikki'   	 => $this->request->getPost('asikki'),
			'bsikki'   	 => $this->request->getPost('bsikki'),
			'csikki'     => $this->request->getPost('csikki'),
			'dsikki'     => $this->request->getPost('dsikki'),
			'esikki'     => $this->request->getPost('esikki'),
		];

		$result = $bankaModel->insert($data);
		dd($result);

	}

	//--------------------------------------------------------------------

	public function detay($id)
	{
		$bankaModel = new BankaModel();
		$banka = $bankaModel->find($id);
		dd($banka);
	}

	//--------------------------------------------------------------------

}
