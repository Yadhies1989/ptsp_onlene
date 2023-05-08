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
        $data['data_persyaratan_berperkara'] = $this->db->get('tbl_persyaratan_berperkara')->result_array();

        $this->load->view('Frontend/header', $data);
        $this->load->view('Frontend/informasi', $data);
        $this->load->view('Frontend/footer');
    }

    public function prosedur()
    {
        $data['title']   = 'PTSP PA Bojonegoro';
        $data['informasi']   = 'prosedur';

        $this->load->view('Frontend/header', $data);
        $this->load->view('Frontend/informasi', $data);
        $this->load->view('Frontend/footer');
    }

    public function jadwalsidang()
    {
        $data['title']   = 'PTSP PA Bojonegoro';
        $data['informasi']   = 'jadwalsidang';

        $this->load->view('Frontend/header', $data);
        $this->load->view('Frontend/informasi', $data);
        $this->load->view('Frontend/footer');
    }

    public function gugatanmandiri()
    {
        $data['title']   = 'PTSP PA Bojonegoro';
        $data['pendaftaran']   = 'gugatanmandiri';

        $this->load->view('Frontend/header', $data);
        $this->load->view('Frontend/pendaftaran', $data);
        $this->load->view('Frontend/footer');
    }

    public function validasi()
    {
        $data['title']   = 'PTSP PA Bojonegoro';
        $data['produk']   = 'validasi';

        $this->load->view('Frontend/header', $data);
        $this->load->view('Frontend/produk', $data);
        $this->load->view('Frontend/footer');
    }
}
