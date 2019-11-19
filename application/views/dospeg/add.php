<?php echo form_open('dospeg/add'); ?>

	<div>
		Jk : 
		<select name="jk">
			<option value="">select</option>
			<?php 
			$jk_values = array(
				'L'=>'Laki-laki',
				'P'=>'Perempuan',
			);

			foreach($jk_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('jk')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		Golongan : 
		<select name="golongan">
			<option value="">select</option>
			<?php 
			$golongan_values = array(
			);

			foreach($golongan_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('golongan')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		Jenis Pd : 
		<select name="jenis_pd">
			<option value="">select</option>
			<?php 
			$jenis_pd_values = array(
				'dosen'=>'Dosen',
				'pegawai'=>'Pegawai',
			);

			foreach($jenis_pd_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('jenis_pd')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		Nama : 
		<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
	</div>
	<div>
		Tempat Lahir : 
		<input type="text" name="tempat_lahir" value="<?php echo $this->input->post('tempat_lahir'); ?>" />
	</div>
	<div>
		Tgl Lahir : 
		<input type="text" name="tgl_lahir" value="<?php echo $this->input->post('tgl_lahir'); ?>" />
	</div>
	<div>
		Nip : 
		<input type="text" name="nip" value="<?php echo $this->input->post('nip'); ?>" />
		<span class="text-danger"><?php echo form_error('nip');?></span>
	</div>
	<div>
		Nidn : 
		<input type="text" name="nidn" value="<?php echo $this->input->post('nidn'); ?>" />
	</div>
	<div>
		Gol Tmt : 
		<input type="text" name="gol_tmt" value="<?php echo $this->input->post('gol_tmt'); ?>" />
	</div>
	<div>
		Jabatan : 
		<input type="text" name="jabatan" value="<?php echo $this->input->post('jabatan'); ?>" />
	</div>
	<div>
		Jabatan Tmt : 
		<input type="text" name="jabatan_tmt" value="<?php echo $this->input->post('jabatan_tmt'); ?>" />
	</div>
	<div>
		Masa Kerja Tahun : 
		<input type="text" name="masa_kerja_tahun" value="<?php echo $this->input->post('masa_kerja_tahun'); ?>" />
	</div>
	<div>
		Masa Kerja Bulan : 
		<input type="text" name="masa_kerja_bulan" value="<?php echo $this->input->post('masa_kerja_bulan'); ?>" />
	</div>
	<div>
		Pendidikan : 
		<input type="text" name="pendidikan" value="<?php echo $this->input->post('pendidikan'); ?>" />
	</div>
	<div>
		Tahun Lulus : 
		<input type="text" name="tahun_lulus" value="<?php echo $this->input->post('tahun_lulus'); ?>" />
	</div>
	<div>
		Tingkat Ijazah : 
		<input type="text" name="tingkat_ijazah" value="<?php echo $this->input->post('tingkat_ijazah'); ?>" />
	</div>
	<div>
		Usia : 
		<input type="text" name="usia" value="<?php echo $this->input->post('usia'); ?>" />
	</div>
	<div>
		Userid : 
		<input type="text" name="userid" value="<?php echo $this->input->post('userid'); ?>" />
	</div>
	<div>
		Catatan Mutasi : 
		<textarea name="catatan_mutasi"><?php echo $this->input->post('catatan_mutasi'); ?></textarea>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>