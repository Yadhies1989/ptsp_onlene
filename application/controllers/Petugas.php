<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Manajemen Petugas' ;
		$data['data'] = $this->db->get('tbl_petugas')->result_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Petugas/v_beranda', $data);
		$this->load->view('Template/footer');
	}

	public function add()
	{
		$data = array(
            'nama'        		=> $this->input->post('nama', true),
            'loket'     		=> $this->input->post('loket', true),
            'deskripsi'         => $this->input->post('deskripsi', true),
            'created_at'        => date('Y-m-d'),
			'updated_at'        => date('Y-m-d')
        );

        $this->m_petugas->insert_data('tbl_petugas', $data);

        $this->session->set_flashdata('pesan', 'Di Tambahkan');
        redirect('petugas');
	}

	public function update()
	{
		$data = array(
            'nama'        		=> $this->input->post('nama', true),
            'loket'     		=> $this->input->post('loket', true),
            'deskripsi'         => $this->input->post('deskripsi', true),
			'updated_at'        => date('Y-m-d')
        );
		$this->db->where('id_petugas', $this->input->post('id_petugas', true));
        $this->db->update('tbl_petugas', $data);
        $this->session->set_flashdata('pesan', 'Di Ubah !!!');
        redirect('petugas');
	}

	public function delete($id)
    {
		$where = array('id_petugas' => $id);
        $this->m_petugas->hapus_data($where, 'tbl_petugas');
        $this->session->set_flashdata('pesan', 'Di Hapus !!!');
        redirect('petugas');
    }
}
