<?php
class Surat extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth','refresh');
        }
    }

    function index()
    {
        if(isset($_POST['btnCari'])){
            $idsurat = $_POST['cmbSurat'];
        } else {
            $idsurat = '';
        }
        $querysurat = $this->db->query("SELECT * FROM surat")->result_array();
        $querydosen = $this->db->query("SELECT * FROM dospeg")->result_array();
        $querymahasiswa = $this->db->query("SELECT * FROM mahasiswa")->result_array();
        $data['idsurat'] = $idsurat;
        $data['datasurat'] = $querysurat;
        $data['datadosen'] = $querydosen;
        $data['datamahasiswa'] = $querymahasiswa;
        $data['_view'] = 'surat/surat';
        $this->load->view('layouts/main',$data);
    }

    function get_autocomplete_mahasiswa(){
        if (isset($_GET['term'])) {
            $result = $this->Surat_model->search_mahasiswa($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nim." - ".$row->nama;
                echo json_encode($arr_result);
            }
        }
    }

    function get_autocomplete_dosen(){
        if (isset($_GET['term'])) {
            $result = $this->Surat_model->search_dosen($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nip." - ".$row->nama;
                echo json_encode($arr_result);
            }
        }
    }

    function get_autocomplete_dospeg(){
        if (isset($_GET['term'])) {
            $result = $this->Surat_model->search_dospeg($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nip." - ".$row->nama;
                echo json_encode($arr_result);
            }
        }
    }

    function cetaksurattugasbelajar() 
    {
        if(isset($_POST['btnCetak'])){
            $nipdosen = substr($_POST['txtDosen'],0,18);
            $namadosen = $this->db->query("SELECT nama FROM dospeg WHERE nip=$nipdosen")->row()->nama;
            $pendidikan = $_POST['pendidikan'];
            $prodikampus = $_POST['prodikampus'];
            $lamastudi = $_POST['lamastudi'];
            $namadekan = $_POST['namadekan'];
            $nipdekan = $_POST['nipdekan'];
        }
        $data = array(
            'nomorsurat' => $_POST['nomorsurat'],
            'namadosen' => $namadosen,
            'nipdosen' => $nipdosen,
            'pendidikan' => $pendidikan,
            'prodikampus' => $prodikampus,
            'lamastudi' => $lamastudi,
            'namadekan' => $namadekan,
            'nipdekan' => $nipdekan,
            'tanggalsurat' => tgl_indo(date('Y-m-d'))
        );
        $this->load->view('surat/tugas_belajar',$data);
    }

    function cetaksurataktifkuliah()
    {
        $namamahasiswa = substr($_POST['mahasiswa'],12);
        $nimmahasiswa = substr($_POST['mahasiswa'],0,9);
        $prodix = $this->Surat_model->get_mahasiswa($nimmahasiswa);
        $prodi = $prodix['prodi'];
        $fakultasx = $this->Surat_model->get_mahasiswa($nimmahasiswa);
        $fakultas = $fakultasx['fakultas'];
        if(isset($_POST['btnCetak'])){
            $data = array(
                'nomorsurat' => $_POST['nomorsurat'],
                'namatu' => $_POST['namatu'],
                'niptu' => $_POST['niptu'],
                'pangkatgolongan' => $_POST['pangkatgolongan'],
                'jabatan' => $_POST['jabatan'],
                'namamahasiswa' => $namamahasiswa,
                'nimmahasiswa' => $nimmahasiswa,
                'prodi' => $prodi,
                'fakultas' => $fakultas,
                'semester' => $_POST['semester'],
                'tahunakademik' => $_POST['tahunakademik'],
                'tanggalsurat' => tgl_indo(date('Y-m-d'))
            );
        }
        $this->load->view('surat/aktif_kuliah',$data);
    }

    function cetaksurataktiftugas()
    {
        $nipdosen = substr($_POST['txtDosen'],0,18);
        $niptu = substr($_POST['namatu'],0,18);
        $golongantu = $this->db->query("SELECT golongan FROM dospeg WHERE nip=$niptu")->row()->golongan;
        $golongandosen = $this->db->query("SELECT golongan FROM dospeg WHERE nip=$nipdosen")->row()->golongan;
        $data = array(
            'nomorsurat' => $_POST['nomorsurat'],
            'namatu' => $this->db->query("SELECT nama FROM dospeg WHERE nip=$niptu")->row()->nama,
            'niptu' => $niptu,
            'golongantu' => $golongantu,
            'pangkattu' => $this->db->query("SELECT pangkat FROM pangkatgol WHERE golongan='$golongantu'")->row()->pangkat,
            'jabatan' => $_POST['jabatan'],
            'namadosen' => $this->db->query("SELECT nama FROM dospeg WHERE nip=$nipdosen")->row()->nama,
            'nipdosen' => $nipdosen,
            'golongandosen' => $golongandosen,
            'pangkatdosen' => $this->db->query("SELECT pangkat FROM pangkatgol WHERE golongan='$golongandosen'")->row()->pangkat,
            'tanggalsurat' => tgl_indo(date('Y-m-d'))
        );
        $this->load->view('surat/aktif_tugas',$data);

    }

    function cetakusulankenaikanpangkatfungsional() 
    {
        if(isset($_POST['btnCetak'])){
            $nipY = substr($_POST['namaY'],0,18);
            $namaY = $this->db->query("SELECT nama FROM dospeg WHERE nip=$nipY")->row()->nama;
            $jabatanY = $this->db->query("SELECT jabatan FROM dospeg WHERE nip=$nipY")->row()->jabatan;
            $golY = $this->db->query("SELECT golongan FROM dospeg WHERE nip=$nipY")->row()->golongan;
            $jabatanusul = $_POST['jabatanusul'];
            $jumlahKUM = $_POST['jumlahKUM'];
            $nipdekan = substr($_POST['namadekan'],0,18);
            $namadekan = $this->db->query("SELECT nama FROM dospeg WHERE nip=$nipdekan")->row()->nama;
            $jabatan = $_POST['jabatan'];
        }
        $data = array(
            'nomorsurat' => $_POST['nomorsurat'],
            'lampiran' => $_POST['lampiran'],
            'nipY' => $nipY,
            'namaY' => $namaY,
            'jabatanY' => $jabatanY,
            'golY' => $golY,
            'pangkatY' => $this->db->query("SELECT pangkat FROM pangkatgol WHERE golongan='$golY'")->row()->pangkat,
            'jabatanusul' => $jabatanusul,
            'jumlahKUM' => $jumlahKUM,
            'namadekan' => $namadekan,
            'nipdekan' => $nipdekan,
            'jabatan' => $jabatan,
            'tanggalsurat' => tgl_indo(date('Y-m-d'))
        );
        $this->load->view('surat/naik_pangkat_fungsional',$data);
    }
}
