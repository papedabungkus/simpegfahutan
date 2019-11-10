<?php
class Master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth','refresh');
        }
    }

    function index()
    {
        $q_dosen = $this->db->query("SELECT * FROM dospeg WHERE jenis_pd='dosen'")->result_array();
        $data['dosen'] = $q_dosen;
        $data['_view'] = 'master';
        $this->load->view('layouts/main',$data);
    }
}
