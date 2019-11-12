
        <section class="page container">
            <div class="row">
                <div class="span4">
                <?php if($this->ion_auth->is_admin()){ //untuk login admin?>
                    <div class="blockoff-right">
                        <form class="form-inline" action="<?php echo base_url('arsip'); ?>" method="POST">
                            <p>Pilih Data Dosen/Pegawai</p>
                            <div class="input-prepend">
                                <select name="cmbDosen">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <?php foreach ($datadosen as $res) { ?>
                                    <option value="<?php echo $res['id'];?>" <?php if ($nip == $res['nip']) echo 'selected' ; ?>><?php echo $res['nama'];?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="input-prepend">
                                <br>
                                <button name="btnCari" type="submit" class="btn btn-success">
                                <i class="icon-ok"></i>
                                    Pilih
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php if(isset($_POST['btnCari'])) { ?>
                    <div class="blockoff-right">
                    <?php if($foto==""){ 
                        $gambar = "assets/template/images/user.png";
                    } else {
                        $gambar = $foto;
                    } ?>
                        <img src="<?php echo $gambar;?>">
                        <div class="disclaimer">
                            <p><?php echo $nama."<br>".$nip; ?></p>
                        </div>
                    </div>
                    <?php } } else { //untuk login dosen/pegawai?>
                    <div class="blockoff-right">
                    <?php if($foto==""){ 
                        $gambar = "assets/template/images/user.png";
                    } else {
                        $gambar = $foto;
                    } ?>
                        <img src="<?php echo $gambar;?>">
                        <div class="disclaimer">
                            <p><?php echo $nama."<br>".$nip; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php if(isset($_POST['btnCari']) || $arsip!="") { ?>
                <div class="span12">
                    <div id="Person-1" class="box">
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dokumen/Arsip</th>
                                    <th>Jenis File</th>
                                    <th>Terakhir Diubah</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no=1;
                            foreach($arsip as $a){ ?>
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $a['nama_dokumen']; ?></td>
                                    <td><?php echo $a['jenis_file']; ?></td>
                                    <td><?php echo $a['terakhir_diubah']; ?></td>
                                    <td class="td-actions">                                     
                                        <?php if($this->ion_auth->is_admin()){
                                            if($a['url']==""){ ?>
                                        <a href="" id="ubahdata" class="btn btn-small btn-success edit_button" data-id="<?php echo $a['id']; ?>" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="btn-icon-only icon-upload"> Unggah</i>
                                        </a>
                                        <?php } else { ?>
                                        <a href="" id="ubahdata" class="btn btn-small btn-success edit_button" data-id="<?php echo $a['id']; ?>" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="btn-icon-only icon-upload"> Ubah</i>
                                        </a>
                                        <a target="BLANK" href="<?php echo $a['url']; ?>" class="btn btn-small btn-primary">
                                            <i class="btn-icon-only icon-download"> Unduh</i>
                                        </a>
                                        <?php if (isset($_POST['cmbDosen'])){ ?>
                                        <a onclick="confirm('Are You Sure?')" href="<?php echo site_url().'arsip/remove/'.$a['idarsipdosen'].'/'.$_POST['cmbDosen']; ?>" class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> Hapus</i>
                                        </a>
                                        <?php } else { ?>
                                        <a onclick="confirm('Are You Sure?')" href="<?php echo site_url().'arsip/remove/'.$a['idarsipdosen'].'/'.$urisegment; ?>" class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> Hapus</i>
                                        </a>
                                        <?php } }  } else {
                                            if($a['url']==""){ ?>
                                            <a class="btn btn-small btn-primary disabled">
                                            <i class="btn-icon-only icon-download"> Unduh</i>
                                            </a>
                                            <?php } else { ?>
                                            <a target="BLANK" href="<?php echo $a['url']; ?>" class="btn btn-small btn-primary">
                                            <i class="btn-icon-only icon-download"> Unduh</i>
                                            </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>                          
                        </table>
                        </div>
                    </div>       
                </div>
                <?php } ?>
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
        <script>
            $(".hapus").click(function () {
                var jawab = confirm("Press a button!");
                if (jawab === true) {
                //kita set hapus false untuk mencegah duplicate request
                    var hapus = false;
                    if (!hapus) {
                        hapus = true;
                        $.post('localhost/fahutan/arsip/remove', {id: $(this).attr('data-id')},
                        function (data) {
                            alert(data);
                        });
                        hapus = false;
                    }
                } else {
                    return false;
                }
            });
        </script>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Unggah Dokumen</h5>
      </div>
      <div class="modal-body">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/dropzone.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/basic.min.css') ?>">

        <script type="text/javascript" src="<?php echo base_url('assets/dropzone/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dropzone/dropzone.min.js') ?>"></script>
        <div class="dropzone">
            <div class="dz-message">
                <h3> Klik atau Drop File disini</h3>
            </div>
        </div>
        <script type="text/javascript">
            Dropzone.autoDiscover = false;
            var foto_upload= new Dropzone(".dropzone",{
            url: "<?php echo base_url('arsip/upload/')?>",
            maxFilesize: 2,
            method:"post",
            acceptedFiles:"image/jpeg, image/png, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document",
            paramName:"userfile",
            dictInvalidFileType:"Type file ini tidak dizinkan",
            addRemoveLinks:true,
            });
            $(document).on( "click", '.edit_button',function(e) {
                var idarsip = $(this).data('id');
                foto_upload.on("sending",function(a,b,c){
                    var iddosen = "<?php echo $_POST['cmbDosen']; ?>";
                    c.append("iddosen",iddosen); 
                    c.append("idarsip",idarsip);
                });
            });
        </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-primary" onclick="window.location.reload()">Simpan</button>
      </div>
    </div>
  </div>
</div>