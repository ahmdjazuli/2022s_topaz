<?php require('header.php'); $id = $_GET['id'];
  $query = mysqli_query($kon, "SELECT * FROM user WHERE id = '$id'");
  $data = mysqli_fetch_array($query);
 ?>
    </div><div class="collection_text">PROFIL</div>
    <div class="container">
        <br><br><br><br><br><br><br><br><br><br><br><br><div class="row">
        </div>
        <form role="form" action="" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="form-group">
                            <label>Nama Instansi</label>
                            <input type="text" class="email-bt form-control" name="nama" value="<?= $data['nama'] ?>">
                            </div>
                            <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="email-bt form-control" name="username" value="<?=  $data['username'] ?>">
                            </div>
                            <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="email-bt form-control" name="password" value="<?=  $data['password'] ?>">
                            </div>
                            <button type="button" onclick="history.back()" class="btn btn-success btn-default">Kembali</button>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <input type="text" class="email-bt form-control" name="ttl" value="<?= $data['ttl'] ?>">
                            </div>
                            <div class="form-group">
                            <label>Telp</label>
                            <input type="text" class="email-bt form-control" name="telp" value="<?= $data['telp'] ?>" placeholder="Contoh : 62.....">
                            </div>
                            <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="email-bt form-control"><?= $data['alamat'] ?></textarea>
                            </div>
                            <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        </form>
    </div>
    <!-- /.container-fluid -->
<br>
<br>
<br>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script>   
        var hiding = document.querySelectorAll('.nice-select');
        hiding.forEach(function(e){ e.style.display = 'none'; });  
    </script> 
   </body>
</html>
<?php
    date_default_timezone_set('Asia/Kuala_Lumpur');

    if (isset($_POST['ubah'])) {
        $username   = $_REQUEST['username'];
        $nama       = $_REQUEST['nama'];
        $telp       = $_REQUEST['telp'];
        $alamat     = $_REQUEST['alamat'];
        $password     = $_REQUEST['password'];
        $ttl     = $_REQUEST['ttl'];

        $ubah = mysqli_query($kon,"UPDATE user SET password = '$password', username = '$username', nama = '$nama', telp = '$telp', alamat = '$alamat', ttl = '$ttl' WHERE id = '$id'");
        if($ubah){
          ?> <script>alert("Berhasil Diubah");window.location='profil.php?id=<?=$id?>';</script> <?php
        }else{
          ?> <script>alert("Gagal Diubah");window.location='profil.php?id=<?=$id?>';</script> <?php
        }
    }
 ?>