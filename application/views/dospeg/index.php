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
									<a class="btn btn-small btn-default detail_button" href=""data-id="<?php echo $d['id']; ?>" data-toggle="modal" data-target="#modalDetailDospeg"><i class="btn-icon-only icon-search"> </i></a>
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
									<a class="btn btn-small btn-default detail_button" href=""data-id="<?php echo $d1['id']; ?>" data-toggle="modal" data-target="#modalDetailDospeg"><i class="btn-icon-only icon-search"> </i></a>
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

	
 <!-- Modal -->
 <div class="modal fade" id="modalDetailDospeg" tabindex="-1" role="dialog" aria-labelledby="modalDetailDospeg" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
      </div>
      <div class="modal-body">
      <div id="result">
      </div>                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        
      </div>
    </div>
  </div>
</div>

<script>
    $(document).on("click", ".detail_button", function () {
    	var myId = $(this).data('id'); 
    	$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>master/detail',
			data: { ids: myId },
			success: function(response) { 
    			$('#result').html(response);
    		}
    	});
    });
</script>