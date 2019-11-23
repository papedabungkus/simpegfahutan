<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_model extends CI_Model
{

    public $table = 'dospeg';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function jsondosen() {
        $this->datatables->select('id,nama,nip,nidn,ttl,jk,golongan,jabatan');
        $this->datatables->from('v_dospeg');
        $this->datatables->where('jenis_pd','dosen');
        //add this line for join
        //$this->datatables->join('table2', 'dospeg.field = table2.field');
        $this->datatables->add_column('action',anchor(site_url('master/reset/$1'),'<i class="btn-icon-only icon-key"> </i>',array('onclick'=>'javasciprt: return confirm(\'Anda yakin akan mereset password ?\')','class'=>'btn btn-small btn-default'))." ".anchor(site_url('master/update/$1'),'<i class="btn-icon-only icon-pencil"> </i>',array('class'=>'btn btn-small btn-info'))." ".anchor(site_url('master/delete/$1'),'<i class="btn-icon-only icon-remove"> </i>',array('onclick'=>'javasciprt: return confirm(\'Are You Sure ?\')','class'=>'btn btn-small btn-danger')), 'id');
        return $this->datatables->generate();
    }

    function jsonpegawai() {
        $this->datatables->select('id,nama,nip,nidn,ttl,jk,golongan,jabatan');
        $this->datatables->from('v_dospeg');
        $this->datatables->where('jenis_pd','pegawai');
        $this->datatables->add_column('action',anchor(site_url('master/reset/$1'),'<i class="btn-icon-only icon-key"> </i>',array('onclick'=>'javasciprt: return confirm(\'Anda yakin akan mereset password ?\')','class'=>'btn btn-small btn-default'))." ".anchor(site_url('master/update/$1'),'<i class="btn-icon-only icon-pencil"> </i>',array('class'=>'btn btn-small btn-info'))." ".anchor(site_url('master/delete/$1'),'<i class="btn-icon-only icon-remove"> </i>',array('onclick'=>'javasciprt: return confirm(\'Are You Sure ?\')','class'=>'btn btn-small btn-danger')), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_user($userid)
    {
        $this->db->where('id', $userid);
        return $this->db->get('users')->row();
    }

    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('tgl_lahir', $q);
        $this->db->or_like('nip', $q);
        $this->db->or_like('nidn', $q);
        $this->db->or_like('jk', $q);
        $this->db->or_like('golongan', $q);
        $this->db->or_like('gol_tmt', $q);
        $this->db->or_like('jabatan', $q);
        $this->db->or_like('jabatan_tmt', $q);
        $this->db->or_like('masa_kerja_tahun', $q);
        $this->db->or_like('masa_kerja_bulan', $q);
        $this->db->or_like('pendidikan', $q);
        $this->db->or_like('tahun_lulus', $q);
        $this->db->or_like('tingkat_ijazah', $q);
        $this->db->or_like('usia', $q);
        $this->db->or_like('catatan_mutasi', $q);
        $this->db->or_like('jenis_pd', $q);
        $this->db->or_like('userid', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('tgl_lahir', $q);
        $this->db->or_like('nip', $q);
        $this->db->or_like('nidn', $q);
        $this->db->or_like('jk', $q);
        $this->db->or_like('golongan', $q);
        $this->db->or_like('gol_tmt', $q);
        $this->db->or_like('jabatan', $q);
        $this->db->or_like('jabatan_tmt', $q);
        $this->db->or_like('masa_kerja_tahun', $q);
        $this->db->or_like('masa_kerja_bulan', $q);
        $this->db->or_like('pendidikan', $q);
        $this->db->or_like('tahun_lulus', $q);
        $this->db->or_like('tingkat_ijazah', $q);
        $this->db->or_like('usia', $q);
        $this->db->or_like('catatan_mutasi', $q);
        $this->db->or_like('jenis_pd', $q);
        $this->db->or_like('userid', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }


}

/* End of file Master_model.php */
/* Location: ./application/models/Master_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-20 12:52:56 */
/* http://harviacode.com */