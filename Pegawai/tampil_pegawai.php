<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TAMPIL SISWA</title>
<style>
a{text-decoration:none}
a:hover {text-decoration:underline}
</style>
</head>

<body>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("nilai");
	$cek=mysql_query ("select *from siswa");
?>
<table width="700" border="1" align="center">
<tr><td colspan="5" align="center"><b>DATA SISWA</b></td></tr>
  <tr align="center">
    <td width="20%"><a href="sort_nip.php">NIS</td>
    <td width="25%"><a href="sort_nama.php">NAMA SISWA</td>
    <td width="15%"><a href="sort_kode_pos.php">KODE JURUSAN</td>
 
    <td width="20%">Option</td>
  </tr>
<?php 
while ($data=mysql_fetch_array ($cek))
	{
?>
  <tr align="center">
    <td><?php echo $data['nis_siswa']; ?></td>
    <td><?php echo $data['nama_siswa']; ?></td>
    <td><?php echo $data['kode_jurusan']; ?></td>
    
    <td align="center"><a href="hapus.php?id=<?php echo $data['nip'] ?>" style="color:red">HAPUS</a> | <a href="ubah.php?id=<?php echo $data['nip'] ?>">UBAH </a>
  </tr>
<?php } ?>
</table>
<br /><br />
<td height="168">   
<marquee direction="up" align="middle" height="204" width="130" scrollamount="1" scrolldelay="60" onMouseOut="this.start()" onMouseOver="this.stop()">   
<p class="general" align="center">
<span class="small">Contoh Program Data Siswa</span><br>
<br>Terima kasih. <br>   </p>   </marquee>   
</td></tr>
<form action="pencarian.php" method="get">
<table align="center" border="0">
	<tr><td><input type="text" name="tcari" maxlength="30" /><input type="submit" value="Cari" /></form></td></tr>
    <tr><td><br /></td></tr>
    <tr align="center"><td><a href="input_siswa.php">Input Data Siswa</a></td></tr>
</body>
</html>