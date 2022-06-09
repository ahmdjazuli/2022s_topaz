<?php require('atas.php'); date_default_timezone_set('Asia/Kuala_Lumpur');
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
                                <label>Waktu (WITA)</label>
                                <input type="datetime-local" name="tgl" class="form-control" value="<?php echo date('Y-m-d\TH:i') ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <input class="form-control" type="text" name="distributor" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select name="idstok" class="form-control" required>
                                    <option disabled selected>Pilih</option>
                                  <?php
                                    $rendi = mysqli_query($kon, "SELECT * FROM stok ORDER BY namastok ASC");
                                      while($haikal = mysqli_fetch_array($rendi)) {
                                        echo "<option value='$haikal[idstok]'>$haikal[namastok]</option>";
                                      } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input class="form-control" type="number" name="jumlah" required>
                            </div>
                            <div class="form-group">
                                <label>Harga (Rp)</label>
                                <input class="form-control" type="number" name="harga" required>
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
    $tgl         = $_REQUEST['tgl'];
    $harga       = $_REQUEST['harga'];
    $idstok      = $_REQUEST['idstok'];
    $jumlah      = $_REQUEST['jumlah'];
    $distributor = $_REQUEST['distributor'];

    $tambah = mysqli_query($kon,"INSERT INTO masuk(tgl,harga,idstok,jumlah,distributor) VALUES ('$tgl','$harga','$idstok','$jumlah','$distributor')");
    if($tambah){
      ?> <script>alert("Berhasil Disimpan");window.location='masuk.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Disimpan");window.location='masuk_input.php';</script> <?php
    }
  }
?>