<?php
class Surat_model extends CI_Model{
 
    function search_mahasiswa($term){
        $this->db->like('nim',$term ,'both');
        $this->db->or_like('nama',$term,'both');
        $this->db->order_by('nim', 'ASC');
        $this->db->limit(10);
        return $this->db->get('mahasiswa')->result();
    }

    function search_dosen($term){
        $this->db->like('nip',$term ,'both');
        $this->db->or_like('nama',$term,'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get_where('dospeg',array('jenis_pd'=>'dosen'))->result();
    }

    function search_dospeg($term){
        $this->db->like('nip',$term ,'both');
        $this->db->or_like('nama',$term,'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('dospeg')->result();
    }

    function get_mahasiswa($nim){
        return $this->db->get_where('mahasiswa',array('nim'=>$nim))->row_array(); 
    }
 
}