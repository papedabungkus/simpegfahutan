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
        $q_dosen = $this->db->query("SELECT * FROM dospeg WHERE jenis_pd='dosen' ORDER BY golongan DESC")->result_array();
        $q_pegawai = $this->db->query("SELECT * FROM dospeg WHERE jenis_pd='pegawai' ORDER BY golongan DESC")->result_array();
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
            echo 'Data Dosen/Pegawai dengan nama = '.$dospeg['nama'].' berhasil dihapus';
        }
    }

    function detail()
    {
        if (!empty($this->input->post('ids'))) { 
        $detail=$this->Master_model->get_dospeg($this->input->post('ids')); 
        if($detail['jk']=="L"){ $jk="Laki-laki";} elseif($detail['jk']=="P"){ $jk="Perempuan";} else { $jk = "";}
        echo "<table  class='table table-bordered'>
                <tr>
                    <td>Nama</td><td>: ".$detail['nama']."</td>
                </tr>
                <tr>
                <td>Tempat Tgl. Lahir</td><td> : ".$detail['tempat_lahir'].", ".tgl_indo($detail['tgl_lahir'])."</td>
                </tr>
                <tr>
                    <td>NIP</td><td> : ".$detail['nip']."</td>
                </tr>
                <tr>
                    <td>NIDN</td><td> : ".$detail['nidn']."</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td><td> : ".$jk."</td>
                </tr>
                <tr>
                    <td>Golongan</td><td> : ".$detail['golongan']."</td>
                </tr>
                <tr>
                    <td>Gol TMT</td><td> : ".tgl_indo($detail['gol_tmt'])."</td>
                </tr>
                <tr>
                    <td>Jabatan</td><td> : ".$detail['jabatan']."</td>
                </tr>
                <tr>
                    <td>Jabatan TMT</td><td> : ".$detail['jabatan_tmt']."</td>
                </tr>
                <tr>
                    <td>Masa Kerja Tahun</td><td> : ".$detail['masa_kerja_tahun']." tahun</td>
                </tr>
                <tr>
                    <td>Masa Kerja Bulan</td><td> : ".$detail['masa_kerja_bulan']." bulan</td>
                </tr>
                <tr>
                    <td>Pendidikan</td><td> : ".$detail['pendidikan']."</td>
                </tr>
                <tr>
                    <td>Tahun Lulus</td><td> : ".$detail['tahun_lulus']."</td>
                </tr>
                <tr>
                    <td>Tingkat Ijazah</td><td> : ".$detail['tingkat_ijazah']."</td>
                </tr>
                <tr>
                    <td>Usia</td><td> : ".$detail['usia']." tahun</td>
                </tr>
                <tr>
                    <td>Catatan Mutasi</td><td> : ".$detail['catatan_mutasi']."</td>
                </tr>     
            </table>";
        } 
    }

    function ubah(){
        $id = $this->input->post('id');
        $data = array(
            'nama'		=> $this->input->post('nama'),
        );
        $this->Master_model->ubah($data,$id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin');
    }
}
