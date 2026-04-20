<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
	function lihat_data()
	{
		return $this->db->get('customer'); 
	}
	function simpan_data($data)
	{
		$ins=$this->db->insert('customer',$data);
		return $ins;
	}

	function hapus_data($id_customer)
	{
		$this->db->where('id_customer',$id_customer);
		$this->db->delete('customer');
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
    function update_data ($where,$data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);	
	}
}
?>