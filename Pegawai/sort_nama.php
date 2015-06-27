<?php
mysql_connect ("localhost","root","");
mysql_select_db ("file_akses");
	$tampil=mysql_query("select * from pegawai");
?>
<table border="1" width="200px" align="center">
	<tr><td align="center" style="font-size:20px"><b>Nama Pegawai</b></td></tr>
	<?php
	while ($data=mysql_fetch_array($tampil))
		{
	 ?>
    	<tr><td align="center"><?php echo $data['nama']?></td></tr>
	<?php } ?>
      
    	
</table>
<center><button><a href="tampil_pegawai.php">Kembali</a></button></center>