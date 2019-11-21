<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Dospeg Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Nip</td><td><?php echo $nip; ?></td></tr>
	    <tr><td>Nidn</td><td><?php echo $nidn; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Golongan</td><td><?php echo $golongan; ?></td></tr>
	    <tr><td>Gol Tmt</td><td><?php echo $gol_tmt; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $jabatan; ?></td></tr>
	    <tr><td>Jabatan Tmt</td><td><?php echo $jabatan_tmt; ?></td></tr>
	    <tr><td>Masa Kerja Tahun</td><td><?php echo $masa_kerja_tahun; ?></td></tr>
	    <tr><td>Masa Kerja Bulan</td><td><?php echo $masa_kerja_bulan; ?></td></tr>
	    <tr><td>Pendidikan</td><td><?php echo $pendidikan; ?></td></tr>
	    <tr><td>Tahun Lulus</td><td><?php echo $tahun_lulus; ?></td></tr>
	    <tr><td>Tingkat Ijazah</td><td><?php echo $tingkat_ijazah; ?></td></tr>
	    <tr><td>Usia</td><td><?php echo $usia; ?></td></tr>
	    <tr><td>Catatan Mutasi</td><td><?php echo $catatan_mutasi; ?></td></tr>
	    <tr><td>Jenis Pd</td><td><?php echo $jenis_pd; ?></td></tr>
	    <tr><td>Userid</td><td><?php echo $userid; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('master') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>