<?php require('atas.php'); $idproses = $_GET['idproses'];
  $query = mysqli_query($kon, "SELECT * FROM proses WHERE idproses = '$idproses'");
  $data = mysqli_fetch_array($query); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="proses.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
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
                                <input class="form-control" type="text" name="barangnya" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input class="form-control" type="number" name="jumlahnya" required>
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
    $barangnya = $_REQUEST['barangnya'];
    $jumlahnya = $_REQUEST['jumlahnya'];

    $tambah = mysqli_query($kon,"INSERT INTO sparepart (barangnya,jumlahnya,idproses) VALUES ('$barangnya','$jumlahnya','$idproses')");
    if($tambah){
      ?> <script>alert("Berhasil Disimpan");window.location='sparepart.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Disimpan");window.location='sparepart_input.php';</script> <?php
    }
  }
?>