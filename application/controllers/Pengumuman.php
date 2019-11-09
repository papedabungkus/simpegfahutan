<?php
class Pengumuman extends CI_Controller{
    var $insert_id;
    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth','refresh');
        }    
        
    }

    function index()
    {
        $data['_view'] = 'pengumuman';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {
        if(isset($_POST['btnSave'])){
            $lastid = $this->db->order_by('id',"desc")
                            ->limit(1)
                            ->get('pengumuman')
                            ->row();
            $judulpengumuman = $_POST['judulpengumuman'];
            $dataupdate = array('judul'=>$judulpengumuman);
            $this->db->where('id',$lastid->id);
            $this->db->update('pengumuman',$dataupdate);
        }
        redirect('pengumuman/index');
    }

    function upload()
    {
        $config['upload_path']   = FCPATH.'/uploads/pengumuman/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|jpeg|docx';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
            $judulpengumuman = $_POST['judulpengumuman'];
            $tglpengumuman = date('Y-m-d H:i:s');
            $nama=$this->upload->data('file_name');
            $url = 'uploads/pengumuman/'.$nama;
            $this->db->insert('pengumuman',array('datetime'=>$tglpengumuman,'url'=>$url));
            $this->insert_id = $this->db->insert_id();
        }   
    }
}