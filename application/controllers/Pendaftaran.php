<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function diska()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Pendaftaran Perkara Dispensasi Kawin';
		$data['data'] = $this->db->get('tbl_daftar_diska')->result_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_diska', $data);
		$this->load->view('Template/footer');
	}

	public function add_pendaftaran_diska()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Pendaftaran Perkara Dispensasi Kawin';

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_tambah_diska');
		$this->load->view('Template/footer');
	}

	public function proses_input_data_diska()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		//lanjut

		$data = array(
			'jk_anak'        		=> $this->input->post('jk_anak', true),
			'loket'     		=> $this->input->post('loket', true),
			'deskripsi'         => $this->input->post('deskripsi', true),
			'created_at'        => date('Y-m-d'),
			'updated_at'        => date('Y-m-d')
		);

		$this->m_petugas->insert_data('tbl_persyaratan_berperkara', $data);

		$this->session->set_flashdata('pesan', 'Di Tambahkan');
		redirect('pendaftaran/diska');
	}

	
}
