<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Tugas Belajar - <?php echo $namadosen; ?></title>
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
</style>
</head>

<body onload="window.print();">
<table width="90%" height="132" border="0" align="right">
  <tr>
    <td width="20%" height="116" bordercolor="#FFFFFF"><div align="center"><img src="<?php echo base_url('assets/unipa.png'); ?>" width="70" height="70" /></div></td>
    <td width="70%" bordercolor="#FFFFFF"><p align="center"><span class="style1">KEMENTERIAN RISET,  TEKNOLOGI, DAN PENDIDIKAN TINGGI<br />
UNIVERSITAS PAPUA</span><br />
          <strong><span class="style4">FAKULTAS KEHUTANAN</span></strong><span class="style2"><br />
          <strong><span class="style5">MANOKWARI</span></strong> <br />
          <span class="style6">Jalan  Gunung Salju Amban Manokwari 98314 <br />
Tel/Fax : 211065 Laman :  http//www.fahutan.unipa.ac.id</span></span></p></td>
    <td width="10%" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#FFFFFF"><hr /></td>
  </tr>
</table>
<table width="90%" border="0" align="right">
  <tr>
    <td width="14%" height="10" valign="top"><span class="style8">Nomor<br />Lampiran<br />Hal</span></td>
    <td width="2%" valign="top"><span class="style8">:<br />:<br />:</span></td>
    <td width="50%" valign="top"><span class="style8"><?php echo $nomorsurat; ?><br /><?php echo $lampiran; ?><br />Usulan Pemberian Tugas Belajar </span></td>
    <td width="34%" valign="top"><div align="right" class="style8">Manokwari, <?php echo $tanggalsurat; ?></div></td>
  </tr>
  <tr>
    <td height="10" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" valign="top"><span class="style8">Yth</span></td>
    <td valign="top"><span class="style8">:</span></td>
    <td valign="top"><span class="style8">Rektor Universitas Papua<br />di<br /> Manokwari</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr height="3">
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><p align="justify" class="style8">Dengan Hormat,<br>Bersama ini kami sampaikan usul berkas kenaikan pangkat jabatan fungsional tenaga dosen pada Fakultas Kehutanan Universitas Papua atas nama :</p>
  </tr>
  </table>
  <table width="90%"  border="1" cellspacing="0" cellpadding="5" align="right" class="style8">
  <tr>
    <th width="10">No.</th>
    <th>Nama/NIP</th>
    <th>Jabatan/Golongan Terakhir</th>
    <th>Jabatan Yang Diusulkan</th>
    <th>Jumlah Nilai KUM</th>
  <tr>
  <tr>
    <td>1</td>
    <td><?php echo $namaY."<br>".$nipY; ?></td>
    <td><?php echo $jabatanY."/".$pangkatY." ".$golY; ?></td>
    <td><?php echo $jabatanusul; ?></td>
    <td align="center"><?php echo $jumlahKUM; ?></td>
  <tr>
  </table>
  <table width="90%" border="0" align="right">
  <tr>
    <td colspan="4"><p align="justify" class="style8">Sebagai bahan pertimbangan bersama ini kami lampirkan :</p>
    <ol type="1" class="style8">
      <li>Daftar Usul Penetapan Angka Kredit (DUPAK)</li>
      <li>Validasi dan Penilaian Karya Ilmiah</li>
      <li>Fotocopy SK Pangkat Terakhir</li>
      <li>Fotocopy SK Fungsional Terakhir</li>
      <li>Fotocopy Karpeg</li>
      <li>Fotocopy NIP Baru</li>
      <li>SKP 2 Tahun Terakhir</li>
    </ol>
    <p class="style8">Masing-masing 4 (empat) rangkap</p>
    <p class="style8"><br>Demikian untuk diketahui dan mohon diproses lebih lanjut. Atas perhatiannya, diucapkan terima kasih.</p></td>
  </tr>
  <tr>
    <td colspan="3" class="style8">&nbsp;</td>
    <td class="style8"><br><?php echo ucwords(strtolower($jabatan)); ?>,
    <p>&nbsp;</p>
    <p><?php echo $namadekan; ?><br />NIP. <?php echo $nipdekan; ?> </p></td>
  </tr>
  <tr>
        <td class="style8" colspan="3">Tembusan : 
            <ol type="1">
                <li>Kepala BUK UNIPA</li>
                <li>Kepala Sub Bagian Kepegawaian BUK UNIPA</li>
                <li>Yang bersangkutan</li>
                <li>Arsip</li>
            </ol>
        </td>
    </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
