	<section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Master Data Dosen</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list1">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list1 collapse in">
                        <table class="table table-hover tablesorter">
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>NIP</th>
								<th>NIDN</th>
								<th>Tempat Tgl. Lahir</th> 
								<th>Jenis Kelamin</th>
								<th>Golongan</th>
								<th>Jabatan</th>
								<th width="100">Aksi</th>
							</tr>
							<?php $no=1; 
							foreach($dosen as $d){ ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $d['nama']; ?></td>
								<td><?php echo $d['nip']; ?></td>
								<td><?php echo $d['nidn']; ?></td>
								<td><?php echo $d['tempat_lahir'].", ".tgl_indo($d['tgl_lahir']); ?></td>
								<td><?php echo $d['jk']; ?></td>
								<td><?php echo $d['golongan']; ?></td>
								<td><?php echo $d['jabatan']; ?></td>
								<td>
									<a class="btn btn-small btn-info" href="<?php echo site_url('dospeg/edit/'.$d['id']); ?>"><i class="btn-icon-only icon-pencil"> </i></a>
									<a class="btn btn-small btn-danger" href="<?php echo site_url('dospeg/remove/'.$d['id']); ?>"><i class="btn-icon-only icon-remove"> </i></a>
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
                </div>
            </div>
		</div>

		<div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Master Data Pegawai</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list2">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list2 collapse in">
                        <table class="table table-hover tablesorter">
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>NIP</th>
								<th>Tempat Tgl. Lahir</th> 
								<th>Jenis Kelamin</th>
								<th>Golongan</th>
								<th>Jabatan</th>
								<th width="100">Aksi</th>
							</tr>
							<?php $no=1; 
							foreach($pegawai as $d1){ ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $d1['nama']; ?></td>
								<td><?php echo $d1['nip']; ?></td>
								<td><?php echo $d1['tempat_lahir'].", ".tgl_indo($d1['tgl_lahir']); ?></td>
								<td><?php echo $d1['jk']; ?></td>
								<td><?php echo $d1['golongan']; ?></td>
								<td><?php echo $d1['jabatan']; ?></td>
								<td>
									<a class="btn btn-small btn-info" href="<?php echo site_url('dospeg/edit/'.$d1['id']); ?>"><i class="btn-icon-only icon-pencil"> </i></a>
									<a class="btn btn-small btn-danger" href="<?php echo site_url('dospeg/remove/'.$d1['id']); ?>"><i class="btn-icon-only icon-remove"> </i></a>
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
                </div>
            </div>
		</div>
	</section>