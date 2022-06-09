<?php require('atas.php'); date_default_timezone_set('Asia/Kuala_Lumpur');
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="qc.php" style="color: white; text-decoration: none"> <i class="fa fa-angle-left"></i> Kembali</a></button></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                         <form role="form" action="" method="POST">
<div class="form-group">
    <label>Waktu (WITA)</label>
    <input type="datetime-local" name="tglqc" class="form-control" value="<?php echo date('Y-m-d\TH:i') ?>" required>
</div>
<div class="form-group">
    <label>Nama Barang Masuk</label>
    <select name="idmasuk" class="form-control" required onchange='ubah(this.value)'>
        <option disabled selected>Pilih</option>
      <?php
        $rendi = mysqli_query($kon, "SELECT * FROM masuk JOIN stok ON masuk.idstok = stok.idstok WHERE idmasuk NOT IN (SELECT idmasuk FROM qc) ORDER BY tgl DESC");
        $a    = "var jumlah = new Array();\n;";
        $b    = "var idstok = new Array();\n;";
          while($j = mysqli_fetch_array($rendi)) {
            echo "<option value='$j[idmasuk]'>$j[namastok] ($j[distributor])</option>";
            $a .= "jumlah['" . $j['idmasuk'] . "'] = {jumlah:'" . addslashes($j['jumlah'])."'};\n";
            $b .= "idstok['" . $j['idmasuk'] . "'] = {idstok:'" . addslashes($j['idstok'])."'};\n";
          } 
        ?>
    </select>
    <input type="hidden" id="jumlah" name="kuantiti"><input type="hidden" id="idstok" name="idstok">
</div>
<div class="form-group">
    <label>Nama Teknisi</label>
    <select name="id" class="form-control" required>
        <option disabled selected>Pilih</option>
      <?php
        $ketapel = mysqli_query($kon, "SELECT * FROM user WHERE tugas = 'Teknisi'");
          while($bisalah = mysqli_fetch_array($ketapel)) {
            echo "<option value='$bisalah[id]'>$bisalah[nama]</option>";
          } 
        ?>
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
    $tglqc      = $_REQUEST['tglqc'];
    $idmasuk    = $_REQUEST['idmasuk'];
    $kuantiti   = $_REQUEST['kuantiti'];
    $idstok     = $_REQUEST['idstok'];
    $id         = $_REQUEST['id'];

    $tambah = mysqli_query($kon,"INSERT INTO qc(id,idstok,kuantiti,tglqc,idmasuk,kesimpulan) VALUES ('$id','$idstok','$kuantiti','$tglqc','$idmasuk','Menunggu')");
    if($tambah){
      ?> <script>alert("Berhasil Disimpan");window.location='qc.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Disimpan");window.location='qc_input.php';</script> <?php
    }
  }
?>
<script>   
  <?php echo $a.$b; ?>
  function ubah(id){  
      document.getElementById('jumlah').value = jumlah[id].jumlah; 
      document.getElementById('idstok').value = idstok[id].idstok; 
  };   
</script> 