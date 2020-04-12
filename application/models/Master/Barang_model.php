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
	}
	
