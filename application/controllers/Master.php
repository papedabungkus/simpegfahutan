<?php
class Master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth','refresh');
        }
    }

    function index()
    {
        $q_dosen = $this->db->query("SELECT * FROM dospeg WHERE jenis_pd='dosen'")->result_array();
        $q_pegawai = $this->db->query("SELECT * FROM dospeg WHERE jenis_pd='pegawai'")->result_array();
        $data['dosen'] = $q_dosen;
        $data['pegawai'] = $q_pegawai;
        $data['_view'] = 'master';
        $this->load->view('layouts/main',$data);
    }

    function delete()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        $dospeg = $this->db->get_where('dospeg',array('id'=>$id))->row_array();
        if ($id <> '') {
            $this->db->delete('dospeg',array('id'=>$id));
            echo 'Data Dosen/Pegawai dengan nama = <b>'.$dospeg['nama'].'</b> berhasil dihapus';
        }
    }
}
