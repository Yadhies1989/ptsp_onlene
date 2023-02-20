<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function informasi()
    {
        $data['title']   = 'PTSP PA Bojonegoro';
        $data['informasi']   = 'informasi';

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/informasi', $data);
        $this->load->view('frontend/footer');
    }
}
