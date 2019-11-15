<section class="page container">
        <div class="row">
            <div class="span6">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-list"></i>
                        <h5>Form Isi Pengumuman</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline" action="<?php echo base_url('pengumuman/edit/').$pengumumanx['id']; ?>" method="POST">                      
                            <p>Judul Pengumuman</p>
                            <div class="input-prepend">
                                <textarea name="judulpengumuman" class="form-control span5" rows="3">
                                <?php echo ($this->input->post('judul') ? $this->input->post('judul') : $pengumumanx['judul']); ?>
                                </textarea>
                            </div>
                            <p>Kategori Pengumuman</p>
                            <div class="input-prepend"> 
                            <select name="kategori">
                                <option value="">select</option>
                                <?php 
                                $kategori_values = array(
                                    'peraturan'=>'Peraturan',
                                    'umum'=>'Umum',
                                );

                                foreach($kategori_values as $value => $display_text)
                                {
                                    $selected = ($value == $pengumumanx['kategori']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                } 
                                ?>
                            </select>
                            </div>
                            <p>File Pengumuman</p>
                            <div class="input-prepend">
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
                                url: "<?php echo base_url('pengumuman/upload/')?>",
                                
                                method:"post",
                                acceptedFiles:"image/jpeg, image/png, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                                paramName:"userfile",
                                dictInvalidFileType:"Type file ini tidak dizinkan",
                                addRemoveLinks:true,
                                });
                               
                            </script>
                            <div class="input-prepend">
                                <br>
                                <button name="btnSave" type="submit" class="btn btn-success">
                                <i class="icon-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="span10">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-list"></i>
                        <h5>Tabel Pengumuman</h5>
                    </div>
                    <div class="box-content">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>URL</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;
                            foreach($pengumuman as $r_pengumuman){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $r_pengumuman['judul']; ?></td>
                                    <td><?php echo $r_pengumuman['url']; ?></td>
                                    <td class="td-actions">
                                        <a href="<?php echo base_url('pengumuman/edit/').$r_pengumuman['id'];?>" class="btn btn-small btn-success edit_button">
                                            <i class="btn-icon-only icon-pencil"> </i>
                                        </a>
                                        <a onclick="confirm('Are You Sure?')" href="<?php echo base_url('pengumuman/delete/').$r_pengumuman['id'];?>" class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> </i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="pull-right">
                            <?php echo $this->pagination->create_links(); ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
