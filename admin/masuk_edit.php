<?php require('atas.php'); $idmasuk = $_GET['idmasuk'];
  $query = mysqli_query($kon, "SELECT * FROM masuk JOIN stok ON masuk.idstok = stok.idstok WHERE idmasuk = '$idmasuk'");
  $data = mysqli_fetch_array($query);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="masuk.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" value="<?= $data['namastok'] ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Waktu (WITA)</label>
                                <input type="datetime-local" name="tgl" class="form-control" value="<?php echo date('Y-m-d\TH:i',strtotime($data['tgl'])) ?>">
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <input class="form-control" type="text" name="distributor" value="<?= $data['distributor'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input class="form-control" type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Harga (Rp)</label>
                                <input class="form-control" type="number" name="harga" value="<?= $data['harga'] ?>" required>
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
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $tgl         = $_REQUEST['tgl'];
    $harga       = $_REQUEST['harga'];
    $jumlah      = $_REQUEST['jumlah'];
    $distributor = $_REQUEST['distributor'];

    $ubah = mysqli_query($kon,"UPDATE masuk SET tgl = '$tgl', harga = '$harga', jumlah = '$jumlah', distributor = '$distributor' WHERE idmasuk = '$idmasuk'");
    if($ubah){
      ?> <script>alert("Berhasil Diubah");window.location='masuk.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Diubah");window.location='masuk.php';</script> <?php
    }
  }
?>