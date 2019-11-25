<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $data['_view'] = 'master/dospeg_list';
        $this->load->view('layouts/main',$data);
    } 
    
    public function jsondosen() {
        header('Content-Type: application/json');
        echo $this->Master_model->jsondosen();
	}
	
	public function jsonpegawai() {
        header('Content-Type: application/json');
        echo $this->Master_model->jsonpegawai();
    }

    public function read($id) 
    {
        $row = $this->Master_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'tempat_lahir' => $row->tempat_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'nip' => $row->nip,
		'nidn' => $row->nidn,
		'jk' => $row->jk,
		'golongan' => $row->golongan,
		'gol_tmt' => $row->gol_tmt,
		'jabatan' => $row->jabatan,
		'jabatan_tmt' => $row->jabatan_tmt,
		'masa_kerja_tahun' => $row->masa_kerja_tahun,
		'masa_kerja_bulan' => $row->masa_kerja_bulan,
		'pendidikan' => $row->pendidikan,
		'tahun_lulus' => $row->tahun_lulus,
		'tingkat_ijazah' => $row->tingkat_ijazah,
		'usia' => $row->usia,
		'catatan_mutasi' => $row->catatan_mutasi,
		'jenis_pd' => $row->jenis_pd,
		'userid' => $row->userid,
	    );
            $this->load->view('master/dospeg_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('master'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('master/create_action'),
			'id' => set_value('id'),
			'nama' => set_value('nama'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tgl_lahir' => set_value('tgl_lahir'),
			'nip' => set_value('nip'),
			'nidn' => set_value('nidn'),
			'jk' => set_value('jk'),
			'golongan' => set_value('golongan'),
			'gol_tmt' => set_value('gol_tmt'),
			'jabatan' => set_value('jabatan'),
			'jabatan_tmt' => set_value('jabatan_tmt'),
			'masa_kerja_tahun' => set_value('masa_kerja_tahun'),
			'masa_kerja_bulan' => set_value('masa_kerja_bulan'),
			'pendidikan' => set_value('pendidikan'),
			'tahun_lulus' => set_value('tahun_lulus'),
			'tingkat_ijazah' => set_value('tingkat_ijazah'),
			'usia' => set_value('usia'),
			'catatan_mutasi' => set_value('catatan_mutasi'),
			'jenis_pd' => set_value('jenis_pd'),
			'userid' => set_value('userid'),
			'password' => set_value('password'),
			'email' => set_value('email'),
			'nohp' => set_value('nohp'),
		);
		$data['_view'] = 'master/dospeg_form';
		$this->load->view('layouts/main',$data);
    }
    
    public function create_action() 
    {
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required');
		$this->_rules();
		
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
			//insert users
			$username = $this->input->post('nip',TRUE);
			$password = $this->input->post('password',TRUE);
			$email = $this->input->post('email',TRUE);
			$additional_data = array(
						'first_name' => $this->input->post('nama',TRUE),
						'company' => "Fahutan-Unipa",
						"phone" => $this->input->post('nohp',TRUE), 
						);
			$group = array('2'); 

			$this->ion_auth->register($username, $password, $email, $additional_data, $group);
			$q_users = $this->db->query("SELECT MAX(id) AS idterakhir FROM users")->row();
			$userid = $q_users->idterakhir;     
			
            $data = array(
				'nama' => $this->input->post('nama',TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
				'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
				'nip' => $this->input->post('nip',TRUE),
				'nidn' => $this->input->post('nidn',TRUE),
				'jk' => $this->input->post('jk',TRUE),
				'golongan' => $this->input->post('golongan',TRUE),
				'gol_tmt' => $this->input->post('gol_tmt',TRUE),
				'jabatan' => $this->input->post('jabatan',TRUE),
				'jabatan_tmt' => $this->input->post('jabatan_tmt',TRUE),
				'masa_kerja_tahun' => $this->input->post('masa_kerja_tahun',TRUE),
				'masa_kerja_bulan' => $this->input->post('masa_kerja_bulan',TRUE),
				'pendidikan' => $this->input->post('pendidikan',TRUE),
				'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
				'tingkat_ijazah' => $this->input->post('tingkat_ijazah',TRUE),
				'usia' => $this->input->post('usia',TRUE),
				'catatan_mutasi' => $this->input->post('catatan_mutasi',TRUE),
				'jenis_pd' => $this->input->post('jenis_pd',TRUE),
				'userid' => $userid,
	    	);
			
            $this->Master_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('master'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Master_model->get_by_id($id);
        $user = $this->Master_model->get_user($row->userid);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('master/update_action'),
				'id' => set_value('id', $row->id),
				'nama' => set_value('nama', $row->nama),
				'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
				'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
				'nip' => set_value('nip', $row->nip),
				'nidn' => set_value('nidn', $row->nidn),
				'jk' => set_value('jk', $row->jk),
				'golongan' => set_value('golongan', $row->golongan),
				'gol_tmt' => set_value('gol_tmt', $row->gol_tmt),
				'jabatan' => set_value('jabatan', $row->jabatan),
				'jabatan_tmt' => set_value('jabatan_tmt', $row->jabatan_tmt),
				'masa_kerja_tahun' => set_value('masa_kerja_tahun', $row->masa_kerja_tahun),
				'masa_kerja_bulan' => set_value('masa_kerja_bulan', $row->masa_kerja_bulan),
				'pendidikan' => set_value('pendidikan', $row->pendidikan),
				'tahun_lulus' => set_value('tahun_lulus', $row->tahun_lulus),
				'tingkat_ijazah' => set_value('tingkat_ijazah', $row->tingkat_ijazah),
				'usia' => set_value('usia', $row->usia),
				'catatan_mutasi' => set_value('catatan_mutasi', $row->catatan_mutasi),
				'jenis_pd' => set_value('jenis_pd', $row->jenis_pd),
				'userid' => set_value('nohp', $row->userid),
				'password' => set_value('password'),
				'email' => set_value('email', $user->email),
				'nohp' => set_value('nohp', $user->phone),
			);
			$data['_view'] = 'master/dospeg_form';
			$this->load->view('layouts/main',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('master'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $datadospeg = array(
				'nama' => $this->input->post('nama',TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
				'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
				'nip' => $this->input->post('nip',TRUE),
				'nidn' => $this->input->post('nidn',TRUE),
				'jk' => $this->input->post('jk',TRUE),
				'golongan' => $this->input->post('golongan',TRUE),
				'gol_tmt' => $this->input->post('gol_tmt',TRUE),
				'jabatan' => $this->input->post('jabatan',TRUE),
				'jabatan_tmt' => $this->input->post('jabatan_tmt',TRUE),
				'masa_kerja_tahun' => $this->input->post('masa_kerja_tahun',TRUE),
				'masa_kerja_bulan' => $this->input->post('masa_kerja_bulan',TRUE),
				'pendidikan' => $this->input->post('pendidikan',TRUE),
				'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
				'tingkat_ijazah' => $this->input->post('tingkat_ijazah',TRUE),
				'usia' => $this->input->post('usia',TRUE),
				'catatan_mutasi' => $this->input->post('catatan_mutasi',TRUE),
				'jenis_pd' => $this->input->post('jenis_pd',TRUE),
			);
			$this->Master_model->update($this->input->post('id', TRUE), $datadospeg);
						
			$id = $this->input->post('userid',TRUE);
			$datausers = array(
				'email' => $this->input->post('email',TRUE),
				'first_name' => $this->input->post('nama',TRUE),
				'phone' => $this->input->post('nohp',TRUE),
				'username' => $this->input->post('nip',TRUE),
				);

				if ($this->input->post('password'))
				{
					$data['password'] = $this->input->post('password',TRUE);
				}
			
			$this->ion_auth->update($id, $datausers);
			
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('master'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Master_model->get_by_id($id);

        if ($row) {
            $this->Master_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('master'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('master'));
        }
	}
	
	public function reset($id) 
    {
        $row = $this->Master_model->get_by_id($id);
        if ($row) {
			
			$datausers = array(
				'password' => 'unipa',
				);
			$this->ion_auth->update($row->userid, $datausers);
            $this->session->set_flashdata('message', 'Reset Password Success');
            redirect(site_url('master'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('master'));
        }
	}


    public function _rules() 
    {
		$this->form_validation->set_rules('nama', 'Nama Dosen/Pegawai', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP/NIDN/NIK', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('jenis_pd', 'Jenis User', 'trim|required');
		
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-20 12:52:56 */
/* http://harviacode.com */