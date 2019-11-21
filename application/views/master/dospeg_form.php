<form action="<?php echo $action; ?>" method="post">
<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <div class="box-header">
                    <i class="icon-user"></i>
                    <h5><?php echo $button; ?> Data Dosen/Pegawai</h5>
                        <button type="submit" class="btn btn-box-right btn-default">
                            <i class="icon-save"></i> Simpan
                        </button>
                        <a href="<?php echo site_url('master') ?>" class="btn btn-box-right btn-default">
                            <i class="icon-arrow-left"></i> Kembali
                        </a>
                </div>
				<div class="span5"><br>
                    <div class="form-group">
                        <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                        <input type="text" class="form-control span5" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Tempat Tgl. Lahir <?php echo form_error('tempat_lahir') ?></label>
                        <input type="text" class="form-control span3" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                        <input type="text" class="form-control span2 datepicker" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">NIP (Username untuk login)<?php echo form_error('nip') ?></label>
                        <input type="text" pattern="[0-9]{18}" class="form-control span5" name="nip" id="nip" placeholder="NIP" value="<?php echo $nip; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">NIDN <?php echo form_error('nidn') ?></label>
                        <input type="text" pattern="[0-9]{10}" class="form-control span5" name="nidn" id="nidn" placeholder="NIDN" value="<?php echo $nidn; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Jenis Kelamin / Usia <?php echo form_error('jk') ?></label>
                        <select name="jk" class="span3">
								<option value="">-- Pilih Salah Satu --</option>
								<?php 
								$jk_values = array(
									'Laki-laki'=>'Laki-laki',
									'Perempuan'=>'Perempuan',
								);

								foreach($jk_values as $value => $display_text)
								{
									$selected = ($value == $jk) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
                            <input type="number" class="form-control span2" name="usia" id="usia" placeholder="Usia" value="<?php echo $usia; ?>" />
                    
                        
                    </div>
                </div>
				<div class="span5"><br>
                    <div class="form-group">
                        <label for="varchar">Golongan / TMT <?php echo form_error('golongan') ?></label>
                        <select name="golongan" class="span3">
								<option value="">-- Pilih Salah Satu --</option>
								<?php 
								$golongan_values = array(
									'IV/E' => 'IV/E Pembina Utama',
									'IV/D' => 'IV/D Pembina Utama Madya',
									'IV/C' => 'IV/C Pembina Utama Muda',
									'IV/B' => 'IV/B Pembina Tingkat I',
									'IV/A' => 'IV/APembina',
									'III/D' => 'III/D Penata Tingkat I',
									'III/C' => 'III/C Penata',
									'III/B' => 'III/B Penata Muda Tingkat I',
									'III/A' => 'III/A Penata Muda',
									'II/D' => 'II/D Pengatur Tingkat I',
									'II/C' => 'II/C Pengatur',
									'II/B' => 'II/B Pengatur Muda Tingkat I',
									'II/A' => 'II/A Pengatur Muda',
									'I/D' => 'I/D Juru Tingkat I',
									'I/C' => 'I/C Juru',
									'I/B' => 'I/B Juru Muda Tingkat I',
									'I/A' => 'I/A Juru Muda',
								);

								foreach($golongan_values as $value => $display_text)
								{
									$selected = ($value == $golongan) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
                            <input type="text" class="form-control span2 datepicker" name="gol_tmt" id="gol_tmt" placeholder="Gol TMT" value="<?php echo $gol_tmt; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="date">Gol TMT <?php echo form_error('gol_tmt') ?></label>
                        
                    </div>
                    <div class="form-group">
                        <label for="varchar">Jabatan <?php echo form_error('jabatan') ?></label>
                        <input type="text" class="form-control span5" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Jabatan TMT <?php echo form_error('jabatan_tmt') ?></label>
                        <input type="text" class="form-control span5 datepicker" name="jabatan_tmt" id="jabatan_tmt" placeholder="Jabatan Tmt" value="<?php echo $jabatan_tmt; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Masa Kerja (Tahun/Bulan))<?php echo form_error('masa_kerja_tahun') ?></label>
                        <input type="number" class="form-control span3" name="masa_kerja_tahun" id="masa_kerja_tahun" placeholder="Jumlah Tahun" value="<?php echo $masa_kerja_tahun; ?>" />
                        <input type="number" class="form-control span2" name="masa_kerja_bulan" id="masa_kerja_bulan" placeholder="Jumlah Bulan" value="<?php echo $masa_kerja_bulan; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Pendidikan <?php echo form_error('pendidikan') ?></label>
                        <input type="text" class="form-control span5" name="pendidikan" id="pendidikan" placeholder="Nama Kampus/Sekolah" value="<?php echo $pendidikan; ?>" />
                    </div>
                </div>

				<div class="span5"><br>
                    
                    <div class="form-group">
                        <label for="year">Tingkat Ijazah / Tahun Lulus <?php echo form_error('tahun_lulus') ?></label>
                        <input type="text" class="form-control span3" name="tingkat_ijazah" id="tingkat_ijazah" placeholder="Tingkat Ijazah" value="<?php echo $tingkat_ijazah; ?>" />
                        <input type="number" class="form-control span2" name="tahun_lulus" id="tahun_lulus" placeholder="Tahun Lulus" value="<?php echo $tahun_lulus; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="catatan_mutasi">Catatan Mutasi <?php echo form_error('catatan_mutasi') ?></label>
                        <textarea class="form-control span5" rows="3" name="catatan_mutasi" id="catatan_mutasi" placeholder="Catatan Mutasi"><?php echo $catatan_mutasi; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="varchar">Jenis User <?php echo form_error('jenis_pd') ?></label>
                            <select name="jenis_pd" class="span5">
								<option value="">-- Pilih Salah Satu --</option>
								<?php 
								$jenis_pd_values = array(
									'dosen'=>'Dosen',
									'pegawai'=>'Pegawai',
								);

								foreach($jenis_pd_values as $value => $display_text)
								{
									$selected = ($value == $jenis_pd) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                
            </div>
        </div>
	</div>
</section>
<?php echo form_close(); ?>


<script>
    $(function() {
        $('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
		});
    });

</script>
</form>