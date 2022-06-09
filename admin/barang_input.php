<?php require('atas.php') ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="barang.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label>Kode Alat</label>
                                <input class="form-control" type="text" name="kode" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="namabarang" required>
                            </div>
                            <div class="form-group">
                                <label>Satuan</label>
                                <input class="form-control" type="text" name="satuan" placeholder="Contoh : Unit" required>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <select name="merk" class="form-control" required>
                                    <option value="77 Elektronika">77 Elektronika</option>
                                    <option value="Alcor">Alcor</option>
                                    <option value="Cormay">Cormay</option>
                                    <option value="Elitech">Elitech</option>
                                    <option value="Sansure">Sansure</option>
                                    <option value="Norma Diagnostika">Norma Diagnostika</option>
                                    <option value="QL Systems">QL Systems</option>
                                    <option value="West Medica">West Medica</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                <select name="tipe" class="form-control" required>
                                    <option value="LabUReader Plus">LabUReader Plus</option>
                                    <option value="UriSed Mini">UriSed Mini</option>
                                    <option value="LABUMAT 2">LABUMAT 2</option>
                                    <option value="URISED 3">URISED 3</option>
                                    <option value="LABUMAT 2 & URISED 3">LABUMAT 2 & URISED 3</option>
                                    <option value="iSed">iSed</option>
                                    <option value="Multi+">Multi+</option>
                                    <option value="Elite InGenius">Elite InGenius</option>
                                    <option value="SLAN96P">SLAN96P</option>
                                    <option value="Icon 3">Icon 3</option>
                                    <option value="Icon 5">Icon 5</option>
                                    <option value="MX2500">MX2500</option>
                                    <option value="TINC35">TINC35</option>
                                    <option value="Vision Hema Pro / Vision Hema 8">Vision Hema Pro / Vision Hema 8</option>
                                </select>
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
    $namabarang = $_REQUEST['namabarang'];
    $satuan     = $_REQUEST['satuan'];
    $merk       = $_REQUEST['merk'];
    $tipe       = $_REQUEST['tipe'];
    $kode       = $_REQUEST['kode'];

    $tambah = mysqli_query($kon,"INSERT INTO barang(namabarang,satuan,merk,tipe,kode) VALUES ('$namabarang','$satuan','$merk','$tipe','$kode')");
    if($tambah){
      ?> <script>alert("Berhasil Disimpan");window.location='barang.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Disimpan");window.location='barang_input.php';</script> <?php
    }
  }
?>