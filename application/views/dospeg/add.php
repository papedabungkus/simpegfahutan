
<?php echo form_open('dospeg/add'); ?>
<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <div class="box-header">
                    <i class="icon-user"></i>
                    <h5>Edit Data Dosen/Pegawai</h5>
                        <button type="submit" class="btn btn-box-right btn-default">
                            <i class="icon-save"></i> Simpan
                        </button>
                        <button onclick="goBack()" class="btn btn-box-right btn-default">
                            <i class="icon-arrow-left"></i> Kembali
                        </button>
                </div>
				<div class="span5"><br>
				<table border=0>
					<tr>
						<td>Nama </td> 
						<td><input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" /></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td> 
						<td><input type="text" name="tempat_lahir" value="<?php echo $this->input->post('tempat_lahir'); ?>" /></td>
					</tr>
					<tr>
						<td>Tgl Lahir</td> 
						<td><input data-date-format="yyyy-mm-dd" class="datepicker" type="text" name="tgl_lahir" value="<?php echo $this->input->post('tgl_lahir'); ?>" /></td>
					</tr>
					<tr>
						<td>NIP </td> 
						<td><input type="text" maxlength="16" name="nip"  value="<?php echo $this->input->post('nip'); ?>" /></td>
					</tr>
					<tr>
						<td>NIDN </td> 
						<td><input type="number" name="nidn" value="<?php echo $this->input->post('nidn'); ?>" /></td>
					</tr>
					<tr>
						<td>Jenis Kelamin </td> 
						<td>
							<select name="jk">
								<option value="">-- Pilih Salah Satu --</option>
								<?php 
								$jk_values = array(
									'Laki-laki'=>'Laki-laki',
									'Perempuan'=>'Perempuan',
								);

								foreach($jk_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('jk')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</td>
					</tr>
				</table>
				</div>
				<div class="span5"><br>
				<table border=0>
					<tr>
						<td>Golongan</td> 
						<td>
							<select name="golongan">
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
									$selected = $this->input->post('golongan') ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Golongan TMT</td> 
						<td><input data-date-format="yyyy-mm-dd" class="datepicker" type="text" name="gol_tmt" value="<?php echo $this->input->post('gol_tmt'); ?>" /></td>
					</tr>
					<tr>
						<td>Jabatan</td> 
						<td><input type="text" name="jabatan" value="<?php echo $this->input->post('jabatan'); ?>" /></td>
					</tr>
					<tr>
						<td>Jabatan TMT</td> 
						<td><input data-date-format="yyyy-mm-dd" class="datepicker"  type="text" name="jabatan_tmt" value="<?php echo $this->input->post('jabatan_tmt'); ?>" /></td>
					</tr>
					<tr>
						<td>Masa Kerja Tahun</td> 
						<td><input class="span2" type="number" name="masa_kerja_tahun" value="<?php echo $this->input->post('masa_kerja_tahun')?>" /> tahun</td>
					</tr>
					<tr>
						<td>Masa Kerja Bulan</td> 
						<td><input class="span2" type="number" name="masa_kerja_bulan" value="<?php echo $this->input->post('masa_kerja_bulan'); ?>" /> bulan</td>
					</tr>
				</table>
				</div>

				
				<div class="span5"><br>
				<table border=0>
					<tr>
						<td>Pendidikan</td> 
						<td><input type="text" name="pendidikan" value="<?php echo $this->input->post('pendidikan'); ?>" /></td>
					</tr>
					<tr>
						<td>Tahun Lulus</td> 
						<td><input type="number" name="tahun_lulus" value="<?php echo $this->input->post('tahun_lulus'); ?>" /></td>
					</tr>
					<tr>
						<td>Tingkat Ijazah</td> 
						<td><input type="text" name="tingkat_ijazah" value="<?php echo $this->input->post('tingkat_ijazah'); ?>" /></td>
					</tr>
					<tr>
						<td>Usia</td> 
						<td><input class="span2" type="number" name="usia" value="<?php echo $this->input->post('usia'); ?>" /> tahun</td>
					</tr>
					<tr>
						<td>Catatan Mutasi</td> 
						<td><textarea name="catatan_mutasi"><?php echo $this->input->post('catatan_mutasi'); ?></textarea></td>
					</tr>
					<tr>
						<td>Jenis User</td> 
						<td>
							<select name="jenis_pd">
								<option value="">-- Pilih Salah Satu --</option>
								<?php 
								$jenis_pd_values = array(
									'dosen'=>'Dosen',
									'pegawai'=>'Pegawai',
								);

								foreach($jenis_pd_values as $value => $display_text)
								{
									$selected = $value == $this->input->post('jenis_pd') ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Password Login</td> 
						<td><input type="password" name="password" />
						<span class="text-danger"><?php echo form_error('password');?></span></td>
					</tr>
				</table>
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

	function goBack() {
        window.history.back();
    }
</script>