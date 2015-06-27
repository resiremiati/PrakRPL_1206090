<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UBAH DATA PEGAWAI</title>
</head>
<style>
a{text-decoration:none}
</style>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("file_akses");
	$kode=$_GET['id'];
	$cek=mysql_query ("select *from pegawai where nip='$kode' or nama='$kode'");
	while ($data=mysql_fetch_array($cek)) {
?>
<body>
<table width="400px" border="0" align="center">
	<form action="update_pegawai.php" method="post">
		<tr>
    	<td colspan="2" align="center"><b>FORM INPUT PEGAWAI</b></td>
    	</tr>
        <tr><td><input type="hidden" value="<?php echo $data['nip']; ?>" name="nip"/></td></tr>
    	<tr>
    	<td>NIP</td><td><input type="text" name="tnip" maxlength="15" value="<?php echo $data['nip']; ?>" readonly="readonly" />
    	</tr>
        <tr>
    	<td>NAMA</td><td><input type="text" name="tnama" width="240px" maxlength="30" value="<?php echo $data['nama']; ?>" required="required" />
    	</tr>
        <tr>
    	<td>KODE POS</td><td><input type="text" name="tpos" maxlength="6" value="<?php echo $data['kode_pos']; ?>"/>
    	</tr>
        <tr>
    	<td>NOMOR REKENING</td><td><input type="text" name="trek" maxlength="15" value="<?php echo $data['no_rek']; ?>"/></td>
    	</tr>
        <tr>
    	<td></td><td> <input type="submit" value="Update" /><input type="reset" value="Batal" /></td>
    	</tr>
	</form>
</table>
<?php } ?>
</body>
</html>