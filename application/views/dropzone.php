<!DOCTYPE HTML>

<html>
<head>
	<title>Multiple Upload</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/dropzone.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/basic.min.css') ?>">

<script type="text/javascript" src="<?php echo base_url('assets/dropzone/jquery.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dropzone/dropzone.min.js') ?>"></script>

<style type="text/css">

</style>

</head>
<body>


<div class="dropzone">

  <div class="dz-message">
   <h3> Klik atau Drop gambar disini</h3>
  </div>

</div>



<script type="text/javascript">
Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url('arsip/upload/proses_upload') ?>",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
	a.token=Math.random();
	c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});
</script>

</body>
</html>