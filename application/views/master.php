    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Master Data Dosen</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list collapse in">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>NIDN</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;
                            foreach($dosen as $r_dosen){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $r_dosen['nama']; ?></td>
                                    <td><?php echo $r_dosen['nip']; ?></td>
                                    <td><?php echo $r_dosen['nidn']; ?></td>
                                    <td><?php echo $r_dosen['ttl']; ?></td>
                                    <td><?php echo $r_dosen['jk']; ?></td>
                                    <td><?php echo $r_dosen['golongan']; ?></td>
                                    <td><?php echo $r_dosen['jabatan']; ?></td>
                                    <td width="10%" class="td-actions">
                                        <a href="" class="btn btn-small btn-default detail_button" data-id="<?php echo $r_dosen['id']; ?>" data-toggle="modal" data-target="#modalDetailDospeg">
                                            <i class="btn-icon-only icon-search"> </i>
                                        </a>
                                        <a href="" id="ubahdata" class="btn btn-small btn-success edit_button" data-toggle="modal" data-target="#modalEditDospeg<?php echo $r_dosen['id']; ?>">
                                            <i class="btn-icon-only icon-pencil"> </i>
                                        </a>
                                        <a data-id="<?php echo $r_dosen['id'];?>" href="" class="hapus btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> </i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal Edit Mahasiswa-->
                                <div class="modal fade" id="modalEditDospeg<?php echo $r_dosen['id']; ?>" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Update Data Dosen</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="<?php echo base_url('master/update');?>" method="get">
                                            <?php
                                            $id = $r_dosen['id']; 
                                            $query_edit = $this->db->get_where('dospeg',array('id'=>$id))->row_array();
                                            ?>
                                            <label class="span2">Nama</label>
                                            <input name="nama" type="text" class="span4" value="<?php echo $query_edit['nama']; ?>">
                                            <label class="span2">Tempat Tgl. Lahir</label>
                                            <input name="ttl" type="text" class="span4" value="<?php echo $query_edit['ttl']; ?>">
                                            <label class="span2">NIP</label>
                                            <input name="nip" type="text" class="span4" value="<?php echo $query_edit['nip']; ?>">
                                            <label class="span2">NIDN</label>
                                            <input name="nidn" type="text" class="span4" value="<?php echo $query_edit['nidn']; ?>">
                                            <label class="span2">Jenis Kelamin</label>
                                            <input name="jk" type="text" class="span4" value="<?php echo $query_edit['jk']; ?>">
                                            <label class="span2">Golongan</label>
                                            <input name="golongan" type="text" class="span4" value="<?php echo $query_edit['golongan']; ?>">
                                            <label class="span2">Gol TMT</label>
                                            <input id="datepicker" name="gol_tmt" type="text" class="span4" value="<?php echo $query_edit['gol_tmt']; ?>">
                                            <label class="span2">Jabatan</label>
                                            <input name="jabatan" type="text" class="span4" value="<?php echo $query_edit['jabatan']; ?>">
                                            <label class="span2">Jabatan TMT</label>
                                            <input name="jabatan_tmt" type="text" class="span4" value="<?php echo $query_edit['jabatan_tmt']; ?>">
                                            <label class="span2">Masa Kerja Tahun</label>
                                            <input name="masa_kerja_tahun" type="text" class="span4" value="<?php echo $query_edit['masa_kerja_tahun']; ?>">
                                            <label class="span2">Masa Kerja Bulan</label>
                                            <input name="masa_kerja_bulan" type="text" class="span4" value="<?php echo $query_edit['masa_kerja_bulan']; ?>">
                                            <label class="span2">Pendidikan</label>
                                            <input name="pendidikan" type="text" class="span4" value="<?php echo $query_edit['pendidikan']; ?>">
                                            <label class="span2">Tahun Lulus</label>
                                            <input name="tahun_lulus" type="text" class="span4" value="<?php echo $query_edit['tahun_lulus']; ?>">
                                            <label class="span2">Tingkat Ijazah</label>
                                            <input name="tingkat_ijazah" type="text" class="span4" value="<?php echo $query_edit['tingkat_ijazah']; ?>">
                                            <label class="span2">Usia</label>
                                            <input name="usia" type="text" class="span4" value="<?php echo $query_edit['usia']; ?>">
                                            <label class="span2">Catatan Mutasi</label>
                                            <input name="catatan_mutasi" type="text" class="span4" value="<?php echo $query_edit['catatan_mutasi']; ?>">
                                            
                                            <input type="hidden" name="id" value="<?php echo $query_edit['id']; ?>">         
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        <input type="submit" class="btn btn-success" data-dismiss="modal" value="Simpan">
                                    </div>
                                    </div>
                                </div>
                                </div>
                            <?php } ?>
                            </tbody>
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
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;
                            foreach($pegawai as $r_peg){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $r_peg['nama']; ?></td>
                                    <td><?php echo $r_peg['nip']; ?></td>
                                    <td><?php echo $r_peg['ttl']; ?></td>
                                    <td><?php echo $r_peg['jk']; ?></td>
                                    <td><?php echo $r_peg['golongan']; ?></td>
                                    <td><?php echo $r_peg['jabatan']; ?></td>
                                    <td width="10%" class="td-actions">
                                        <a href=""  class="btn btn-small btn-default detail_button" data-id="<?php echo $r_peg['id']; ?>" data-toggle="modal" data-target="#modalDetailDospeg">
                                            <i class="btn-icon-only icon-search"> </i>
                                        </a>
                                        <a href="" id="ubahdata" class="btn btn-small btn-success edit_button" data-id="<?php echo $r_peg['id']; ?>" data-toggle="modal" data-target="#modalEditDospeg">
                                            <i class="btn-icon-only icon-pencil"> </i>
                                        </a>
                                        <a data-id="<?php echo $r_peg['id'];?>" href="" class="hapus btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> </i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
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
    $(".hapus").click(function() {
        var jawab = confirm("Apakah anda yakin akan menghapus ?");
        if (jawab === true){
            var hapus = false;
            if (!hapus) {
                hapus = true;
                $.post('<?php echo base_url('master/delete/')?>',{id: $(this).attr('data-id')},
                function(data){
                    alert(data);
                });
                location.reload();
                hapus = false;
            }
        } else {
            return false;
        }
    })
</script>
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
        <script>
        $(function() {
            $('#datepicker').datepicker();
        });
        </script>