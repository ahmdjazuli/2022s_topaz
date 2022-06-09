<?php require('atas.php'); $notransaksi = $_GET['notransaksi'];
  $query = mysqli_query($kon, "SELECT * FROM dataservice INNER JOIN barang ON dataservice.idbarang = barang.idbarang WHERE notransaksi = '$notransaksi'");
  $data = mysqli_fetch_array($query);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="service.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
                             <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control" type="date" name="tgl" value="<?= $data['tgl'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Barang</label>
                                <input class="form-control" value="<?= $data['namabarang'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Kerusakan</label>
                                <input class="form-control" name="kerusakan" value="<?= $data['kerusakan'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Solusi</label>
                                <input class="form-control" name="solusi" value="<?= $data['solusi'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Biaya</label>
                                <input class="form-control" name="biaya" value="<?= $data['biaya'] ?>" required>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-check-square"></i> Ubah</button>
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
    $biaya     = $_REQUEST['biaya'];
    $solusi    = $_REQUEST['solusi'];
    $tgl       = $_REQUEST['tgl'];
    $kerusakan = $_REQUEST['kerusakan'];

    $ubah = mysqli_query($kon,"UPDATE dataservice SET biaya = '$biaya', solusi = '$solusi', tgl = '$tgl', kerusakan = '$kerusakan' WHERE notransaksi = '$notransaksi'");
    if($ubah){
      ?> <script>alert("Berhasil Diubah");window.location='service.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Diubah");window.location='service.php';</script> <?php
    }
  }
?>