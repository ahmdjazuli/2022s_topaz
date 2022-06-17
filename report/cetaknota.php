<?php 
	require "../kon.php"; require('../tgl_indo.php'); error_reporting(0);
	$notransaksi = $_GET['notransaksi'];
	$detail = mysqli_query($kon, "SELECT * FROM dataservice INNER JOIN barang ON dataservice.idbarang = barang.idbarang WHERE notransaksi = '$notransaksi'");
	$now = mysqli_fetch_array($detail);
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
	<p style="line-height: 5px;">Nama Instansi : <?= $now['namap'] ?></p>
	<p style="line-height: 5px;">Telp : <?= $now['telpp'] ?></p>
	<p style="line-height: 5px;">Alamat : <?= $now['alamatp'] ?></p>
</div>
<div style="width: 33%; float: left; font-weight: normal;">
	<h3>Cetak Nota <?= $notransaksi ?></h3>
	<p>Waktu Transaksi : <?= date('d/m/Y',strtotime($now['tgl'])) ?> WITA</p>
</div>
<div style="width: 33%; float: left; font-weight: normal; margin-top: 15px;">
	<img src="../images/logo.png" style="width: 60px; margin-right: 10px; float: left; ">
	<p style="margin-top:15px">Jl. Panglima Batur Timur RT. 02 RW.01 Ruko No. 6</p>
</div>
  <table class="table table-bordered table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
        <tr>
            <th>Nama Alat</th>
            <th>Kerusakan</th>
            <th>Solusi</th>
            <th>Biaya</th>
        </tr>
    </thead>
<tr class="text-center">
    <td><?= $now['namabarang'] ?></td>
	<td><?= $now['kerusakan'] ?></td>
    <td><?= $now['solusi'] ?></td>
    <td><?php
    $kuku = mysqli_query($kon, "SELECT * FROM proses WHERE notransaksi = '$now[notransaksi]'");
    $total = 0;
    while ($row = mysqli_fetch_array($kuku)) {
        $total += $row['biaya'];
    }; echo number_format($total,0,'.','.');
    ?></td>
</tr>
  </table>

<div class="container">
	<div style="width: 55%; float: LEFT;">
  <table class="table table-bordered table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
        <tr>
            <th>No</th>
            <th>Waktu (WITA)</th>
            <th>Keterangan</th>
            <th>Biaya (Rp)</th>
        </tr>
    </thead>
		<tbody>
    <?php $no=1; $query = mysqli_query($kon, "SELECT * FROM proses WHERE notransaksi = '$notransaksi' ORDER BY waktu ASC");
        while($data = mysqli_fetch_array($query)){ ?>
            <tr class="odd gradeX text-center" style="color:black">
                <td><?= $no++; ?></td>
                <td><?= date('d/m/Y,H:i',strtotime($data['waktu'])) ?></td>
                <td><?= $data['ket'] ?></td>
                <td><?= number_format($data['biaya'],0,'.','.') ?></td>
                </tr>
        <?php } ?>
		</tbody>
  </table>
  </div>
  <div style="float: RIGHT; width: 42%;">
  	Petunjuk atau Catatan :
  <ol>
  	<li style="font-weight: normal;">Pengembalian Service harus disertai dengan Nota.</li>
  	<li style="font-weight: normal;">Service yang selesai akan otomatis kami beritahukan melalui nomor Whatsapp Anda.</li>
  </ol>
  </div>
</div>
</div>	
<div class="container-fluid">
    <div id="kiri"></div>
	<div id="tengah">
        Mengetahui,<br><br><br>
        Penanggung Jawab
	</div>
	<div id="kanan">
		Menyetujui,<br><br><br>
		<?= $now['namap'] ?>
	</div>
</div>
<script>window.print()</script>