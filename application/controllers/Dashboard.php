<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function inovasi()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Inovasi';
        $data['data'] = $this->db->get('tbl_inovasi')->result_array();

        $this->load->view('Template/navbar', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('Petugas/v_inovasi', $data);
        $this->load->view('Template/footer');
    }
    public function proses_input_data_inovasi()
    {
        $nama_inovasi = strtolower($this->input->post('nama_inovasi', true));
        $upload_data = $_FILES['image']['name'];

        if ($upload_data) {
            $config['upload_path']        = './assets/img/inovasi';
            $config['allowed_types']      = 'png';
            $config['max_size']           = '2048';
            $config['file_name']          = $nama_inovasi;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $upload_name = $this->upload->data('file_name');

                $data = array(
                    'nama_inovasi'      => $this->input->post('nama_inovasi', true),
                    'deskripsi'         => $this->input->post('deskripsi', true),
                    'created_at'        => date('Y-m-d'),
                    'image'             => $upload_name
                );

                $this->m_petugas->insert_data('tbl_inovasi', $data);

                $this->session->set_flashdata('pesan', 'Di Tambahkan');
                redirect('dashboard/inovasi');
            } else {
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Support Atau File Terlalu Besar !!!');
                redirect('dashboard/inovasi');
            }
        }
    }
    public function proses_update_data_inovasi()
    {
        $id_inovasi = strtolower($this->input->post('id_inovasi', true));
        $nama_inovasi = strtolower($this->input->post('nama_inovasi', true));

        $data['transaksi'] = $this->db->get_where('tbl_inovasi', ['id_inovasi' => $id_inovasi])->row_array();

        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path']        = './assets/img/inovasi';
            $config['allowed_types']      = 'png';
            $config['max_size']           = '2048';
            $config['file_name']          = $nama_inovasi;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['tbl_inovasi']['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "./assets/img/inovasi" . $old_image);
                }

                $new_image = $this->upload->data('file_name');

                $this->db->set('image', $new_image);
            } else {
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Support Atau File Terlalu Besar !!!');
                redirect('dashboard/inovasi');
            }
        }

        $data = array(
            'nama_inovasi'      => $this->input->post('nama_inovasi', true),
            'id_inovasi'        => $this->input->post('id_inovasi', true),
            'deskripsi'         => $this->input->post('deskripsi', true),
            'updated_at'        => date('Y-m-d')
        );

        $this->db->update('tbl_inovasi', $data, array('id_inovasi' => $id_inovasi));

        $this->session->set_flashdata('pesan', 'Di Ubah !!!');
        redirect('dashboard/inovasi');
    }

    public function delete_data($id)
    {
        $where = array('id_inovasi' => $id);
        $row = $this->db->where('id_inovasi', $id)->get('tbl_inovasi')->row_array();
        unlink('assets/img/inovasi/' . $row['image']);

        $this->m_petugas->hapus_data($where, 'tbl_inovasi');
        $this->session->set_flashdata('pesan', 'Di Hapus !!!');
        redirect('dashboard/inovasi');
    }
}
