<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class barangKeluar_model extends CI_Model
{
	function lihat_data()
	{
		$this->db->select('bk.*, c.nama_customer, p.nama_produk');
		$this->db->from('barang_keluar bk');
		$this->db->join('customer c', 'bk.id_customer = c.id_customer', 'left');
		$this->db->join('produk p', 'bk.id_produk = p.id_produk', 'left');
		return $this->db->get();
	}
	function simpan_data($data)
	{
		$ins=$this->db->insert('barang_keluar',$data);
		return $ins;
	}

	function hapus_data($id_barang_keluar)
	{
		$this->db->where('id_barang_keluar',$id_barang_keluar);
		$this->db->delete('barang_keluar');
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