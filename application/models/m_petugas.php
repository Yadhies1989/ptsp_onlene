<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_petugas extends CI_Model {

	public function insert_data($tabel, $data)
	{
		$query = $this->db->insert($tabel, $data);
		return $query;
	}

	public function hapus_data($where, $tabel)
	{
		$this->db->where($where);
        $this->db->delete($tabel);
	}
}
