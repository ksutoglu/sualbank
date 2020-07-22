<?php namespace App\Controllers;

use App\Models\BankaModel;

class BankaController extends BaseController
{
	public function index()
	{
		$bankaModel = new BankaModel();
		$bankalar = $bankaModel->findAll();

		return view('banka/index', ['bankalar' => $bankalar]);
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
		//dd($result);
		return redirect()->to("/banka/{$result}");
	}

	//--------------------------------------------------------------------


	public function detay($id)
	{	
		$bankaModel = new BankaModel();
		$banka = $bankaModel->find($id);
		//dd($banka);
		return view("/banka/detay", ['banka'=> $banka]);
	}

	//--------------------------------------------------------------------

}
