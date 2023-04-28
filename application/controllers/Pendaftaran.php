<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function dispensasi_kawin()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		if($data['user']['role_id'] == 1){
			$data['data'] = $this->db->get('tbl_daftar_diska')->result_array();
		}else{
			$kua_login = $data['user']['name'];
			$data['data'] = $this->db->get_where('tbl_daftar_diska', ['kode_kua' => $kua_login])->result_array();
		}

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_diska', $data);
		$this->load->view('Template/footer');
	}

	public function add_pendaftaran_diska()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_tambah_diska');
		$this->load->view('Template/footer');
	}

	function autogenerate() {
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );
    
        shuffle($chars);
    
        $num_chars = 10;
        $token = '';
    
        for ($i = 0; $i < $num_chars; $i++){ // <-- $num_chars instead of $len
            $token .= $chars[mt_rand(0, $num_chars)];
        }
    
        return $token;
    }

	public function proses_input_data_diska()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		//Pemohon 1
		$nama_p1 = $this->input->post('nama_p1', true).' bin '.$this->input->post('nama_ayah_p1', true);
		$alamat_p1 = $this->input->post('nama_jalan_p1', true)
				.', RT/RW '.$this->input->post('rt_p1', true).'/'.$this->input->post('rw_p1', true)
				.', Desa/Kel '.$this->input->post('kelurahan_p1', true)
				.', Kec. '.$this->input->post('kecamatan_p1', true)
				.', Kota/Kab. '.$this->input->post('kota_p1', true)
				.', '.$this->input->post('provinsi_p1', true);
		$dateOfBirth_p1 = $this->input->post('tgl_lahir_p1', true);
		$now_p1 = date('Y-m-d');
		$diff_p1 = date_diff(date_create($dateOfBirth_p1), date_create($now_p1));
		$umur_p1 = $diff_p1->format('%y')." tahun ".$diff_p1->format('%m')." bulan ".$diff_p1->format('%d')." hari";
		
		//Pemohon 2
		$nama_p2 = $this->input->post('nama_p2', true).' bin '.$this->input->post('nama_ayah_p2', true);
		$alamat_p2 = $this->input->post('nama_jalan_p2', true)
				.', RT/RW '.$this->input->post('rt_p2', true).'/'.$this->input->post('rw_p2', true)
				.', Desa/Kel '.$this->input->post('kelurahan_p2', true)
				.', Kec. '.$this->input->post('kecamatan_p2', true)
				.', Kota/Kab. '.$this->input->post('kota_p2', true)
				.', '.$this->input->post('provinsi_p2', true);
		$dateOfBirth_p2 = $this->input->post('tgl_lahir_p2', true);
		$now_p2 = date('Y-m-d');
		$diff_p2 = date_diff(date_create($dateOfBirth_p2), date_create($now_p2));
		$umur_p2 = $diff_p2->format('%y')." tahun ".$diff_p2->format('%m')." bulan ".$diff_p2->format('%d')." hari";

		//Anak
		if($this->input->post('jk_anak', true) == "Perempuan"){
			$nama_anak = $this->input->post('nama_anak', true).' binti '.$this->input->post('nama_ayah_anak', true);
		}else if($this->input->post('jk_anak', true) == "Laki-Laki"){
			$nama_anak = $this->input->post('nama_anak', true).' bin '.$this->input->post('nama_ayah_anak', true);
		}
		$alamat_anak = $this->input->post('nama_jalan_anak', true)
				.', RT/RW '.$this->input->post('rt_anak', true).'/'.$this->input->post('rw_anak', true)
				.', Desa/Kel '.$this->input->post('kelurahan_anak', true)
				.', Kec. '.$this->input->post('kecamatan_anak', true)
				.', Kota/Kab. '.$this->input->post('kota_anak', true)
				.', '.$this->input->post('provinsi_anak', true);
		$dateOfBirth_anak = $this->input->post('tgl_lahir_anak', true);
		$now_anak = date('Y-m-d');
		$diff_anak = date_diff(date_create($dateOfBirth_anak), date_create($now_anak));
		$umur_anak = $diff_anak->format('%y')." tahun ".$diff_anak->format('%m')." bulan ".$diff_anak->format('%d')." hari";
		
		//Calon
		if($this->input->post('jk_calon', true) == "Perempuan"){
			$nama_calon = $this->input->post('nama_calon', true).' binti '.$this->input->post('nama_ayah_calon', true);
		}else if($this->input->post('jk_calon', true) == "Laki-Laki"){
			$nama_calon = $this->input->post('nama_calon', true).' bin '.$this->input->post('nama_ayah_calon', true);
		}
		$alamat_calon = $this->input->post('nama_jalan_calon', true)
				.', RT/RW '.$this->input->post('rt_calon', true).'/'.$this->input->post('rw_calon', true)
				.', Desa/Kel '.$this->input->post('kelurahan_calon', true)
				.', Kec. '.$this->input->post('kecamatan_calon', true)
				.', Kota/Kab. '.$this->input->post('kota_calon', true)
				.', '.$this->input->post('provinsi_calon', true);
		$dateOfBirth_calon = $this->input->post('tgl_lahir_calon', true);
		$now_calon = date('Y-m-d');
		$diff_calon = date_diff(date_create($dateOfBirth_calon), date_create($now_calon));
		$umur_calon = $diff_calon->format('%y')." tahun ".$diff_calon->format('%m')." bulan ".$diff_calon->format('%d')." hari";

		$data = array(
			'kode_kua'  		=> $data['user']['name'],
			'jenis_permohonan'  => $this->input->post('jenis_permohonan', true),
			'nama_p1'     		=> $nama_p1,
			'tempat_lahir_p1'   => $this->input->post('tempat_lahir_p1', true),
			'tgl_lahir_p1'      => $this->input->post('tgl_lahir_p1', true),
			'umur_p1'      		=> $umur_p1,
			'nik_p1'      		=> $this->input->post('nik_p1', true),
			'tgl_nik_p1'      	=> $this->input->post('tgl_nik_p1', true),
			'agama_p1'      	=> $this->input->post('agama_p1', true),
			'pendidikan_p1'     => $this->input->post('pendidikan_p1', true),
			'pekerjaan_p1'     	=> $this->input->post('pekerjaan_p1', true),
			'alamat_p1'     	=> $alamat_p1,
			'nama_p2'     		=> $nama_p2,
			'tempat_lahir_p2'   => $this->input->post('tempat_lahir_p2', true),
			'tgl_lahir_p2'      => $this->input->post('tgl_lahir_p2', true),
			'umur_p2'      		=> $umur_p2,
			'nik_p2'      		=> $this->input->post('nik_p2', true),
			'agama_p2'      	=> $this->input->post('agama_p2', true),
			'pendidikan_p2'     => $this->input->post('pendidikan_p2', true),
			'pekerjaan_p2'     	=> $this->input->post('pekerjaan_p2', true),
			'alamat_p2'     	=> $alamat_p2,
			'nama_anak'     	=> $nama_anak,
			'jk_anak' 			=> $this->input->post('jk_anak', true),
			'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak', true),
			'tgl_lahir_anak'    => $this->input->post('tgl_lahir_anak', true),
			'umur_anak'      	=> $umur_anak,
			'nik_anak'    		=> $this->input->post('nik_anak', true),
			'agama_anak'    	=> $this->input->post('agama_anak', true),
			'pendidikan_anak'   => $this->input->post('pendidikan_anak', true),
			'pekerjaan_anak'   	=> $this->input->post('pekerjaan_anak', true),
			'penghasilan_anak'  => $this->input->post('penghasilan_anak', true),
			'alamat_anak'  		=> $alamat_anak,
			'nama_calon'     	=> $nama_calon,
			'jk_calon' 			=> $this->input->post('jk_calon', true),
			'tempat_lahir_calon' => $this->input->post('tempat_lahir_calon', true),
			'tgl_lahir_calon'    => $this->input->post('tgl_lahir_calon', true),
			'umur_calon'      	 => $umur_calon,
			'nik_calon'    		 => $this->input->post('nik_calon', true),
			'agama_calon'    	 => $this->input->post('agama_calon', true),
			'pendidikan_calon'   => $this->input->post('pendidikan_calon', true),
			'pekerjaan_calon'    => $this->input->post('pekerjaan_calon', true),
			'penghasilan_calon'  => $this->input->post('penghasilan_calon', true),
			'alamat_calon'  	 => $alamat_calon,
			'lama_mengenal_calon'   => $this->input->post('lama_mengenal_calon', true),
			'tgl_lamaran'  			=> $this->input->post('tgl_lamaran', true),
			'created_at'        => date('Y-m-d'),
			'updated_at'        => date('Y-m-d'),
			'tgl_daftar'        => date('Y-m-d'),
			'kode'              => $this->autogenerate(),
			'progress'			=> 40,
		);
		
		$this->m_petugas->insert_data('tbl_daftar_diska', $data);

		$this->session->set_flashdata('pesan', 'Di Tambahkan');
		redirect('pendaftaran/dispensasi_kawin');
	}

	public function print_rtf_diska(){
        $id_diska  = $this->uri->segment(3);
		$kode_rtf = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();
		$jenis_permohonan         		= $kode_rtf['jenis_permohonan'];
                
        $tgl_daftar            	= tanggal_indonesia($kode_rtf['tgl_daftar']);
        $nama_p1         		= $kode_rtf['nama_p1'];
        $tempat_lahir_p1       	= $kode_rtf['tempat_lahir_p1'];
        $tgl_lahir_p1       	= tanggal_indonesia($kode_rtf['tgl_lahir_p1']);
        $umur_p1      			= $kode_rtf['umur_p1'];
        $nik_p1     			= $kode_rtf['nik_p1'];
        $tgl_nik_p1             = tanggal_indonesia($kode_rtf['tgl_nik_p1']);
        $agama_p1      			= $kode_rtf['agama_p1'];
        $pendidikan_p1          = $kode_rtf['pendidikan_p1'];
        $pekerjaan_p1  			= $kode_rtf['pekerjaan_p1'];
        $alamat_p1    			= $kode_rtf['alamat_p1'];
		
		$nama_p2         		= $kode_rtf['nama_p2'];
        $tempat_lahir_p2       	= $kode_rtf['tempat_lahir_p2'];
        $tgl_lahir_p2       	= tanggal_indonesia($kode_rtf['tgl_lahir_p2']);
        $umur_p2      			= $kode_rtf['umur_p2'];
        $nik_p2     			= $kode_rtf['nik_p2'];
        $agama_p2      			= $kode_rtf['agama_p2'];
        $pendidikan_p2          = $kode_rtf['pendidikan_p2'];
        $pekerjaan_p2  			= $kode_rtf['pekerjaan_p2'];
        $alamat_p2    			= $kode_rtf['alamat_p2'];
		
		$nama_anak         		= $kode_rtf['nama_anak'];
		$jk_anak         		= $kode_rtf['jk_anak'];
        $tempat_lahir_anak      = $kode_rtf['tempat_lahir_anak'];
        $tgl_lahir_anak       	= tanggal_indonesia($kode_rtf['tgl_lahir_anak']);
        $umur_anak      		= $kode_rtf['umur_anak'];
        $pekerjaan_anak  		= $kode_rtf['pekerjaan_anak'];
        $pendidikan_anak        = $kode_rtf['pendidikan_anak'];
		$alamat_anak    		= $kode_rtf['alamat_anak'];
		
		$nama_calon      		= $kode_rtf['nama_calon'];
		$tempat_lahir_calon     = $kode_rtf['tempat_lahir_calon'];
		$tgl_lahir_calon     	= tanggal_indonesia($kode_rtf['tgl_lahir_calon']);
		$umur_calon     		= $kode_rtf['umur_calon'];
		$pekerjaan_calon     	= $kode_rtf['pekerjaan_calon'];
		$pendidikan_calon     	= $kode_rtf['pendidikan_calon'];
		$alamat_calon     		= $kode_rtf['alamat_calon'];
		$lama_mengenal_calon    = $kode_rtf['lama_mengenal_calon'];
		$penghasilan_calon    	= $kode_rtf['penghasilan_calon'];
		$penghasilan_calon_terbilang    	= terbilang($kode_rtf['penghasilan_calon']);
		$tgl_lamaran    		= $kode_rtf['tgl_lamaran'];
		$penghasilan_anak    	= $kode_rtf['penghasilan_anak'];
		$penghasilan_anak_terbilang    	= terbilang($kode_rtf['penghasilan_anak']);

        
        if($jenis_permohonan == "Anak perempuan"){
			$document = file_get_contents('./downloads/template_diska_p.rtf');
		}else if($jenis_permohonan == "Anak laki-Laki"){
			$document = file_get_contents('./downloads/template_diska_l.rtf');
		}else if($jenis_permohonan == "Anak perempuan dan laki-laki"){
			$document = file_get_contents('./downloads/template_diska_pl.rtf');
		}
        

        $document = str_replace("#1#", $tgl_daftar, $document);
		$document = str_replace("#2#", $nama_p1, $document);
		$document = str_replace("#3#", $tempat_lahir_p1, $document);
		$document = str_replace("#4#", $tgl_lahir_p1, $document);
		$document = str_replace("#5#", $umur_p1, $document);
		$document = str_replace("#6#", $nik_p1, $document);
		$document = str_replace("#7#", $tgl_nik_p1, $document);
		$document = str_replace("#8#", $agama_p1, $document);
		$document = str_replace("#9#", $pendidikan_p1, $document);
		$document = str_replace("#10#", $pekerjaan_p1, $document);
		$document = str_replace("#11#", $alamat_p1, $document);

		$document = str_replace("#12#", $nama_p2, $document);
		$document = str_replace("#13#", $tempat_lahir_p2, $document);
		$document = str_replace("#14#", $tgl_lahir_p2, $document);
		$document = str_replace("#15#", $umur_p2, $document);
		$document = str_replace("#16#", $nik_p2, $document);
		$document = str_replace("#17#", $agama_p2, $document);
		$document = str_replace("#18#", $pendidikan_p2, $document);
		$document = str_replace("#19#", $pekerjaan_p2, $document);
		$document = str_replace("#20#", $alamat_p2, $document);

		$document = str_replace("#21#", $nama_anak, $document);
		$document = str_replace("#22#", $jk_anak, $document);
		$document = str_replace("#23#", $tempat_lahir_anak, $document);
		$document = str_replace("#24#", $tgl_lahir_anak, $document);
		$document = str_replace("#25#", $umur_anak, $document);
		$document = str_replace("#26#", $pekerjaan_anak, $document);
		$document = str_replace("#27#", $pendidikan_anak, $document);
		$document = str_replace("#28#", $alamat_anak, $document);
		
		$document = str_replace("#29#", $nama_calon, $document);
		$document = str_replace("#30#", $tempat_lahir_calon, $document);
		$document = str_replace("#31#", $tgl_lahir_calon, $document);
		$document = str_replace("#32#", $umur_calon, $document);
		$document = str_replace("#33#", $pekerjaan_calon, $document);
		$document = str_replace("#34#", $pendidikan_calon, $document);
		$document = str_replace("#35#", $alamat_calon, $document);
		$document = str_replace("#36#", $lama_mengenal_calon, $document);
		$document = str_replace("#37#", $penghasilan_calon, $document);
		$document = str_replace("#38#", $penghasilan_calon_terbilang, $document);
		$document = str_replace("#39#", $tgl_lamaran, $document);
		$document = str_replace("#40#", $penghasilan_anak, $document);
		$document = str_replace("#41#", $penghasilan_anak_terbilang, $document);
		

        
        header("Content-type: application/rtf");
        header("Content-disposition: inline; filename=$nama_p1.rtf");
        header("Content-length: " . strlen($document));
        echo $document;
	}

	public function upload_ktp_p1($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ktp_p1', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ktp_p1()
    {
        $id_diska      = $this->input->post('id_diska');
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_diska . '_ktp_p1');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_diska SET file_ktp_p1 = '$new_image' where id_diska = '$id_diska' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/dispensasi_kawin');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/dispensasi_kawin');
            }
        }
    }

	public function upload_ktp_p2($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ktp_p2', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ktp_p2()
    {
        $id_diska      = $this->input->post('id_diska');
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_diska . '_ktp_p2');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_diska SET file_ktp_p2 = '$new_image' where id_diska = '$id_diska' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/dispensasi_kawin');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/dispensasi_kawin');
            }
        }
    }

	public function upload_kk($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_kk', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_kk()
    {
        $id_diska      = $this->input->post('id_diska');
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_diska . '_kk');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_diska SET file_kk = '$new_image' where id_diska = '$id_diska' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/dispensasi_kawin');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/dispensasi_kawin');
            }
        }
    }

	public function upload_al_anak($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_al_anak', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_al_anak()
    {
        $id_diska      = $this->input->post('id_diska');
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_diska . '_al_anak');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_diska SET file_akta_anak = '$new_image' where id_diska = '$id_diska' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/dispensasi_kawin');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/dispensasi_kawin');
            }
        }
    }

	public function upload_al_calon($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_al_calon', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_al_calon()
    {
        $id_diska      = $this->input->post('id_diska');
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_diska . '_al_calon');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_diska SET file_akta_calon = '$new_image' where id_diska = '$id_diska' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/dispensasi_kawin');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/dispensasi_kawin');
            }
        }
    }

	public function upload_ijazah_anak($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ijazah_anak', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ijazah_anak()
    {
        $id_diska      = $this->input->post('id_diska');
		$data['diska'] = $this->db->get_where('tbl_daftar_diska', ['id_diska' => $id_diska])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_diska . '_ijazah_anak');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_diska SET file_ijazah_anak = '$new_image' where id_diska = '$id_diska' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/dispensasi_kawin');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/dispensasi_kawin');
            }
        }
    }

	public function edit_diska($kode)
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dispensasi Kawin';
		$data['data'] = $this->db->get_where('tbl_daftar_diska', ['kode' => $kode])->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_edit_diska', $data);
		$this->load->view('Template/footer');
	}
	public function proses_update_diska()
	{
		$id_diska = $this->input->post('id_diska', true);
		//Pemohon 1
		$dateOfBirth_p1 = $this->input->post('tgl_lahir_p1', true);
		$now_p1 = date('Y-m-d');
		$diff_p1 = date_diff(date_create($dateOfBirth_p1), date_create($now_p1));
		$umur_p1 = $diff_p1->format('%y')." tahun ".$diff_p1->format('%m')." bulan ".$diff_p1->format('%d')." hari";
		//Pemohon 2
		$dateOfBirth_p2 = $this->input->post('tgl_lahir_p2', true);
		$now_p2 = date('Y-m-d');
		$diff_p2 = date_diff(date_create($dateOfBirth_p2), date_create($now_p2));
		$umur_p2 = $diff_p2->format('%y')." tahun ".$diff_p2->format('%m')." bulan ".$diff_p2->format('%d')." hari";
		//Anak
		$dateOfBirth_anak = $this->input->post('tgl_lahir_anak', true);
		$now_anak = date('Y-m-d');
		$diff_anak = date_diff(date_create($dateOfBirth_anak), date_create($now_anak));
		$umur_anak = $diff_anak->format('%y')." tahun ".$diff_anak->format('%m')." bulan ".$diff_anak->format('%d')." hari";
		//Calon
		$dateOfBirth_calon = $this->input->post('tgl_lahir_calon', true);
		$now_calon = date('Y-m-d');
		$diff_calon = date_diff(date_create($dateOfBirth_calon), date_create($now_calon));
		$umur_calon = $diff_calon->format('%y')." tahun ".$diff_calon->format('%m')." bulan ".$diff_calon->format('%d')." hari";

		$data = array(
			
			'jenis_permohonan'  => $this->input->post('jenis_permohonan', true),

			'nama_p1'     		=> $this->input->post('nama_p1', true),
			'tempat_lahir_p1'   => $this->input->post('tempat_lahir_p1', true),
			'tgl_lahir_p1'      => $this->input->post('tgl_lahir_p1', true),
			'umur_p1'      		=> $umur_p1,
			'nik_p1'      		=> $this->input->post('nik_p1', true),
			'agama_p1'      	=> $this->input->post('agama_p1', true),
			'pendidikan_p1'     => $this->input->post('pendidikan_p1', true),
			'pekerjaan_p1'     	=> $this->input->post('pekerjaan_p1', true),
			'alamat_p1'     	=> $this->input->post('alamat_p1', true),

			'nama_p2'     		=> $this->input->post('nama_p2', true),
			'tempat_lahir_p2'   => $this->input->post('tempat_lahir_p2', true),
			'tgl_lahir_p2'      => $this->input->post('tgl_lahir_p2', true),
			'umur_p2'      		=> $umur_p2,
			'nik_p2'      		=> $this->input->post('nik_p2', true),
			'agama_p2'      	=> $this->input->post('agama_p2', true),
			'pendidikan_p2'     => $this->input->post('pendidikan_p2', true),
			'pekerjaan_p2'     	=> $this->input->post('pekerjaan_p2', true),
			'alamat_p2'     	=> $this->input->post('alamat_p2', true),

			'nama_anak'     	=> $this->input->post('nama_anak', true),
			'jk_anak' 			=> $this->input->post('jk_anak', true),
			'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak', true),
			'tgl_lahir_anak'    => $this->input->post('tgl_lahir_anak', true),
			'umur_anak'      	=> $umur_anak,
			'nik_anak'    		=> $this->input->post('nik_anak', true),
			'agama_anak'    	=> $this->input->post('agama_anak', true),
			'pendidikan_anak'   => $this->input->post('pendidikan_anak', true),
			'pekerjaan_anak'   	=> $this->input->post('pekerjaan_anak', true),
			'penghasilan_anak'  => $this->input->post('penghasilan_anak', true),
			'alamat_anak'  		=> $this->input->post('alamat_anak', true),

			'nama_calon'     	=> $this->input->post('nama_calon', true),
			'jk_calon' 			=> $this->input->post('jk_calon', true),
			'tempat_lahir_calon' => $this->input->post('tempat_lahir_calon', true),
			'tgl_lahir_calon'    => $this->input->post('tgl_lahir_calon', true),
			'umur_calon'      	 => $umur_calon,
			'nik_calon'    		 => $this->input->post('nik_calon', true),
			'agama_calon'    	 => $this->input->post('agama_calon', true),
			'pendidikan_calon'   => $this->input->post('pendidikan_calon', true),
			'pekerjaan_calon'    => $this->input->post('pekerjaan_calon', true),
			'penghasilan_calon'  => $this->input->post('penghasilan_calon', true),
			'alamat_calon'  	 =>$this->input->post('alamat_calon', true),

			'lama_mengenal_calon'   => $this->input->post('lama_mengenal_calon', true),
			'tgl_lamaran'  			=> $this->input->post('tgl_lamaran', true),
			'updated_at'        => date('Y-m-d'),
		);

		$this->db->update('tbl_daftar_diska', $data, array('id_diska' => $id_diska));

		$this->session->set_flashdata('pesan', 'Di Ubah !!!');
		redirect('pendaftaran/dispensasi_kawin');
	}

	public function delete_data_diska($id)
	{
		$where = array('id_diska' => $id);
		$row = $this->db->where('id_diska', $id)->get('tbl_daftar_diska')->row_array();

		$this->m_petugas->hapus_data($where, 'tbl_daftar_diska');
		$this->session->set_flashdata('pesan', 'Di Hapus !!!');
		redirect('pendaftaran/dispensasi_kawin');
	}

	public function sidang_isbat()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		
		if($data['user']['role_id'] == 1){
			$data['data'] = $this->db->get('tbl_daftar_isbat')->result_array();
		}else{
			$kua_login = $data['user']['name'];
			$data['data'] = $this->db->get_where('tbl_daftar_isbat', ['kode_kua' => $kua_login])->result_array();
		}

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_isbat', $data);
		$this->load->view('Template/footer');
	}

	public function add_pendaftaran_isbat()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_tambah_isbat');
		$this->load->view('Template/footer');
	}

	public function proses_input_data_isbat()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		//Pemohon 1
		$jk_p1 = $this->input->post('jk_p1', true);
		if($jk_p1 == "Perempuan"){
			$nama_p1 = $this->input->post('nama_p1', true).' binti '.$this->input->post('nama_ayah_p1', true);
		}else if($jk_p1 == "Laki-Laki"){
			$nama_p1 = $this->input->post('nama_p1', true).' bin '.$this->input->post('nama_ayah_p1', true);
		}
		$dateOfBirth_p1 = $this->input->post('tgl_lahir_p1', true);
		$now_p1 = date('Y-m-d');
		$diff_p1 = date_diff(date_create($dateOfBirth_p1), date_create($now_p1));
		$umur_p1 = $diff_p1->format('%y')." tahun ".$diff_p1->format('%m')." bulan ".$diff_p1->format('%d')." hari";
		$alamat_p1 = $this->input->post('nama_jalan_p1', true)
				.', RT/RW '.$this->input->post('rt_p1', true).'/'.$this->input->post('rw_p1', true)
				.', Desa/Kel '.$this->input->post('kelurahan_p1', true)
				.', Kec. '.$this->input->post('kecamatan_p1', true)
				.', Kota/Kab. '.$this->input->post('kota_p1', true)
				.', '.$this->input->post('provinsi_p1', true);
		
		//Pemohon 2
		$jk_p2 = $this->input->post('jk_p2', true);
		if($jk_p2 == "Perempuan"){
			$nama_p2 = $this->input->post('nama_p2', true).' binti '.$this->input->post('nama_ayah_p2', true);
		}else if($jk_p2 == "Laki-Laki"){
			$nama_p2 = $this->input->post('nama_p2', true).' bin '.$this->input->post('nama_ayah_p2', true);
		}
		$dateOfBirth_p2 = $this->input->post('tgl_lahir_p2', true);
		$now_p2 = date('Y-m-d');
		$diff_p2 = date_diff(date_create($dateOfBirth_p2), date_create($now_p2));
		$umur_p2 = $diff_p2->format('%y')." tahun ".$diff_p2->format('%m')." bulan ".$diff_p2->format('%d')." hari";
		$alamat_p2 = $this->input->post('nama_jalan_p2', true)
				.', RT/RW '.$this->input->post('rt_p2', true).'/'.$this->input->post('rw_p2', true)
				.', Desa/Kel '.$this->input->post('kelurahan_p2', true)
				.', Kec. '.$this->input->post('kecamatan_p2', true)
				.', Kota/Kab. '.$this->input->post('kota_p2', true)
				.', '.$this->input->post('provinsi_p2', true);
		
		//Saksi 1
		$dateOfBirth_saksi1 = $this->input->post('tgl_lahir_saksi1', true);
		$now_saksi1 = date('Y-m-d');
		$diff_saksi1 = date_diff(date_create($dateOfBirth_saksi1), date_create($now_saksi1));
		$umur_saksi1 = $diff_saksi1->format('%y')." tahun ".$diff_saksi1->format('%m')." bulan ".$diff_saksi1->format('%d')." hari";

		//Saksi 2
		$dateOfBirth_saksi2 = $this->input->post('tgl_lahir_saksi2', true);
		$now_saksi2 = date('Y-m-d');
		$diff_saksi2 = date_diff(date_create($dateOfBirth_saksi2), date_create($now_saksi2));
		$umur_saksi2 = $diff_saksi2->format('%y')." tahun ".$diff_saksi2->format('%m')." bulan ".$diff_saksi2->format('%d')." hari";
		
		$data = array(
			'kode'              => $this->autogenerate(),
			'kode_kua'  		=> $data['user']['name'],
			'tgl_daftar'        => date('Y-m-d'),
			'nama_p1'     		=> $nama_p1,
			'nik_p1'      		=> $this->input->post('nik_p1', true),
			'umur_p1'      		=> $umur_p1,
			'agama_p1'      	=> $this->input->post('agama_p1', true),
			'pekerjaan_p1'     	=> $this->input->post('pekerjaan_p1', true),
			'pendidikan_p1'     => $this->input->post('pendidikan_p1', true),
			'alamat_p1'     	=> $alamat_p1,
			'nama_p2'     		=> $nama_p2,
			'nik_p2'      		=> $this->input->post('nik_p2', true),
			'umur_p2'      		=> $umur_p2,
			'agama_p2'      	=> $this->input->post('agama_p2', true),
			'pekerjaan_p2'     	=> $this->input->post('pekerjaan_p2', true),
			'pendidikan_p2'     => $this->input->post('pendidikan_p2', true),
			'alamat_p2'     	=> $alamat_p2,
			'tgl_nikah'      	=> $this->input->post('tgl_nikah', true),
			'tempat_nikah'      => $this->input->post('tempat_nikah', true),
			'nama_imam'      	=> $this->input->post('nama_imam', true),
			'tipe_wali'      	=> $this->input->post('tipe_wali', true),
			'nama_wali'      	=> $this->input->post('nama_wali', true),
			'nama_saksi1'      	=> $this->input->post('nama_saksi1', true),
			'umur_saksi1'      	=> $umur_saksi1,
			'agama_saksi1'      => $this->input->post('agama_saksi1', true),
			'nama_saksi2'      	=> $this->input->post('nama_saksi2', true),
			'umur_saksi2'      	=> $umur_saksi2,
			'agama_saksi2'      => $this->input->post('agama_saksi2', true),
			'maskawin'      	=> $this->input->post('maskawin', true),
			'alasan_tipe_wali'  => $this->input->post('alasan_tipe_wali', true),
			'alamat_akad'  		=> $this->input->post('alamat_akad', true),
			'status_p1'  		=> $this->input->post('status_p1', true),
			'status_p2'  		=> $this->input->post('status_p2', true),
			'alamat_selama_nikah'  		=> $this->input->post('alamat_selama_nikah', true),
			'jumlah_anak'  		=> $this->input->post('jumlah_anak', true),
			'nama_anak'  		=> $this->input->post('nama_anak', true),
			'created_at'        => date('Y-m-d'),
			'updated_at'        => date('Y-m-d'),
			'progress'			=> 40,
			'tempat_lahir_p1'   => $this->input->post('tempat_lahir_p1', true),
			'tgl_lahir_p1'     	=> $this->input->post('tgl_lahir_p1', true),
			'tempat_lahir_p2'   => $this->input->post('tempat_lahir_p2', true),
			'tgl_lahir_p2'     	=> $this->input->post('tgl_lahir_p2', true),
			'jk_p1'     	=> $this->input->post('jk_p1', true),
			'jk_p2'     	=> $this->input->post('jk_p2', true),
			'tempat_lahir_saksi1'     	=> $this->input->post('tempat_lahir_saksi1', true),
			'tempat_lahir_saksi2'     	=> $this->input->post('tempat_lahir_saksi2', true),
			'tgl_lahir_saksi1'     	=> $this->input->post('tgl_lahir_saksi1', true),
			'tgl_lahir_saksi2'     	=> $this->input->post('tgl_lahir_saksi2', true),

		);
		
		$this->m_petugas->insert_data('tbl_daftar_isbat', $data);

		$this->session->set_flashdata('pesan', 'Di Tambahkan');
		redirect('pendaftaran/sidang_isbat');
	}

	public function print_rtf_isbat(){
        $id_diska  = $this->uri->segment(3);
		$kode_rtf = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_diska])->row_array();        
        $tgl_daftar            	= tanggal_indonesia($kode_rtf['tgl_daftar']);
        $nama_p1         		= $kode_rtf['nama_p1'];
		$nik_p1     			= $kode_rtf['nik_p1'];
        $umur_p1      			= $kode_rtf['umur_p1'];
        $agama_p1      			= $kode_rtf['agama_p1'];
        $pekerjaan_p1  			= $kode_rtf['pekerjaan_p1'];
		$pendidikan_p1          = $kode_rtf['pendidikan_p1'];
        $alamat_p1    			= $kode_rtf['alamat_p1'];
		
		$nama_p2         		= $kode_rtf['nama_p2'];
		$nik_p2     			= $kode_rtf['nik_p2'];
        $umur_p2      			= $kode_rtf['umur_p2'];
        $agama_p2      			= $kode_rtf['agama_p2'];
        $pekerjaan_p2  			= $kode_rtf['pekerjaan_p2'];
		$pendidikan_p2          = $kode_rtf['pendidikan_p2'];
        $alamat_p2    			= $kode_rtf['alamat_p2'];
		
        $tgl_nikah       		= tanggal_indonesia($kode_rtf['tgl_nikah']);
        $tempat_nikah      		= $kode_rtf['tempat_nikah'];
        $nama_imam  			= $kode_rtf['nama_imam'];
        $tipe_wali        		= $kode_rtf['tipe_wali'];
		$nama_wali    			= $kode_rtf['nama_wali'];
		
		$nama_saksi1      		= $kode_rtf['nama_saksi1'];
		$umur_saksi1     		= $kode_rtf['umur_saksi1'];
		$agama_saksi1     		= $kode_rtf['agama_saksi1'];

		$nama_saksi2      		= $kode_rtf['nama_saksi2'];
		$umur_saksi2     		= $kode_rtf['umur_saksi2'];
		$agama_saksi2     		= $kode_rtf['agama_saksi2'];

		$maskawin     			= $kode_rtf['maskawin'];
		$alasan_tipe_wali     	= $kode_rtf['alasan_tipe_wali'];
		$alamat_akad     		= $kode_rtf['alamat_akad'];
		$status_p1     			= $kode_rtf['status_p1'];
		$status_p2     			= $kode_rtf['status_p2'];
		$alamat_selama_nikah    = $kode_rtf['alamat_selama_nikah'];
		$jumlah_anak     		= $kode_rtf['jumlah_anak'];
		$nama_anak     			= $kode_rtf['nama_anak'];

		$document = file_get_contents('./downloads/template_isbat.rtf');        

        $document = str_replace("#1#", $tgl_daftar, $document);
		$document = str_replace("#2#", $nama_p1, $document);
		$document = str_replace("#3#", $nik_p1, $document);
		$document = str_replace("#4#", $umur_p1, $document);
		$document = str_replace("#5#", $agama_p1, $document);
		$document = str_replace("#6#", $pekerjaan_p1, $document);
		$document = str_replace("#7#", $pendidikan_p1, $document);
		$document = str_replace("#8#", $alamat_p1, $document);

		$document = str_replace("#9#", $nama_p2, $document);
		$document = str_replace("#10#", $nik_p2, $document);
		$document = str_replace("#11#", $umur_p2, $document);
		$document = str_replace("#12#", $agama_p2, $document);
		$document = str_replace("#13#", $pekerjaan_p2, $document);
		$document = str_replace("#14#", $pendidikan_p2, $document);
		$document = str_replace("#15#", $alamat_p2, $document);

		$document = str_replace("#16#", $tgl_nikah, $document);
		$document = str_replace("#17#", $tempat_nikah, $document);
		$document = str_replace("#18#", $nama_imam, $document);
		$document = str_replace("#19#", $tipe_wali, $document);
		$document = str_replace("#20#", $nama_wali, $document);

		$document = str_replace("#21#", $nama_saksi1, $document);
		$document = str_replace("#22#", $umur_saksi1, $document);
		$document = str_replace("#23#", $agama_saksi1, $document);
		$document = str_replace("#24#", $nama_saksi2, $document);
		$document = str_replace("#25#", $umur_saksi2, $document);
		$document = str_replace("#26#", $agama_saksi2, $document);
		$document = str_replace("#27#", $maskawin, $document);
		$document = str_replace("#28#", $alasan_tipe_wali, $document);
		$document = str_replace("#29#", $alamat_akad, $document);
		$document = str_replace("#30#", $status_p1, $document);
		$document = str_replace("#31#", $status_p2, $document);
		$document = str_replace("#32#", $alamat_selama_nikah, $document);
		$document = str_replace("#33#", $jumlah_anak, $document);
		$document = str_replace("#34#", $nama_anak, $document);	

        
        header("Content-type: application/rtf");
        header("Content-disposition: inline; filename=$nama_p1.rtf");
        header("Content-length: " . strlen($document));
        echo $document;
	}

	public function upload_ktp_p1_isbat($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ktp_p1_isbat', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ktp_p1_isbat()
    {
        $id_isbat      = $this->input->post('id_isbat');
		$data['diska'] = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_isbat])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_isbat . '_ktp_p1_isbat');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_isbat SET file_ktp_p1 = '$new_image' where id_isbat = '$id_isbat' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/sidang_isbat');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/sidang_isbat');
            }
        }
    }

	public function upload_ktp_p2_isbat($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ktp_p2_isbat', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ktp_p2_isbat()
    {
        $id_isbat      = $this->input->post('id_isbat');
		$data['diska'] = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_isbat])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_isbat . '_ktp_p2_isbat');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_isbat SET file_ktp_p2 = '$new_image' where id_isbat = '$id_isbat' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/sidang_isbat');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/sidang_isbat');
            }
        }
    }

	public function upload_kk_isbat($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_kk_isbat', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_kk_isbat()
    {
        $id_isbat      = $this->input->post('id_isbat');
		$data['diska'] = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_isbat])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_isbat . '_kk_isbat');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_isbat SET file_kk = '$new_image' where id_isbat = '$id_isbat' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/sidang_isbat');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/sidang_isbat');
            }
        }
    }

	public function upload_ktp_semua_anak($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ktp_anak', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ktp_semua_anak()
    {
        $id_isbat      = $this->input->post('id_isbat');
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_isbat])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_isbat . '_ktp_anak');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_isbat SET file_ktp_semua_anak = '$new_image' where id_isbat = '$id_isbat' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/sidang_isbat');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/sidang_isbat');
            }
        }
    }

	public function upload_ket_kua($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_ket_kua', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_ket_kua()
    {
        $id_isbat      = $this->input->post('id_isbat');
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_isbat])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_isbat . '_ket_kua');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_isbat SET file_ket_kua = '$new_image' where id_isbat = '$id_isbat' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/sidang_isbat');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/sidang_isbat');
            }
        }
    }

	public function upload_surat_mati($kode){
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();
		
		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_upload_surat_mati', $data);
		$this->load->view('Template/footer');
	}

	public function proses_upload_surat_mati()
    {
        $id_isbat      = $this->input->post('id_isbat');
		$data['isbat'] = $this->db->get_where('tbl_daftar_isbat', ['id_isbat' => $id_isbat])->row_array();

		$upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']    = 'pdf|jpg|jpeg|JPG|JPEG|png';
            $config['max_size']         = '2048';
            $config['upload_path']      = './uploads';
            $filename                   = str_replace('/', '_', $id_isbat . '_surat_mati');
            $config['file_name']        = $filename;

            $this->load->library('upload', $config);
			
            if ($this->upload->do_upload('image')) {
				
                $old_image = $data['user']['file_upload'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . "uploads/" . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->query("UPDATE tbl_daftar_isbat SET file_surat_mati = '$new_image' where id_isbat = '$id_isbat' ");
                $this->session->set_flashdata('pesan', 'Di Upload');
                redirect('pendaftaran/sidang_isbat');
            } else {
				
                $this->session->set_flashdata('nama_menu', 'Tipe File Tidak Didukung Atau File Terlalu Besar !!!');
                redirect('pendaftaran/sidang_isbat');
            }
        }
    }

	public function edit_isbat($kode)
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Sidang Isbat';
		$data['data'] = $this->db->get_where('tbl_daftar_isbat', ['kode' => $kode])->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('Pendaftaran/v_edit_isbat', $data);
		$this->load->view('Template/footer');
	}
	public function proses_update_isbat()
	{
		$id_isbat = $this->input->post('id_isbat', true);
		//Pemohon 1
		$dateOfBirth_p1 = $this->input->post('tgl_lahir_p1', true);
		$now_p1 = date('Y-m-d');
		$diff_p1 = date_diff(date_create($dateOfBirth_p1), date_create($now_p1));
		$umur_p1 = $diff_p1->format('%y')." tahun ".$diff_p1->format('%m')." bulan ".$diff_p1->format('%d')." hari";
		//Pemohon 2
		$dateOfBirth_p2 = $this->input->post('tgl_lahir_p2', true);
		$now_p2 = date('Y-m-d');
		$diff_p2 = date_diff(date_create($dateOfBirth_p2), date_create($now_p2));
		$umur_p2 = $diff_p2->format('%y')." tahun ".$diff_p2->format('%m')." bulan ".$diff_p2->format('%d')." hari";
		//Saksi 1
		$dateOfBirth_saksi1 = $this->input->post('tgl_lahir_saksi1', true);
		$now_saksi1 = date('Y-m-d');
		$diff_saksi1 = date_diff(date_create($dateOfBirth_saksi1), date_create($now_saksi1));
		$umur_saksi1 = $diff_saksi1->format('%y')." tahun ".$diff_saksi1->format('%m')." bulan ".$diff_saksi1->format('%d')." hari";

		//Saksi 2
		$dateOfBirth_saksi2 = $this->input->post('tgl_lahir_saksi2', true);
		$now_saksi2 = date('Y-m-d');
		$diff_saksi2 = date_diff(date_create($dateOfBirth_saksi2), date_create($now_saksi2));
		$umur_saksi2 = $diff_saksi2->format('%y')." tahun ".$diff_saksi2->format('%m')." bulan ".$diff_saksi2->format('%d')." hari";

		$data = array(
			'nama_p1'     		=> $this->input->post('nama_p1', true),
			'nik_p1'      		=> $this->input->post('nik_p1', true),
			'umur_p1'      		=> $umur_p1,
			'agama_p1'      	=> $this->input->post('agama_p1', true),
			'pekerjaan_p1'     	=> $this->input->post('pekerjaan_p1', true),
			'pendidikan_p1'     => $this->input->post('pendidikan_p1', true),
			'alamat_p1'     	=> $this->input->post('alamat_p1', true),
			'nama_p2'     		=> $this->input->post('nama_p2', true),
			'nik_p2'      		=> $this->input->post('nik_p2', true),
			'umur_p2'      		=> $umur_p2,
			'agama_p2'      	=> $this->input->post('agama_p2', true),
			'pekerjaan_p2'     	=> $this->input->post('pekerjaan_p2', true),
			'pendidikan_p2'     => $this->input->post('pendidikan_p2', true),
			'alamat_p2'     	=> $this->input->post('alamat_p2', true),
			'tgl_nikah'      	=> $this->input->post('tgl_nikah', true),
			'tempat_nikah'      => $this->input->post('tempat_nikah', true),
			'nama_imam'      	=> $this->input->post('nama_imam', true),
			'tipe_wali'      	=> $this->input->post('tipe_wali', true),
			'nama_wali'      	=> $this->input->post('nama_wali', true),
			'nama_saksi1'      	=> $this->input->post('nama_saksi1', true),
			'umur_saksi1'      	=> $umur_saksi1,
			'agama_saksi1'      => $this->input->post('agama_saksi1', true),
			'nama_saksi2'      	=> $this->input->post('nama_saksi2', true),
			'umur_saksi2'      	=> $umur_saksi2,
			'agama_saksi2'      => $this->input->post('agama_saksi2', true),
			'maskawin'      	=> $this->input->post('maskawin', true),
			'alasan_tipe_wali'  => $this->input->post('alasan_tipe_wali', true),
			'alamat_akad'  		=> $this->input->post('alamat_akad', true),
			'status_p1'  		=> $this->input->post('status_p1', true),
			'status_p2'  		=> $this->input->post('status_p2', true),
			'alamat_selama_nikah'  		=> $this->input->post('alamat_selama_nikah', true),
			'jumlah_anak'  		=> $this->input->post('jumlah_anak', true),
			'nama_anak'  		=> $this->input->post('nama_anak', true),
			'updated_at'        => date('Y-m-d'),
			'tempat_lahir_p1'   => $this->input->post('tempat_lahir_p1', true),
			'tgl_lahir_p1'     	=> $this->input->post('tgl_lahir_p1', true),
			'tempat_lahir_p2'   => $this->input->post('tempat_lahir_p2', true),
			'tgl_lahir_p2'     	=> $this->input->post('tgl_lahir_p2', true),
			'jk_p1'     	=> $this->input->post('jk_p1', true),
			'jk_p2'     	=> $this->input->post('jk_p2', true),
			'tempat_lahir_saksi1'     	=> $this->input->post('tempat_lahir_saksi1', true),
			'tempat_lahir_saksi2'     	=> $this->input->post('tempat_lahir_saksi2', true),
			'tgl_lahir_saksi1'     	=> $this->input->post('tgl_lahir_saksi1', true),
			'tgl_lahir_saksi2'     	=> $this->input->post('tgl_lahir_saksi2', true),
		);

		$this->db->update('tbl_daftar_isbat', $data, array('id_isbat' => $id_isbat));

		$this->session->set_flashdata('pesan', 'Di Ubah !!!');
		redirect('pendaftaran/sidang_isbat');
	}

	public function delete_data_isbat($id)
	{
		$where = array('id_isbat' => $id);
		$row = $this->db->where('id_isbat', $id)->get('tbl_daftar_isbat')->row_array();

		$this->m_petugas->hapus_data($where, 'tbl_daftar_isbat');
		$this->session->set_flashdata('pesan', 'Di Hapus !!!');
		redirect('pendaftaran/sidang_isbat');
	}

	
}
