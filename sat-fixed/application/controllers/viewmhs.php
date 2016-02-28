<?php

/**
Class CI_Controller untuk view viewmhs.php
**/

class ViewMhs extends CI_Controller
{
	/**
	No-arg constructor
	fungsi : load helper dan library
	**/

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('text');
		$this->load->library('table');
	}

	/**
	function untuk menampilkan html table sesuai dengan tabel Mahasiswa dalam
	viewmhs.php
	parameter 	: none
	return type	: void
	**/

	public function index()
	{
		$this->load->model('/tabel/mahasiswamodel');
		$hasil = $this->mahasiswamodel->getAll();
		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		$this->table->set_heading('NIM', 'Nama Mahasiswa');
		$this->table->set_template($atur);
		$tabel = $this->table->generate($hasil);
		$data['tabel'] = $tabel;
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/output/viewmhs',$data);
	}

}
