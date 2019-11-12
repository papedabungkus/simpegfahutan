<style>
a:link { color:#047a2c;} 
</style>
        <section class="page container">
            <div class="row">
                <div class="span3">
                    <div class="blockoff-right">
                        <ul id="person-list" class="nav nav-list">
                                <li>
                                    <a href="#Person-1">
                                        <i class="icon-chevron-right pull-right"></i>
                                        DUK Dosen
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-2">
                                        <i class="icon-chevron-right pull-right"></i>
                                        DUK Pegawai
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-3">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Peraturan
                                    </a>
                                </li> 
                            
                            <li>
                                <a href="#Person-4">
                                    <i class="icon-chevron-right pull-right"></i>
                                    Persyaratan Administrasi
                                </a>
                            </li>                               
                        </ul>
                    </div>
                </div>
                <div class="span13">
                
                    <div id="Person-1" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>DUK Dosen Fahutan Unipa (Keadaan Januari 2019)</h5>
                        </div>
                        <div class="box-hide-me box-content collapse in">
                            <?php foreach($gol_dosen AS $res_gol_dosen){ ?>
                                <legend class="lead">
                                Pegawai Negeri Sipil Golongan <?=$res_gol_dosen['golongan'];?>
                                </legend>
                                <table class="table table-hover tablesorter">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Gol.</th>
                                            <th>Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $goldosen = $res_gol_dosen['golongan'];
                                $q_dosen = $this->db->query("SELECT * FROM dospeg WHERE golongan='$goldosen' AND jenis_pd='dosen' ORDER BY MID(nip,9,6) ASC")->result_array();
                                $no=1;
                                foreach($q_dosen as $h_dosen){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $h_dosen['nama']; ?></td>
                                    <td><?php echo $h_dosen['nip']; ?></td>
                                    <td><?php echo $h_dosen['jk']; ?></td>
                                    <td><?php echo $h_dosen['golongan']; ?></td>
                                    <td><?php echo $h_dosen['jabatan']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            <?php } ?>
                        </div>
                    </div>
                
                    <div id="Person-2" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>DUK Pegawai Fahutan Unipa (Keadaan Januari 2019)</h5>
                        </div>
                        <div class="box-hide-me box-content collapse in">
                            <?php foreach($gol_pegawai AS $res_gol_pegawai){ ?>
                                <legend class="lead">
                                Pegawai Negeri Sipil Golongan <?=$res_gol_pegawai['golongan'];?>
                                </legend>
                                <table class="table table-hover tablesorter">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Gol.</th>
                                            <th>Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $golpegawai = $res_gol_pegawai['golongan'];
                                $q_pegawai = $this->db->query("SELECT * FROM dospeg WHERE golongan='$golpegawai' AND jenis_pd='pegawai' ORDER BY MID(nip,9,6) ASC")->result_array();
                                $no=1;
                                foreach($q_pegawai as $h_pegawai){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $h_pegawai['nama']; ?></td>
                                    <td><?php echo $h_pegawai['nip']; ?></td>
                                    <td><?php echo $h_pegawai['jk']; ?></td>
                                    <td><?php echo $h_pegawai['golongan']; ?></td>
                                    <td><?php echo $h_pegawai['jabatan']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            <?php } ?>
                        </div>
                    </div>
                
                    <div id="Person-3" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Peraturan</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        
                        </div>

                    </div>     
                    <div id="Person-4" class="box">
                        <div class="box">
                            <div class="box-header">
                                <i class="icon-sign-blank"></i>
                                <h5>Persyaratan Administrasi</h5>
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Naik Pangkat Golongan:
                                </legend>
                                <ol type="1">
                                    <li>Fotocopy SK Pangkat Terakhir</li>
                                    <li>Asli SKP 2 Tahun Terakhir</li>
                                    <li>Fotocopy NIP Baru</li>
                                    <li>Fotocopy SK Jabatan Struktural terakhir</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Naik Pangkat Pindah Golongan:
                                </legend>
                                <ol type="1">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Naik Pangkat Fungsional Pertama:
                                </legend>
                                <ol type="1">
                                    <li>Daftar usul penetapan angka kredit jabatan fungsional dosen</li>
                                    <li>Surat pernyataan telah melaksanakan kegiatan pendidikan dan pengajaran beserta bukti-bukti fisik</li>
                                    <li>Surat pernyataan telah melaksanakan kegiatan penelitian berserta bukti-bukti fisik</li>
                                    <li>Surat pernyataan telah melaksanakan kegiatan pengabdian pada masyarakat beserta bukti-bukti fisik</li>
                                    <li>Surat pernyataan telah melaksanakan kegiatan penunjang Tri Dharma Perguruan Tinggi beserta bukti-bukti fisik</li>
                                    <li>Surat keabsahan karya ilmiah</li>
                                    <li>Surat validasi dan Penilaian Karya Ilmiah</li>
                                    <li>Foto copy ijasah terakhir yang telah dilegalisir</li>
                                    <li>Foto copy Surat Tanda Tamat Pendidikan dan Pelatihan (STTPP) yang telah dilegalisir</li>
                                    <li>Foto copy SK CPNS dan PNS</li>
                                    <li>SKP asli 2 Tahun Terakhir</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Naik Pangkat Fungsional Berikutnya:
                                </legend>
                                <ol type="1">
                                    <li>Daftar Usul Penetapan Angka Kredit (DUPAK)</li>
                                    <li>Validasi dan Penilaian Karya Ilmiah</li>
                                    <li>Fotocopy SK Pangkat Terakhir</li>
                                    <li>Fotocopy SK Fungsional Terakhir</li>
                                    <li>Fotocopy Karpeg</li>
                                    <li>Fotocopy NIP Baru</li>
                                    <li>SKP 2 Tahun Terakhir</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Usulan Naik Pangkat Pilihan:
                                </legend>
                                <ol type="1">
                                    <li>Fotocopy SK Pangkat Terakhir</li>
                                    <li>Asli SKP 2 Tahun Terakhir</li>
                                    <li>Fotocopy SK Penetapan NIP Baru</li>
                                    <li>Fotocopy SK Fungsional Terakhir Dosen</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Usul Pensiun:
                                </legend>
                                <ol type="1">
                                    <li>Foto copy SK. Pengangkatan Pertama (SK. CPNS)</li>
                                    <li>Foto copy SK. Pengangkatan Pegawai Negeri Sipil</li>
                                    <li>Foto copy SK. Pangkat Terakhir</li>
                                    <li>Foto copy Karpeg</li>
                                    <li>Foto copy SK. Penetapan NIP Baru</li>
                                    <li>ASLI  SKP 2 Tahun terakhir</li>
                                    <li>Foto copy Berkala terakhir</li>
                                    <li>Foto Akte Perkawinan dari Pencatatan Sipil</li>
                                    <li>Fotocopy Akte Kelahiran anak-anak</li>
                                    <li>Fotocopy KTP terbaru legalisir CAPIL</li>
                                    <li>Pas foto Suami/istri berukuran 4x6 sebanyak 5 lembar dan 3x4 cm sebanyak 5 lembar</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Pengaktifan Kembali Tugas Mengajar:
                                </legend>
                                <ol type="1">
                                    <li>Surat Pengembalian Peserta Tugas Belajar dari perguruan tinggi asal studi</li>
                                    <li>Fotocopy ijazah </li>
                                    <li>Transkrip</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Tugas Belajar:
                                </legend>
                                <ol type="1">
                                    <li>Surat keterangan sehat jasmani dan rohani dari Dokter</li>
                                    <li>Fotocopy Kartu PNS/ Karpeg</li>
                                    <li>Fotocopy SK Calon Pegawai Negeri Sipil</li>
                                    <li>Fotocoy SK Pegawai Negeri Sipil </li>
                                    <li>SKP 2 (dua) tahun terakhir </li>
                                    <li>KP4</li>
                                    <li>Fotocopy Akta nikah</li>
                                    <li>SK Pangkat Terakhir</li>
                                    <li>Surat Rekomendasi dari atasan langsung (Rektor / Dekan)</li>
                                    <li>Surat Perjanjian Tugas Belajar</li>
                                    <li>Surat rekomendasi kelulusan dari lembaga pendidikan tempat pelaksanaan tugas belajar</li>
                                    <li>Surat Jaminan Pembiayaan tugas belajar</li>
                                    <li>Surat keterangan dari pimpinan unit kerja mengenai bidang studi yang akan ditempuh mempunyai hubungan atau sesuai dengan tugas pekerjaannya</li>
                                    <li>Surat pernyataan : 
                                        <ol type="a">
                                            <li>Tidak sedang menjalankan cuti di luar tanggungan Negara</li>
                                            <li>Tidak sedang mengajukan upaya hukum keberatan ke badan pertimbangan kepegawaian (BAPEK)</li>
                                            <li>Tidak sedang / dalam proses penjatuhan hukuman disiplin tingkat sedang atau tingkat berat</li>
                                            <li>Tidak sedang menjalani hukuman disiplin tingkat sedang atau tingkat berat</li>
                                            <li>Tidak sedang dalam proses petrkara pidana, baik tindak pidana kejahatan maupun pelanggaran </li>  
                                            <li>Tidak sedang melaksanakan kewajiban ikatan dinas</li>
                                            <li>Tidak sedang dalam melaksanakan pendidikan dan pelatihan penjenjangan</li>
                                            <li>Tidak pernah gagal dalam tugas belajar yang disebabkan oleh kelalaiannya</li>
                                            <li>Tidak pernah dibatalkan mengikuti tugas belajar karena kesalahannya</li>
                                        </ol>
                                    </li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                            <div class="box-hide-me box-content collapse in">
                                <legend class="lead">
                                    Persyaratan Administrasi Usulan KARIS/KARSU:
                                </legend>
                                <ol type="1">
                                    <li>Laporan perkawinan masing-masing dalam rangkap 2(dua)</li>
                                    <li>Salinan sah surat nikah / akta perkawinan masing-masing dalam rangkap 2(dua)</li>
                                    <li>Pas foto istri/suami ukuran 3 X 4 cm, warna hitam putih masing-masing sebanyak 2(dua) lembar</li>
                                </ol>
                                Masing-masing 4 (empat) rangkap
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        
    
            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        
        <script type="text/javascript">
        $(function() {
            $('#person-list.nav > li > a').click(function(e){
                if($(this).attr('id') == "view-all"){
                    $('div[id*="Person-"]').fadeIn('fast');
                }else{
                    var aRef = $(this);
                    var tablesToHide = $('div[id*="Person-"]:visible').length > 1
                            ? $('div[id*="Person-"]:visible') : $($('#person-list > li[class="active"] > a').attr('href'));

                    tablesToHide.hide();
                    $(aRef.attr('href')).fadeIn('fast');
                }
                $('#person-list > li[class="active"]').removeClass('active');
                $(this).parent().addClass('active');
                e.preventDefault();
            });

            $(function(){
                $('table').tablesorter();
                $("[rel=tooltip]").tooltip();
            });
        });
        </script>