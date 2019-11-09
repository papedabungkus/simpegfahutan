<section class="page container">
        <div class="row">
            <div class="span10">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-list"></i>
                        <h5>Form Isi Pengumuman</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline" action="<?php echo base_url('pengumuman/add'); ?>" method="POST">                      
                            <p>Judul Pengumuman</p>
                            <div class="input-prepend">
                                <textarea name="judulpengumuman" class="form-control span7" rows="3"></textarea>
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
                                <button name="btnSave" type="submit" class="btn btn-primary">
                                <i class="icon-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
