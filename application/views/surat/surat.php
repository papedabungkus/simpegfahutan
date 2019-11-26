<link rel="stylesheet" href="<?php echo base_url().'assets/autocomplete/css/jquery-ui.css'?>">
        <section class="page container">
            <div class="row">
                <div class="span4">
                    <div class="blockoff-right">
                        <form class="form-inline" action="<?php echo base_url('surat'); ?>" method="POST">
                            <p>Pilih Jenis Surat Yang Akan Dibuat</p>
                            <div class="input-prepend">
                                <select name="cmbSurat">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <?php foreach ($datasurat as $res1) { ?>
                                    <option value="<?php echo $res1['idsurat'];?>" <?php if ($idsurat == $res1['idsurat']) echo 'selected' ; ?>><?php echo $res1['nama_surat'];?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="input-prepend">
                                <br>
                                <button name="btnCari" type="submit" class="btn btn-success">
                                <i class="icon-forward"></i>
                                    Selanjutnya
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="span8">
                    <?php if(isset($_POST['btnCari']) && $_POST['cmbSurat']=='1') { ?>
                    <div class="blockoff-right">
                        <form target="_BLANK" class="form-inline" action="<?php echo base_url('surat/cetaksurattugasbelajar'); ?>" method="POST">
                            <h4>Parameter Isian Surat Tugas Belajar</h4>
                            <p>Nomor Surat</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="nomorsurat" class="span7" type="text" value="&nbsp;&nbsp;&nbsp;&nbsp;/UN42.6/KP/2019">
                            </div>
                            <p>Nama Dosen</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="txtDosen" class="span7" type="text" id="txtDosen" placeholder="Ketik NIP/Nama Dosen">
                            </div>
                            <p>Program Pendidikan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-list"></i></span>
                                <input name="pendidikan" class="span7" type="text" placeholder="Doktor/Magister/dll">
                            </div>
                            <p>Prodi/Kampus</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-file"></i></span>
                                <input name="prodikampus" class="span7" type="text" placeholder="Ilmu Kehutanan UGM">
                            </div>
                            <p>Lama Studi</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                                <input name="lamastudi" class="span7" type="text" placeholder="Agustus 2016 s.d Agustus 2020">
                            </div>
                            <p>Nama Dekan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="namadekan" class="span7" type="text"  id="txtDospeg"  value="197406032001121001 - Dr. Joni Marwa, S.Hut, M.Si">
                            </div>
                            <div class="input-prepend">
                                <br>
                                <button name="btnCetak" type="submit" class="btn btn-success">
                                <i class="icon-print"></i>
                                    Cetak
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php } elseif(isset($_POST['btnCari']) && $_POST['cmbSurat']=='2') {?>
                        <div class="blockoff-right">
                        <form target="_BLANK" class="form-inline" action="<?php echo base_url('surat/cetaksurataktifkuliah'); ?>" method="POST">
                            <h4>Parameter Isian Surat Keterangan Aktif Kuliah</h4>
                            <p>Nomor Surat</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="nomorsurat" class="span7" type="text" value="&nbsp;&nbsp;&nbsp;&nbsp;/UN42.6.5.1/KM/2019">
                            </div>
                            <p>Nama Pembuat Keterangan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="namatu" class="span7" type="text"  id="txtDospeg" value="196306191987031004 - Nicholas Aidore, S.Pi">
                            </div>
                            <p>Jabatan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="jabatan" class="span7" type="text" id="jabatan">
                            </div>
                            <p>Nama/NIM Mahasiswa</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="mahasiswa" class="span7" type="text" id="mahasiswa" placeholder="Ketik NIM/Nama Mahasiswa">
                            </div>
                            <p>Semester / Tahun Akademik</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-time"></i></span>
                                <select class="span3" name="semester">
                                    <option value="0">-- Pilih Salah Satu --</option>
                                    <option value="Gasal">Gasal</option>
                                    <option value="Genap">Genap</option>
                                </select>
                            </div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                                <input name="tahunakademik" class="span4" type="text" value="2019/2020">
                            </div>
                            <p>&nbsp;</p>
                            <div class="input-prepend">
                                <button name="btnCetak" type="submit" class="btn btn-success">
                                <i class="icon-print"></i>
                                    Cetak
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php } elseif(isset($_POST['btnCari']) && $_POST['cmbSurat']=='3') {?>
                        <div class="blockoff-right">
                        <form target="_BLANK" class="form-inline" action="<?php echo base_url('surat/cetaksurataktiftugas'); ?>" method="POST">
                            <h4>Parameter Isian Surat Keterangan Aktif Melaksanakan Tugas</h4>
                            <p>Nomor Surat</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="nomorsurat" class="span7" type="text" value="&nbsp;&nbsp;&nbsp;&nbsp;/UN42.6/KP/2019">
                            </div>
                            <p>Nama Pembuat Keterangan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="namatu" class="span7" type="text" id="txtDospeg" placeholder="Ketik NIP/Nama Pembuat Keterangan">
                            </div>
                            <p>Jabatan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="jabatan" class="span7" type="text" value="DEKAN FAKULTAS KEHUTANAN">
                            </div>
                            <p>Dengan ini menerangkan bahwa staf dosen Fahutan UNIPA yang namanya tercantum di bawah ini sedang aktif melaksanakan tugas mengajar.  </p>
                            
                            <p>Nama Dosen</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="txtDosen" class="span7" type="text" id="txtDosen" placeholder="Ketik NIP/Nama Dosen">
                            </div>
                            <p>&nbsp;</p>
                            <div class="input-prepend">
                                <button name="btnCetak" type="submit" class="btn btn-success">
                                <i class="icon-print"></i>
                                    Cetak
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php } elseif(isset($_POST['btnCari']) && $_POST['cmbSurat']=='4') { ?>
                    <div class="blockoff-right">
                        <form target="_BLANK" class="form-inline" action="<?php echo base_url('surat/cetakusulankenaikanpangkatfungsional'); ?>" method="POST">
                            <h4>Parameter Isian Surat Usulan Kenaikan Pangkat Jabatan Fungsional</h4>
                            <p>Nomor Surat</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="nomorsurat" class="span7" type="text" value="&nbsp;&nbsp;&nbsp;&nbsp;/UN42.6/KP/2019">
                            </div>
                            <p>Lampiran</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="lampiran" class="span7" type="text" value="1 (Satu) Berkas">
                            </div>
                            <p>Nama Yang Diusulkan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="namaY" class="span7" type="text" id="txtDosen" placeholder="Ketik NIP/Nama Dosen">
                            </div>
                            <p>Jabatan Yang Diusulkan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="jabatanusul" class="span7" type="text" placeholder="Tuliskan jabatan yang diusulkan">
                            </div>
                            <p>Jumlah Nilai KUM</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="jumlahKUM" class="span7" type="number" placeholder="Tuliskan jumlah nilai KUM">
                            </div>
                            
                            <p>Nama Tanda Tangan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="namadekan" class="span7" id="txtDospeg" type="text" value="">
                            </div>
                            <p>Jabatan</p>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input name="jabatan" class="span7" type="text" value="Dekan" placeholder="Tuliskan Jabatan Yang Menandatangani Surat">
                            </div>
                            <div class="input-prepend">
                                <br>
                                <button name="btnCetak" type="submit" class="btn btn-success">
                                <i class="icon-print"></i>
                                    Cetak
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <script src="<?php echo base_url().'assets/autocomplete/js/jquery-ui.js'?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mahasiswa").autocomplete({
                source: "<?php echo site_url('surat/get_autocomplete_mahasiswa/?');?>"
                });

                $("#txtDosen").autocomplete({
                source: "<?php echo site_url('surat/get_autocomplete_dosen/?');?>"
                });
                $("#txtDospeg").autocomplete({
                source: "<?php echo site_url('surat/get_autocomplete_dospeg/?');?>"
                });
                $("#jabatan").autocomplete({
                source: "<?php echo site_url('surat/get_autocomplete_jabatan/?');?>"
                });
            });
        </script>