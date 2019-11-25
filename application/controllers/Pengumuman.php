<?php
class Pengumuman extends CI_Controller{
    var $insert_id;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth','refresh');
        }    
        
    }

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('pengumuman/index?');
        $config['total_rows'] = $this->Pengumuman_model->get_all_pengumuman_count();
        $this->pagination->initialize($config);

        $data['pengumuman'] = $this->Pengumuman_model->get_all_pengumuman($params);
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
            $kategori = $_POST['kategori'];
            $dataupdate = array('judul'=>$judulpengumuman, 'kategori'=>$kategori);
            $this->db->where('id',$lastid->id);
            $this->db->update('pengumuman',$dataupdate);
        }
        redirect('pengumuman/index');
    }

    function upload()
    {
        $config['upload_path']   = FCPATH.'/uploads/pengumuman/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|jpeg|docx';
        $config['max_size']     = '0';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
            $tglpengumuman = date('Y-m-d H:i:s');
            $nama=$this->upload->data('file_name');
            $url = 'uploads/pengumuman/'.$nama;
            $this->db->insert('pengumuman',array('datetime'=>$tglpengumuman,'url'=>$url));
            $this->insert_id = $this->db->insert_id();
        }   
    }
 
    function delete()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        if ($id <> '') {
            $this->db->delete('pengumuman',array('id'=>$id));
            echo 'data dengan id = '.$id.' berhasil dihapus';
        }
        
    }

    
}