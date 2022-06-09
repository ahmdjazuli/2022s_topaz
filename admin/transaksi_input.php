<?php require('atas.php'); error_reporting(0); date_default_timezone_set('Asia/Kuala_Lumpur'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Tambah Barang Keluar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #01633c;color: white;">
                        Petunjuk
                    </div>
                    <div class="panel-body">
                        <p>Pilih Barang yang dibeli, kemudian klik tombol <button class="btn" style="background-color: #01633c;color: white;">+</button> untuk memasukkan ke keranjang.</p>
                        <p>Jika sudah selesai, klik tombol <button class="btn btn-success"><i class="fa fa-check"></i></button> </p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
                            <div class="form-group">
                            <label>Nama Barang</label>
                                <select name="idstok" class="form-control" onchange='ubah(this.value)' required>
                                    <option>Pilih</option>
                                  <?php
                                    $rendi = mysqli_query($kon, "SELECT * FROM stok ORDER BY namastok ASC");
                                    $a = "var harganya = new Array();\n;";
                                    $b = "var idstok = new Array();\n;";
                                    $c = "var stok = new Array();\n;";
                                      while($haikal = mysqli_fetch_array($rendi)) {
                                        echo "<option value='$haikal[idstok]'>$haikal[namastok]</option>";
                                        $a .= "harganya['" . $haikal['idstok'] . "'] = {harganya:'" . addslashes($haikal['harganya'])."'};\n";
                                        $b .= "idstok['" . $haikal['idstok'] . "'] = {idstok:'" . addslashes($haikal['idstok'])."'};\n";
                                        $c .= "stok['" . $haikal['idstok'] . "'] = {stok:'" . addslashes($haikal['stok'])."'};\n";
                                      } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harganya" id="harganya" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" name="jumlahku" id="stok" class="form-control" required>
                            </div>
                            <button type="submit" name="tambah" class="btn" style="background-color: #01633c;color: white;">+</button>
                            <button type="button" class="btn btn-default"><a href="pembeku_bersih.php" style="color: black; text-decoration: none">Bersihkan Daftar</a></button>
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTables-example">
                                    <thead class="success">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Sub Harga</th>
                                            <th><i class="fa fa-toggle-on"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; $totalbelanja = 0; foreach ($_SESSION['keranjang'] as $idstok => $jumlahnya) :
                                            $jenis = mysqli_query($kon, "SELECT * FROM stok WHERE idstok = '$idstok'"); 
                                            $data = mysqli_fetch_assoc($jenis); 
                                            $subharga = $data['harganya']*$jumlahnya;?>
                                            <tr class="odd gradeX">
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['namastok'] ?></td>
                                                <td><?= $data['merk'] ?></td>
                                                <td><?= $data['harganya'] ?></td>
                                                <td><?= $jumlahnya ?></td>
                                                <td><?= number_format($subharga,0,',','.') ?></td>
                                                <td> <a href="transaksi_hapus.php?idstok=<?=$data['idstok'] ?>" class="btn btn-sm" style="background-color: #01633c;color: white;"><i class="fa fa-trash"></i></a> </td>
                                            </tr>
                                        <?php $totalbelanja+=$subharga; ?>
                                        <?php endforeach ?>  
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">Total Pembayaran (Rp)</th>
                                        <th colspan="2">
                                        <span><?= number_format($totalbelanja,0,',','.') ?></span>
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="datetime-local" class="form-control" value="<?php echo date('Y-m-d\TH:i') ?>" name="tgl">
                            </div>
                            <div class="form-group">
                                <label>Nama Instansi</label>
                                <select name="id" class="form-control" required>
                                    <option value="">Pilih</option>
                                  <?php
                                    $rendi = mysqli_query($kon, "SELECT * FROM user WHERE level = 'Pelanggan' ORDER BY nama ASC");
                                      while($haikal = mysqli_fetch_array($rendi)) {
                                        echo "<option value='$haikal[id]'>$haikal[nama]</option>";
                                      } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Catatan</label>
                                <textarea class="form-control" name="catatan" required></textarea>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-check"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
<?php require('bawah.php') ?>
<?php
    if (isset($_POST['tambah'])) {
        $idstok   = $_REQUEST['idstok'];
        $jumlahku = $_REQUEST['jumlahku'];
        $harganya = $_REQUEST['harganya'];
        if (isset($_SESSION['keranjang'][$idstok])) {
          $_SESSION['keranjang'][$idstok] += $jumlahku;
        }else{
          $_SESSION['keranjang'][$idstok] = $jumlahku;
        }echo "<script>window.location = 'transaksi_input.php';</script>";
    }

    if (isset($_POST['simpan'])) {
        $id          = $_REQUEST['id'];
        $tgl         = $_REQUEST['tgl'];
        $catatan     = $_REQUEST['catatan'];
        $notransaksi = date('Ymds');
        $hasil = mysqli_query($kon,"INSERT INTO transaksi (notransaksi,id,total,tgl,catatan) VALUES ('$notransaksi','$id','$totalbelanja','$tgl','$catatan')");

        foreach ($_SESSION['keranjang'] as $idstok => $jumlahnya) {
            $query     = mysqli_query($kon, "SELECT * FROM stok WHERE idstok = '$idstok'");
            $ambil     = mysqli_fetch_array($query);
            $namastok1 = $ambil['namastok'];
            $harga1    = $ambil['harganya'];
            $merk1     = $ambil['merk'];
            $subharga  = $jumlahnya * $harga1;
            $detail = mysqli_query($kon,"INSERT INTO detail (idstok, notransaksi, namastok1, merk1, jumlah1, harga1, subharga) VALUES ('$idstok','$notransaksi','$namastok1','$merk1','$jumlahnya','$harga1','$subharga')");
        }
        if($detail){
            ?> <script>alert('Berhasil Disimpan'); window.location = 'transaksi.php';</script><?php
            unset($_SESSION['keranjang']);
        }else{
            ?> <script>alert('Gagal, cek kembali!.'); window.location = 'transaksi_input.php';</script><?php
        }
    }
?>

<script>   
  <?php echo $a;echo $b;echo $c; ?>
  function ubah(id){  
    document.getElementById('harganya').value = harganya[id].harganya; 
    document.getElementById('stok').max       = stok[id].stok; 
  };   
</script> 