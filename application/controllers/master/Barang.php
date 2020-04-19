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
	
	function add()
	{
		$kodebarang = $this->input->POST('kodebarang');
		$namabarang = $this->input->POST('namabarang');
		$qtyawal = $this->input->POST('qtyawal');
		$satuan = $this->input->POST('satuan');

		$this->barang_model->Addbarang($kodebarang,$namabarang,$qtyawal,$satuan);
		redirect("index.php/master/barang");
		
	}
	function delete()
	{
		//$this->session->set_flashdata('hapus', 'yakin mau hapus');
		$no = $this->uri->segment('4');
		$this->barang_model->deletebarang($no);
		redirect("index.php/master/barang");
	}
	function edit(){
		$no = $this->uri->segment('4');
		$this->barang_model->editbarang($no);
		
	}
}

