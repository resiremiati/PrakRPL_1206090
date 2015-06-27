<?php
mysql_connect ("localhost","root","");
mysql_select_db ("file_akses");
	$kode=$_GET['id'];
	$hapus= mysql_query ("delete from pegawai where nip='$kode'");
	echo "<script>alert('Data dengan NIM $kode telah terapus')</script>";
	echo "<meta http-equiv='refresh'; content='0; url=tampil_pegawai.php'>";
?>