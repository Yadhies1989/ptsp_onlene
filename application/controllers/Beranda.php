<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		
	}

	public function index()
	{
		$data['title']   = 'PTSP PA Bojonegoro' ;
		$data['about']   = 'about' ;
		$data['clients'] = 'clients' ;
		$data['team']    = 'team' ;
		$data['service'] = 'services' ;
		
		$this->load->view('frontend/header', $data);
        $this->load->view('frontend/kontent');
        $this->load->view('frontend/footer');
		
		
	}
}