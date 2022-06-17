<?php require('atas.php'); $idsparepart = $_GET['idsparepart'];
  $query = mysqli_query($kon, "SELECT *,sparepart.waktu AS waktuku FROM sparepart JOIN proses ON sparepart.idproses = proses.idproses WHERE idsparepart = '$idsparepart'");
  $data = mysqli_fetch_array($query);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="sparepart.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label>No Transaksi</label>
                                <input type="text" value="<?= $data['notransaksi'] ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" value="<?= $data['ket'] ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input class="form-control" type="text" value="<?= $data['barangnya'] ?>" name="barangnya" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input class="form-control" type="number" value="<?= $data['jumlahnya'] ?>" name="jumlahnya" required>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-check-square"></i> Simpan</button>
                            <button type="reset" class="btn btn-success"><i class="fa fa-refresh"></i> Ulangi</button>
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php require('bawah.php') ?>
<?php
  if (isset($_POST['simpan'])) {
    $barangnya = $_REQUEST['barangnya'];
    $jumlahnya = $_REQUEST['jumlahnya'];

    $ubah = mysqli_query($kon,"UPDATE sparepart SET barangnya = '$barangnya', jumlahnya = '$jumlahnya' WHERE idsparepart = '$idsparepart'");
    if($ubah){
      ?> <script>alert("Berhasil Diubah");window.location='sparepart.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Diubah");window.location='sparepart.php';</script> <?php
    }
  }
?>