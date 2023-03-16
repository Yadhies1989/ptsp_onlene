<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function persyaratan_berperkara()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Persyaratan Berperkara';
		$data['data'] = $this->db->get('tbl_persyaratan_berperkara')->result_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Persyaratan/v_beranda', $data);
		$this->load->view('Template/footer');
	}

	public function proses_input_data_persyaratan()
	{
		$data = array(
			'nama_perkara'        		=> $this->input->post('nama_perkara', true),
			'syarat_perkara'     		=> $this->input->post('about', true),
		);
		
		$this->m_petugas->insert_data('tbl_persyaratan_berperkara', $data);

		$this->session->set_flashdata('pesan', 'Di Tambahkan');
		redirect('informasi/persyaratan_berperkara');
		
	}
	public function edit_update_data_persyaratan($id)
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Persyaratan Berperkara';
		$data['data'] = $this->db->get_where('tbl_persyaratan_berperkara', ['id_persyaratan' => $id])->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Persyaratan/v_edit', $data);
		$this->load->view('Template/footer');
	}
	public function proses_update_data_persyaratan()
	{
		$id_persyaratan = $this->input->post('id_persyaratan', true);
		$data = array(
			'nama_perkara'        		=> $this->input->post('nama_perkara', true),
			'syarat_perkara'     		=> $this->input->post('about_edit', true),
		);

		$this->db->update('tbl_persyaratan_berperkara', $data, array('id_persyaratan' => $id_persyaratan));

		$this->session->set_flashdata('pesan', 'Di Ubah !!!');
		redirect('informasi/persyaratan_berperkara');
	}
	
	public function delete_data_persyaratan($id)
	{
		$where = array('id_persyaratan' => $id);
		$row = $this->db->where('id_persyaratan', $id)->get('tbl_persyaratan_berperkara')->row_array();

		$this->m_petugas->hapus_data($where, 'tbl_persyaratan_berperkara');
		$this->session->set_flashdata('pesan', 'Di Hapus !!!');
		redirect('informasi/persyaratan_berperkara');
	}
}
