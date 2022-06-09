<?php 
require "../kon.php";
	$bulan = $_REQUEST['bulan'];
	$tahun = $_REQUEST['tahun'];
	if($bulan AND $tahun){
		$result = mysqli_query($kon, "SELECT * FROM qc JOIN masuk ON qc.idmasuk = masuk.idmasuk JOIN stok ON masuk.idstok = stok.idstok JOIN user ON qc.id = user.id WHERE MONTH(tglqc) = '$bulan' AND YEAR(tglqc) = '$tahun' ORDER BY tglqc ASC");
	}else if($tahun AND empty($bulan)){
		$result = mysqli_query($kon, "SELECT * FROM qc JOIN masuk ON qc.idmasuk = masuk.idmasuk JOIN stok ON masuk.idstok = stok.idstok JOIN user ON qc.id = user.id WHERE YEAR(tglqc) = '$tahun' ORDER BY tglqc ASC");
	}

	if(mysqli_num_rows($result)==0){
    ?> <script>alert('Data Tidak Ditemukan');window.location='../admin/qc.php'</script> <?php
  }
?>
<?php require('atas.php') ?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h2 style="text-align: center;">Laporan Quality Check</h2>
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
        <th>Waktu (WITA)</th>
        <th>Supplier</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Nama Teknisi</th>
        <th>Kesimpulan</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
		<td><?= $i++; ?></td>
		<td><?= date('d/m/Y H:i',strtotime($data['tglqc'])); ?></td>
    <td><?= $data['distributor'] ?></td>
    <td><?= $data['namastok'] ?></td>
    <td><?= $data['jumlah'] ?></td>
    <td><?= $data['nama'] ?></td>
    <td><?= $data['kesimpulan']; ?></td>
</tr>
<?php endwhile; ?>
  </table>
</div>	
<?php require('zzz.php') ?>