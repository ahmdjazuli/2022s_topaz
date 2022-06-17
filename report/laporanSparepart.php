<?php 
require "../kon.php";
	$bulan = $_REQUEST['bulan'];
	$tahun = $_REQUEST['tahun'];
	if($bulan AND $tahun){
		$result = mysqli_query($kon, "SELECT *,sparepart.waktu AS waktuku FROM sparepart JOIN proses ON sparepart.idproses = proses.idproses WHERE MONTH(sparepart.waktu) = '$bulan' AND YEAR(sparepart.waktu) = '$tahun' ORDER BY sparepart.waktu DESC");
	}else if($tahun AND empty($bulan)){
		$result = mysqli_query($kon, "SELECT *,sparepart.waktu AS waktuku FROM sparepart JOIN proses ON sparepart.idproses = proses.idproses WHERE YEAR(sparepart.waktu) = '$tahun' ORDER BY sparepart.waktu DESC");
	}


?>
<?php require('atas.php') ?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h2 style="text-align: center;">Laporan Sparepart</h2>
<h4 style="text-align: center;">
	<?php 
		if($bulan AND $tahun){
			echo "Bulan <b>". $namabulan."</b> pada Tahun <b>".$tahun."</b>";
		}else if($tahun AND empty($bulan)){
			echo "Tahun ". $tahun;
		}
	?>
</h4>
<h5 class="text-center">Dicetak pada tanggal : <?= date('Y-m-d') ?></h5>
<br>
<div class="container">
  <table class="table table-bordered table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>No Transaksi</th>
        <th>Waktu (WITA)</th>
        <th>Keterangan</th>
        <th>Barang yang Dipesan</th>
        <th>Jumlah</th>
        <th>Harga (Rp)</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= $data['notransaksi'] ?></td>
    <td><?= date('d/m/Y,H:i',strtotime($data['waktuku'])) ?></td>
    <td><?= $data['ket'] ?></td>
    <td><?= $data['barangnya'] ?></td>
    <td><?= $data['jumlahnya'] ?></td>
    <td><?php
    $kuku = mysqli_query($kon, "SELECT * FROM proses WHERE idproses = '$data[idproses]'");
    $row = mysqli_fetch_array($kuku);
    echo number_format($row['biaya'],0,'.','.');
    ?></td>
</tr>
<?php endwhile; ?>
  </table>
</div>	
<?php require('zzz.php') ?>