<?php
	error_reporting(0);
	require_once("../kon.php");
	?> <script>alert('Berhasil Dihapus');</script> <?php
	// pelanggan
	if (isset($_GET['id']) AND $_GET['level'] == 'pelanggan') {
		mysqli_query($kon, "DELETE FROM user WHERE id='$_REQUEST[id]'");
		?> <script>window.location='user.php';</script> <?php
	// gaji
	}else if (isset($_GET['idgaji'])) {
		mysqli_query($kon, "DELETE FROM gaji WHERE idgaji='$_REQUEST[idgaji]'");
		?> <script>window.location='gaji.php';</script> <?php
	// barang
	}else if (isset($_GET['idbarang'])) {
		mysqli_query($kon, "DELETE FROM barang WHERE idbarang='$_REQUEST[idbarang]'");
		?> <script>window.location='barang.php';</script> <?php
	// service
	}else if (isset($_GET['notransaksi']) AND $_GET['m'] == 'masuk') {
		mysqli_query($kon, "DELETE FROM dataservice WHERE notransaksi='$_REQUEST[notransaksi]'");
		?> <script>window.location='service.php';</script> <?php
	// karyawan
	}else if (isset($_GET['id']) AND $_GET['level'] == 'karyawan') {
		mysqli_query($kon, "DELETE FROM user WHERE id='$_REQUEST[id]'");
		?> <script>window.location='karyawan.php';</script> <?php
	// servicereport
	}else if (isset($_GET['id']) AND $_GET['level'] == 'report') {
		$query = mysqli_query($kon, "SELECT * FROM servicereport WHERE id='$_REQUEST[id]'");
		$data = mysqli_fetch_array($query);unlink('../images/'.$data['file']);
		mysqli_query($kon, "DELETE FROM servicereport WHERE id='$_REQUEST[id]'");
		?> <script>window.location='report.php';</script> <?php
	// jadwal
	}else if (isset($_GET['idjadwal'])) {
		mysqli_query($kon, "DELETE FROM jadwal WHERE idjadwal='$_REQUEST[idjadwal]'");
		?> <script>window.location='jadwal.php';</script> <?php
	// stok
	}else if (isset($_GET['idstok'])) {
		mysqli_query($kon, "DELETE FROM stok WHERE idstok='$_REQUEST[idstok]'");
		?> <script>window.location='stok.php';</script> <?php
	// masuk
	}else if (isset($_GET['idmasuk'])) {
		mysqli_query($kon, "DELETE FROM masuk WHERE idmasuk='$_REQUEST[idmasuk]'");
		?> <script>window.location='masuk.php';</script> <?php
	// qc
	}else if (isset($_GET['idqc'])) {
		mysqli_query($kon, "DELETE FROM qc WHERE idqc='$_REQUEST[idqc]'");
		?> <script>window.location='qc.php';</script> <?php
	// transaksi
	}else if (isset($_GET['notransaksi']) AND $_GET['m'] == 'keluar') {
		mysqli_query($kon, "DELETE FROM transaksi WHERE notransaksi='$_REQUEST[notransaksi]'");
		?> <script>window.location='transaksi.php';</script> <?php
	// jadwal
	}
?>