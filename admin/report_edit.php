<?php require('atas.php'); $id = $_GET['id'];
  $query = mysqli_query($kon, "SELECT * FROM servicereport WHERE id = '$id'");
  $data = mysqli_fetch_array($query);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="report.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control" value="<?= $data['tgl'] ?>" type="date" name="tgl" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control" value="<?= $data['ket'] ?>" type="text" name="ket" required>
                            </div>
                            <div class="form-group">
                                <label>Ubah Berkas : <a href="../images/<?= $data['file'] ?>" target="_blank"><?= $data['file'] ?></a></label>
                                <input class="form-control" type="file" name="file1">
                                <input type="hidden" name="fileLama" value="<?= $data['file'] ?>">
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
     $tgl = $_REQUEST['tgl'];
     $ket = $_REQUEST['ket'];
     $fileLama = $_REQUEST['fileLama'];
     $file  = $_FILES['file1']['error'];
     $temp1 = $_FILES['file1']['tmp_name'];
     $file1 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file1']['name']);

    if($file){
        $ubah = mysqli_query($kon,"UPDATE servicereport SET tgl = '$tgl', ket = '$ket', file = '$fileLama' WHERE id = '$id'");
    }else{
        unlink("../images/".$fileLama);
        $ubah = mysqli_query($kon,"UPDATE servicereport SET tgl = '$tgl', ket = '$ket', file = '$file1' WHERE id = '$id'");
        move_uploaded_file($temp1, '../images/'.$file1);
    }
    
    if($ubah){
      ?> <script>alert("Berhasil Diubah");window.location='report.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Diubah");window.location='report.php';</script> <?php
    }
  }
?>