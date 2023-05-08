<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Petugas PTSP';
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

		$this->M_petugas->insert_data('tbl_petugas', $data);

		$this->session->set_flashdata('pesan', 'Di Tambahkan');
		redirect('petugas');
	}

	public function proses_input_data_ptgs()
	{
		$nama_loket = strtolower($this->input->post('loket', true));
		$upload_data = $_FILES['image']['name'];

		if ($upload_data) {
			$config['upload_path']        = './assets/img/profile';
			$config['allowed_types']      = 'jpeg|jpg|png';
			$config['max_size']           = '2048';
			$config['file_name']          = $nama_loket;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$upload_name = $this->upload->data('file_name');

				$data = array(
					'nama'        		=> $this->input->post('nama', true),
					'loket'     		=> $this->input->post('loket', true),
					'deskripsi'         => $this->input->post('deskripsi', true),
					'created_at'        => date('Y-m-d'),
					'updated_at'        => date('Y-m-d'),
					'image'             => $upload_name
				);

				$this->M_petugas->insert_data('tbl_petugas', $data);

				$this->session->set_flashdata('pesan', 'Di Tambahkan');
				redirect('petugas');
			} else {
				$this->session->set_flashdata('nama_menu', 'Tipe File Tidak Support Atau File Terlalu Besar !!!');
				redirect('petugas');
			}
		}
	}
	public function proses_update_data_ptgs()
	{
		$id_petugas = strtolower($this->input->post('id_petugas', true));
		$nama_loket = strtolower($this->input->post('loket', true));

		$data['transaksi'] = $this->db->get_where('tbl_petugas', ['id_petugas' => $id_petugas])->row_array();

		$upload_image = $_FILES['image']['name'];

		if ($upload_image) {
			$config['upload_path']        = './assets/img/profile';
			$config['allowed_types']      = 'jpeg|jpg|png';
			$config['max_size']           = '2048';
			$config['file_name']          = $nama_loket . '-edit';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$old_image = $data['tbl_petugas']['loket'];
				if ($old_image != 'default.jpg') {
					unlink(FCPATH . "./assets/img/profile" . $old_image);
				}

				$new_image = $this->upload->data('file_name');

				$this->db->set('image', $new_image);
			} else {
				$this->session->set_flashdata('nama_menu', 'Tipe File Tidak Support Atau File Terlalu Besar !!!');
				redirect('petugas');
			}
		}

		$data = array(
			'nama'        		=> $this->input->post('nama', true),
			'id_petugas'		=> $this->input->post('id_petugas', true),
			'loket'     		=> $this->input->post('loket', true),
			'deskripsi'         => $this->input->post('deskripsi', true),
			'created_at'        => date('Y-m-d'),
			'updated_at'        => date('Y-m-d')
		);

		$this->db->update('tbl_petugas', $data, array('id_petugas' => $id_petugas));

		$this->session->set_flashdata('pesan', 'Di Ubah !!!');
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

		//cek jika ada gambar yang akan di upload
		$upload_image = $_FILES['image']['name'];

		if ($upload_image) {
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']     	= '2048';
			$config['upload_path']     	= './assets/img/profile';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$old_image = $data['user']['image'];
				if ($old_image != 'default.jpg') {
					unlink(FCPATH . "assets/img/profile/" . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
			} else {
				// echo $this->upload->display_errors();
				$this->session->set_flashdata('nama_menu', 'Tipe File Tidak Support Atau File Terlalu Besar !!!');
				redirect('user/edit');
			}
		}

		$this->db->where('id_petugas', $this->input->post('id_petugas', true));
		$this->db->update('tbl_petugas', $data);
		$this->session->set_flashdata('pesan', 'Di Ubah !!!');
		redirect('petugas');
	}

	public function delete($id)
	{
		$where = array('id_petugas' => $id);
		$this->M->hapus_data($where, 'tbl_petugas');
		$this->session->set_flashdata('pesan', 'Di Hapus !!!');
		redirect('petugas');
	}

	public function delete_data($id)
	{
		$where = array('id_petugas' => $id);
		$row = $this->db->where('id_petugas', $id)->get('tbl_petugas')->row_array();
		unlink('assets/img/profile/' . $row['image']);

		$this->M_petugas->hapus_data($where, 'tbl_petugas');
		$this->session->set_flashdata('pesan', 'Di Hapus !!!');
		redirect('petugas');
	}
}
