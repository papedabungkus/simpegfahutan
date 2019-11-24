<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Keterangan Aktif Kuliah - <?php echo $namamahasiswa; ?></title>
<style type="text/css">
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
}
.style2 {font-family: "Times New Roman", Times, serif}
.style4 {font-family: "Times New Roman", Times, serif; font-size: 16px; }
.style5 {font-size: 14px}
.style6 {font-size: 10px}
.style8 {font-family: "Times New Roman", Times, serif; font-size: 11px; }
.style9 {font-family: "Times New Roman", Times, serif}
.style10 {font-family: "Times New Roman", Times, serif; font-size: 12px; font-weight: bold; text-decoration: underline;}
.style11 {font-family: "Times New Roman", Times, serif; font-size: 12px; font-weight: bold;}
</style>
</head>

<body onload="window.print();">
<table width="90%" height="132" border="0" align="right">
  <tr>
    <td width="15%" height="116" bordercolor="#FFFFFF"><div align="center"><img src="<?php echo base_url('assets/unipa.png'); ?>" width="70" height="70" /></div></td>
    <td width="70%" bordercolor="#FFFFFF"><p align="center"><span class="style1">KEMENTERIAN RISET,  TEKNOLOGI, DAN PENDIDIKAN TINGGI<br />
UNIVERSITAS PAPUA</span><br />
          <strong><span class="style4">FAKULTAS KEHUTANAN</span></strong><span class="style2"><br />
          <strong><span class="style5">MANOKWARI</span></strong> <br />
          <span class="style6">Jalan  Gunung Salju Amban Manokwari 98314 <br />
Tel/Fax : 211065 Laman :  http//www.fahutan.unipa.ac.id</span></span></p></td>
    <td width="15%" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF"><hr /></td>
  </tr>
</table>
<table width="90%" border="0" align="right">
  <tr>
    <td height="70" width="15%"></td>
    <td width="70%" align="center"><span class="style10">SURAT KETERANGAN AKTIF KULIAH</span><br><span class="style11">Nomor: <?php echo $nomorsurat; ?></span></td>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr><td colspan="3"><br></td></tr>
  <tr><td colspan="3"><p>Yang bertanda tangan di bawah ini,</p></td></tr>
</table>
<table width="90%" border="0" align="right">
    <tr>
        <td width="20%">Nama</td><td>:</td><td><?php echo $namatu; ?></td>
    </tr>
    <tr>
        <td>NIP</td><td>:</td><td><?php echo $niptu; ?></td>
    </tr>
    <tr>
        <td>Pangkat/Golongan</td><td>:</td><td><?php echo $pangkatgolongan; ?></td>
    </tr>
    <tr>
        <td>Jabatan</td><td>:</td><td><?php echo $jabatan; ?></td>
    </tr>
    <tr>
        <td colspan="3">Dengan ini menerangkan bahwa,</td>
    </tr>
    <tr>
        <td width="20%">Nama</td><td>:</td><td><?php echo $namamahasiswa; ?></td>
    </tr>
    <tr>
        <td>NIM</td><td>:</td><td><?php echo $nimmahasiswa; ?></td>
    </tr>
    <tr>
        <td>Program Studi</td><td>:</td><td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td>Jurusan</td><td>:</td><td>KEHUTANAN</td>
    </tr>
    <tr>
        <td colspan="3">
            <p align="justify">Yang bersangkutan adalah benar-benar terdaftar sebagai mahasiswa Fakultas Kehutanan Universitas Papua dan aktif kuliah pada semester gasal tahun akademik 2019/2020.</p>
            <p align="justify">Surat Keterangan Aktif Kuliah ini berlaku selama 1(satu) semester pada semester gasal tahun akademik 2019/2020.</p>
            <p align="justify">Demikian Surat Keterangan ini dibuat dengan sebenar-benarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
        </td>
    </tr>
</table>
<table width="90%" border="0" align="right">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%">
            Manokwari, <?php echo $tanggalsurat; ?><br>A.n. Dekan<br><?php echo ucwords(strtolower($jabatan)); ?>,<br><br><br><br><br>
            <?php echo $namatu; ?><br>NIP. <?php echo $niptu; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">Tembusan : 
            <ol type="1">
                <li>Dekan (Sebagai Laporan)</li>
                <li>Ketua Jurusan Kehutanan</li>
                <li>Arsip</li>
            </ol>
        </td>
    </tr>
</table>
</body>
</html>
