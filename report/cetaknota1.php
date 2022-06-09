<?php 
	require "../kon.php"; require('../tgl_indo.php'); error_reporting(0);
	$notransaksi = $_GET['notransaksi'];
	$detail = mysqli_query($kon, "SELECT * FROM detail JOIN stok ON detail.idstok = stok.idstok WHERE notransaksi = '$notransaksi'");
	$now = mysqli_fetch_array($detail);
	$detail2 = mysqli_query($kon, "SELECT * FROM transaksi JOIN user ON transaksi.id = user.id WHERE notransaksi = '$notransaksi'");
	$now2 = mysqli_fetch_array($detail2);
?>
<!DOCTYPE html>
<html lang="id, in">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../admin/css/bootstrap.min.css">
  	<link rel="icon" type="image/png" href="../images/logo.png">
    <title>Topaz Borneo Utara</title>
	<style>
		hr{ border: 2px; border-style: solid; width: 82%; } .wew{ margin-right: 15%; } .wow{ margin-left: 9%; float: left } #kiri{width: 20%; height: 100px; float:left; font-weight: normal; } #tengah{width: 50%; height: 100px; float:left; font-weight: normal; } #kanan{width: 30%; height: 100px; float:right; font-weight: normal; }  th{text-align:center;}
	</style>
</head>
<body><br>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<div class="container">
<div style="width: 33%; float: left; margin-top: 35px; font-weight: normal;">
	<p style="line-height: 5px;">Nama Instansi : <?= $now2['nama'] ?></p>
	<p style="line-height: 5px;">Telp : <?= $now2['telp'] ?></p>
	<p>Alamat : <?= $now2['alamat'] ?></p>
</div>
<div style="width: 33%; float: left; font-weight: normal;">
	<h3>Cetak Nota <?= $notransaksi ?></h3>
	<p>Waktu Transaksi : <?= date('d/m/Y',strtotime($now2['tgl'])) ?> WITA</p>
</div>
<div style="width: 33%; float: left; font-weight: normal; margin-top: 15px;">
	<img src="../images/logo.png" style="width: 60px; margin-right: 10px; float: left; ">
	<p style="margin-top:15px">Jl. Panglima Batur Timur RT. 02 RW.01 Ruko No. 6</p>
</div>
  <table class="table table-bordered table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
        <tr>
            <th>Nama Barang</th>
            <th>Merk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subharga</th>
        </tr>
    </thead>
<tbody>
<?php while($data = mysqli_fetch_array($detail)){ ?>
<tr class="text-center">
    <td><?= $data['namastok1'] ?></td>
	<td><?= $data['merk1'] ?></td>
	<td><?= $data['jumlah1'] ?></td>
    <td><?= number_format($data['harga1'],0,'.','.')  ?></td>
    <td><?= number_format($data['subharga'],0,'.','.')  ?></td>
</tr>
<?php } ?>
</tbody>
  </table>
</div>	
<div class="container-fluid">
    <div id="kiri"></div>
	<div id="kanan">
		Mengetahui,<br><br><br>
        Penanggung Jawab
	</div>
</div>
<script>window.print()</script>