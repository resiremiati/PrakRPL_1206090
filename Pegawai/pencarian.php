<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENCARIAN</title>
</head>
<style>
a{text-decoration:none}
</style>
<body>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("file_akses");
	$kode=$_GET['tcari'];
	$cek=mysql_query ("select *from pegawai where nip='$kode' or nama='$kode'");
	$data=mysql_fetch_array($cek);
	if ($kode==$data['nip'] or $kode==$data['nama'])
	{
		echo "<script>alert('Data Pegawai Ditemukan')</script>";
?>
<table width="400px" border="0" align="center">
		<tr>
    	<td colspan="3" align="left"><h2><b>Data <?php echo $data['nama']; ?></b></h2></td>
    	</tr>
    	<tr>
    	<td width="55%">NIP</td><td width="3%"> : </td><td><?php echo $data['nip']; ?></td>
    	</tr>
        <tr>
    	<td>NAMA</td><td width="3%"> : </td><td><?php echo $data['nama']; ?></td>
    	</tr>
        <tr>
    	<td>KODE POS</td><td width="3%"> : </td><td><?php echo $data['kode_pos']; ?></td>
    	</tr>
        <tr>
    	<td>NOMOR REKENING</td><td width="3%"> : </td><td><?php echo $data['no_rek']; ?></td>
    	</tr>
        <tr>
    	<td colspan="3" align="left"><button><a href="tampil_pegawai.php">Kembali</a></button></td>
    	</tr>
</table>
<?php } 
else
	{
		echo "<script>alert('Data Pegawai Tidak Ditemukan')</script>";
		echo "<script>self.history.go(-1)</script>";
	}
?>
</body>
</html>