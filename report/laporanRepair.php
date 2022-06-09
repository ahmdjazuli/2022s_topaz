<?php 
require "../kon.php";
	$bulan = $_REQUEST['bulan'];
	$tahun = $_REQUEST['tahun'];
	if($bulan AND $tahun){
		$result = mysqli_query($kon, "SELECT * FROM inventorirepair INNER JOIN inventorirusak ON inventorirepair.idinventorirusak = inventorirusak.idinventorirusak INNER JOIN inventori ON inventorirusak.idinventori = inventori.idinventori WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' ORDER BY tgl ASC");
	}else if($tahun AND empty($bulan)){
		$result = mysqli_query($kon, "SELECT * FROM inventorirepair INNER JOIN inventorirusak ON inventorirepair.idinventorirusak = inventorirusak.idinventorirusak INNER JOIN inventori ON inventorirusak.idinventori = inventori.idinventori WHERE YEAR(tgl) = '$tahun' ORDER BY tgl ASC");
	}

	if(mysqli_num_rows($result)==0){
    ?> <script>alert('Data Tidak Ditemukan');window.location='../admin/repair.php'</script> <?php
  }
?>
<?php require('atas.php') ?>
<style type="text/css" media="print"> @page { size: portrait; } </style>
<h2 style="text-align: center;">Laporan Inventori Perbaikan</h2>
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
				<th>Tanggal Diperbaiki</th>
				<th>Tanggal Rusak</th>
				<th>Nama (Merk)</th>
				<th>Keterangan</th>
				<th>Jumlah</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
		<td><?= $i++; ?></td>
		<td><?= date('d/m/Y',strtotime($data['tgl'])); ?></td>
    <td><?= date('d/m/Y',strtotime($data['tglrusak'])); ?></td>
    <td><?= $data['namainven'].' ('.$data['merk'].')'; ?></td>
    <td><?= $data['catatan'] ?></td>
    <td><?= $data['repair'] ?></td>
</tr>
<?php endwhile; ?>
  </table>
</div>	
<?php require('zzz.php') ?>