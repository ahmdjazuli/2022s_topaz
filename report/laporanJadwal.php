<?php 
require "../kon.php";
	$bulan = $_REQUEST['bulan'];
	$tahun = $_REQUEST['tahun'];
	if($bulan AND $tahun){
		$result = mysqli_query($kon, "SELECT * FROM jadwal INNER JOIN user ON jadwal.id = user.id INNER JOIN barang ON jadwal.idbarang = barang.idbarang WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' ORDER BY tgl ASC");
	}else if($tahun AND empty($bulan)){
		$result = mysqli_query($kon, "SELECT * FROM jadwal INNER JOIN user ON jadwal.id = user.id INNER JOIN barang ON jadwal.idbarang = barang.idbarang WHERE YEAR(tgl) = '$tahun' ORDER BY tgl ASC");
	}
?>
<?php require('atas.php') ?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h2 style="text-align: center;">Laporan Jadwal Maintenance</h2>
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
        <th>Tanggal</th>
        <th>Nama Alat</th>
        <th>Nama Instansi</th>
        <th>Petugas</th>
        <th>Cara Pemeliharaan</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= date('d/m/Y',strtotime($data['tgl'])) ?></td>
    <td><?= $data['namabarang'] ?></td>
    <td><?= $data['instansi'] ?></td>
    <td><?= $data['nama'] ?></td>
    <td><?= $data['cara'] ?></td>
</tr>
<?php endwhile; ?>
  </table>
</div>	
<?php require('zzz.php') ?>