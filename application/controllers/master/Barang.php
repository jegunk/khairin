<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
			$this->load->model("master/barang_model");
		}

	function index() 
	{
		$data['listbarang'] = $this->barang_model->GetAllData();
		$this->load->view('master/barang_view', $data);
	}
	
	
}

