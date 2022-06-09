<?php require('atas.php'); $idjadwal = $_GET['idjadwal'];
  $query = mysqli_query($kon, "SELECT * FROM jadwal INNER JOIN user ON jadwal.id = user.id INNER JOIN barang ON jadwal.idbarang = barang.idbarang WHERE idjadwal = '$idjadwal'");
  $data = mysqli_fetch_array($query);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="jadwal.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
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
                                <label>Nama Alat</label>
                                <select class="form-control" name="idbarang" required>
                                    <option value="<?= $data['idbarang'] ?>"><?= $data['namabarang'] ?></option>
                                  <?php
                                    $rendi = mysqli_query($kon, "SELECT * FROM barang ORDER BY namabarang ASC");
                                      while($haikal = mysqli_fetch_array($rendi)) {
                                        echo "<option value='$haikal[idbarang]'>$haikal[namabarang]</option>";
                                      } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Instansi</label>
                                <select class="form-control" name="instansi" required>
                                    <option value="<?= $data['instansi'] ?>"><?= $data['instansi'] ?></option>
                                  <?php
                                    $rendi = mysqli_query($kon, "SELECT * FROM user WHERE level = 'Pelanggan' ORDER BY nama ASC");
                                      while($haikal = mysqli_fetch_array($rendi)) {
                                        echo "<option value='$haikal[nama]'>$haikal[nama]</option>";
                                      } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Petugas</label>
                                <select class="form-control" name="id" required>
                                    <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                  <?php
                                    $rendi = mysqli_query($kon, "SELECT * FROM user WHERE tugas = 'Petugas' ORDER BY nama ASC");
                                      while($haikal = mysqli_fetch_array($rendi)) {
                                        echo "<option value='$haikal[id]'>$haikal[nama]</option>";
                                      } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cara Pemeliharaan</label>
                                <input class="form-control" type="text" name="cara" value="<?= $data['cara'] ?>" required>
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
    $tgl      = $_REQUEST['tgl'];
    $id       = $_REQUEST['id'];
    $ni       = $_REQUEST['instansi'];
    $cara     = $_REQUEST['cara'];
    $idbarang = $_REQUEST['idbarang'];

    $ubah = mysqli_query($kon,"UPDATE jadwal SET tgl = '$tgl', id = '$id',instansi = '$ni', cara = '$cara', idbarang = '$idbarang' WHERE idjadwal = '$idjadwal'");
    if($ubah){
      ?> <script>alert("Berhasil Diubah");window.location='jadwal.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Diubah");window.location='jadwal.php';</script> <?php
    }
  }
?>