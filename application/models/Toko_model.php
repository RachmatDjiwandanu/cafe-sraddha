<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_model extends CI_Model
{
	function lihat_data()
	{
		return $this->db->get('produk'); 
	}
	function simpan_data($data)
	{
		$ins=$this->db->insert('produk',$data);
		return $ins;
	}

	function hapus_data($idproduk)
	{
		// Delete child records in barang_keluar first
		$this->db->where('id_produk', $idproduk);
		$this->db->delete('barang_keluar');
		
		// Then delete the product
		$this->db->where('id_produk', $idproduk);
		$this->db->delete('produk');
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
	
	function get_stok($id_produk)
	{
		$this->db->select('stok');
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get('produk');
		return $query->row() ? (int)$query->row()->stok : 0;
	}
	
	function kurangi_stok($id_produk, $jumlah)
	{
		$stok = $this->get_stok($id_produk);
		if ($stok < $jumlah) {
			return false;
		}
		$this->db->set('stok', 'stok - ' . $jumlah, FALSE);
		$this->db->where('id_produk', $id_produk);
		return $this->db->update('produk');
	}
	
	function tambah_stok($id_produk, $jumlah)
	{
		$this->db->set('stok', 'stok + ' . $jumlah, FALSE);
		$this->db->where('id_produk', $id_produk);
		return $this->db->update('produk');
	}
}
?>

