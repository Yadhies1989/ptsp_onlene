<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title']   = 'PTSP PA Bojonegoro';
		$data['about']   = 'about';
		$data['clients'] = 'clients';
		$data['team']    = 'team';
		$data['service'] = 'services';

		$data['data_petugas'] = $this->db->get('tbl_petugas')->result_array();
		$data['data_inovasi'] = $this->db->get('tbl_inovasi')->result_array();

		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/kontent', $data);
		$this->load->view('frontend/footer');
	}
}
