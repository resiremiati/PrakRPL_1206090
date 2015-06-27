<?php
mysql_connect ("localhost","root","");
mysql_select_db ("file_akses");
	$kode=$_POST['nip'];
	$nip=$_POST['tnip'];
	$nama=$_POST['tnama'];
	$pos=$_POST['tpos'];
	$rek=$_POST['trek'];
		$update=mysql_query("update pegawai set nip='$nip', nama='$nama', kode_pos='$pos', no_rek='$rek' where nip='$kode'");
		//message box notif
		echo "<script>alert('Data pegawai telah terupdate')</script>";			
		echo "<meta http-equiv='refresh'; content='0; url=tampil_pegawai.php'>";

?>