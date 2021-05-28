<?php

namespace App\Controllers;

use App\Models\ContentModel;
use App\Models\HomeModel;
use App\Models\QoutesModel;

class Home extends BaseController
{

	protected $QoutesModel;
	public function __construct()
	{
		$this->QoutesModel = new QoutesModel();
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['qoutes'] = $this->QoutesModel->findAll();
		return view('qoutes/index', $data);
	}

	public function detail($id)
	{
		$data['title'] = 'We Motivation';
		$data['content'] = $this->QoutesModel->getQoutes($id);
		return view('qoutes/detail', $data);
	}

	public function qoutes()
	{
		$this->QoutesModel->save([
			'judul-thumbnail' => $_POST['judul-thumbnail'],
			'isi' => $_POST['isi'],
			'judul-qoutes' => $_POST['judul-qoutes'],
			'bagian1' => $_POST['bagian1'],
			'bagian2' => $_POST['bagian2'],
			'bagian3' => $_POST['bagian3'],
			'bagian4' => $_POST['bagian4'],
			'instagram' => $_POST['instagram']
		]);

		return redirect()->to('/home');
	}
}
