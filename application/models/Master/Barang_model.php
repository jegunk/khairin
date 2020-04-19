<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Barang_model extends CI_Model
	{

		function __construct ()
		{
			parent::__construct();
			$this->load->database();
		}
function GetAllData ()
{
	$data = $this->db->query("SELECT * from master_barang");
	return $data->result();
}

function Addbarang($kodebarang,$namabarang,$qtyawal,$satuan)
{
	$tablename = "master_barang";
	$data = array('kode_barang'=>$kodebarang,'nama_barang'=>$namabarang,'qty_awal'=>$qtyawal,'satuan'=>$satuan);
	$this->db->insert($tablename,$data);
	
}
function deletebarang($no)
{
	$this->db->where('kode_barang', $no);
	$this->db->delete('master_barang');
}

function editbarang($no)
{
	$where = array('kode_barang'=>$no);
	return $this->db->get_where('master_barang', $where);
}
}
	
