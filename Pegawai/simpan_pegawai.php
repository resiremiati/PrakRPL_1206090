<?php
//koneksi ke localhost
mysql_connect ("localhost","root","");
//koneksi ke database
mysql_select_db ("file_akses");
	$nip=$_POST['tnip'];
	$nama=$_POST['tnama'];
	$pos=$_POST['tpos'];
	$rek=$_POST['trek'];
	$cek=mysql_query("select *from pegawai where nip='$nip'");
	$data=mysql_fetch_array($cek);
		if ($nip == $data['nip'])
			echo "<script>alert('Nip Yang Anda Input Sudah Terdaftar');
			self.history.go(-1)</script>";
		else
			echo "<script>alert('Data Tersimpan')</script>";
			$simpan=mysql_query("insert into pegawai values('$nip','$nama','$pos','$rek')");			
			echo "<meta http-equiv='refresh'; content='0; url=tampil_pegawai.php'>";
?>