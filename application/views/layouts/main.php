<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SimPeg Fahutan | Unipa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="<?php echo base_url('assets/template/js/jquery/jquery-1.8.2.min.js');?>" type="text/javascript" ></script>
    <link href="<?php echo base_url('assets/template/css/customize-template.css');?>" type="text/css" media="screen, projection" rel="stylesheet" />
	
    <style> 
    </style>
</head>
    <body>
	
	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo base_url(); ?>" class="brand"><i class="icon-info-sign"></i> Sistem Informasi Kepegawaian Fakultas Kehutanan Unipa</a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav pull-right">
                        <?php
                        if ($this->ion_auth->logged_in()) { ?>
                            <li class="dropdown">
                                <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo ucwords($this->ion_auth->user()->row()->username); ?>
                                    <b class="caret hidden-phone"></b>
                                </a>
                                <ul class="dropdown-menu">
                                        <li>
                                            <a href="demo-horizontal-nav.html">Ubah Kata Sandi</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('auth/logout');?>">Keluar</a>
                                        </li>
                                        </li>
                                    </ul>
                            </li>
                    <?php } else { ?>
                            <li>
                                <a href="<?php echo base_url('auth/login');?>">Login</a>
                            </li>
                    <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('beranda');?>">
                                        <i class="icon-home icon-large"></i> Beranda
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('tentangkami');?>">
                                        <i class="icon-tags icon-large"></i> Tentang Kami
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('informasi');?>">
                                        <i class="icon-info-sign icon-large"></i> Informasi
                                    </a>
                                </li>
                            <?php if ($this->ion_auth->logged_in()) { ?>
                                <li>
                                    <a href="<?php echo base_url('arsip');?>">
                                        <i class="icon-file icon-large"></i> Dokumen/Arsip
                                    </a>
                                </li>
                            <?php 
                                if ($this->ion_auth->user()->row()->id == '1') {
                            ?>
                                <li>
                                    <a href="<?php echo base_url('master');?>">
                                        <i class="icon-book icon-large"></i> Master Data
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('surat');?>">
                                        <i class="icon-envelope icon-large"></i> Surat
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('pengumuman');?>">
                                        <i class="icon-search icon-large"></i> Pengumuman
                                    </a>
                                </li>
                            <?php } }?>
                            </ul>
                        </div>
                    </div>
	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
    ?>
    

    </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Sistem Informasi Kepegawaian Fakultas Kehutanan Unipa</p>
                <div class="disclaimer">
                    <p>Copyright © 2019</p>
                </div>
            </div>
        </footer>

        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-transition.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-alert.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-modal.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-dropdown.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-scrollspy.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-tab.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-tooltip.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-popover.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-button.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-collapse.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-carousel.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-typeahead.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-affix.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap/bootstrap-datepicker.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/jquery/jquery-tablesorter.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/jquery/jquery-chosen.js');?>" type="text/javascript" ></script>
        <script src="<?php echo base_url('assets/template/js/jquery/virtual-tour.js');?>" type="text/javascript" ></script>
        <script type="text/javascript">
            $(function() {
                $('#sample-table').tablesorter();
                $('#datepicker').datepicker();
                $(".chosen").chosen();
            });
        </script>
	</body>
</html>
 