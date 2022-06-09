<?php require('atas.php'); $idqc = $_GET['idqc'];
  $query = mysqli_query($kon, "SELECT * FROM qc JOIN masuk ON qc.idmasuk = masuk.idmasuk JOIN stok ON masuk.idstok = stok.idstok WHERE idqc = '$idqc'");
  $data = mysqli_fetch_array($query); date_default_timezone_set('Asia/Kuala_Lumpur');
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
    <label>Nama Barang</label>
    <input type="text" value="<?= $data['namastok'].' - '.$data['distributor']  ?>" readonly class="form-control">
</div>
<h3><u>1. Uji Pergerakan Mekanik/Fluidic</u></h3>
<div class="form-group">
    <label>Pergerakan cairan Reagent Diluent, Lyse, Cleaner</label><br>
    <?php if($data['mekanik1'] == 1){ ?>
        <input type="radio" name="mekanik1" value="1" checked> Baik
        <input type="radio" name="mekanik1" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik1" value="1"> Baik
        <input type="radio" name="mekanik1" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Fungsi Waste 1 dan 2</label><br>
    <?php if($data['mekanik2'] == 1){ ?>
        <input type="radio" name="mekanik2" value="1" checked> Baik
        <input type="radio" name="mekanik2" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik2" value="1"> Baik
        <input type="radio" name="mekanik2" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Pergerakan Open Sampling Tip</label><br>
    <?php if($data['mekanik3'] == 1){ ?>
        <input type="radio" name="mekanik3" value="1" checked> Baik
        <input type="radio" name="mekanik3" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik3" value="1"> Baik
        <input type="radio" name="mekanik3" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Posisi Sample Tube terhadap Closed Mode Hole</label><br>
    <?php if($data['mekanik4'] == 1){ ?>
        <input type="radio" name="mekanik4" value="1" checked> Baik
        <input type="radio" name="mekanik4" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik4" value="1"> Baik
        <input type="radio" name="mekanik4" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Open Wash Head</label><br>
    <?php if($data['mekanik5'] == 1){ ?>
        <input type="radio" name="mekanik5" value="1" checked> Baik
        <input type="radio" name="mekanik5" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik5" value="1"> Baik
        <input type="radio" name="mekanik5" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Pergerakan Sample Rotor (Icon5 Closed)</label><br>
    <?php if($data['mekanik6'] == 1){ ?>
        <input type="radio" name="mekanik6" value="1" checked> Baik
        <input type="radio" name="mekanik6" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik6" value="1"> Baik
        <input type="radio" name="mekanik6" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Posisi Sample Tube terhadap Closed Mode Hole (Icon5 Closed)</label><br>
    <?php if($data['mekanik7'] == 1){ ?>
        <input type="radio" name="mekanik7" value="1" checked> Baik
        <input type="radio" name="mekanik7" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik7" value="1"> Baik
        <input type="radio" name="mekanik7" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Posisi Sample Needle terhadap Sample Tube (Icon5 Closed)</label><br>
    <?php if($data['mekanik8'] == 1){ ?>
        <input type="radio" name="mekanik8" value="1" checked> Baik
        <input type="radio" name="mekanik8" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="mekanik8" value="1"> Baik
        <input type="radio" name="mekanik8" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<h3><u>2. Uji Proses</u></h3>
<div class="form-group">
    <label>StartUp/Booting</label><br>
    <?php if($data['proses1'] == 1){ ?>
        <input type="radio" name="proses1" value="1" checked> Baik
        <input type="radio" name="proses1" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses1" value="1"> Baik
        <input type="radio" name="proses1" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Power Supply/Adaptor</label><br>
    <?php if($data['proses2'] == 1){ ?>
        <input type="radio" name="proses2" value="1" checked> Baik
        <input type="radio" name="proses2" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses2" value="1"> Baik
        <input type="radio" name="proses2" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Touch Screen</label><br>
    <?php if($data['proses3'] == 1){ ?>
        <input type="radio" name="proses3" value="1" checked> Baik
        <input type="radio" name="proses3" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses3" value="1"> Baik
        <input type="radio" name="proses3" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>QR-Code Reader</label><br>
    <?php if($data['proses4'] == 1){ ?>
        <input type="radio" name="proses4" value="1" checked> Baik
        <input type="radio" name="proses4" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses4" value="1"> Baik
        <input type="radio" name="proses4" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Inialisasi</label><br>
    <?php if($data['proses5'] == 1){ ?>
        <input type="radio" name="proses5" value="1" checked> Baik
        <input type="radio" name="proses5" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses5" value="1"> Baik
        <input type="radio" name="proses5" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Kebocoran pada bagian dalam dan luar alat</label><br>
    <?php if($data['proses6'] == 1){ ?>
        <input type="radio" name="proses6" value="1" checked> Baik
        <input type="radio" name="proses6" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses6" value="1"> Baik
        <input type="radio" name="proses6" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Nilai SV Curr Test</label><br>
    <?php if($data['proses7'] == 1){ ?>
        <input type="radio" name="proses7" value="1" checked> Baik
        <input type="radio" name="proses7" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses7" value="1"> Baik
        <input type="radio" name="proses7" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Nilai SV BlackLash</label><br>
    <?php if($data['proses8'] == 1){ ?>
        <input type="radio" name="proses8" value="1" checked> Baik
        <input type="radio" name="proses8" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses8" value="1"> Baik
        <input type="radio" name="proses8" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Fast Blank Test</label><br>
    <?php if($data['proses9'] == 1){ ?>
        <input type="radio" name="proses9" value="1" checked> Baik
        <input type="radio" name="proses9" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses9" value="1"> Baik
        <input type="radio" name="proses9" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Test Control</label><br>
    <?php if($data['proses10'] == 1){ ?>
        <input type="radio" name="proses10" value="1" checked> Baik
        <input type="radio" name="proses10" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses10" value="1"> Baik
        <input type="radio" name="proses10" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Lampu Indikator pada power Switch</label><br>
    <?php if($data['proses11'] == 1){ ?>
        <input type="radio" name="proses11" value="1" checked> Baik
        <input type="radio" name="proses11" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses11" value="1"> Baik
        <input type="radio" name="proses11" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Fungsi Alarm</label><br>
    <?php if($data['proses12'] == 1){ ?>
        <input type="radio" name="proses12" value="1" checked> Baik
        <input type="radio" name="proses12" value="0"> Tidak<br>
    <?php }else{ ?>
        <input type="radio" name="proses12" value="1"> Baik
        <input type="radio" name="proses12" value="0" checked> Tidak<br>
    <?php } ?>
</div>
<div class="form-group">
    <label>Kelistrikan</label>
    <input type="text" name="listrik" value="<?= $data['listrik'] ?>" class="form-control">
</div>
<div class="form-group">
    <label>Grounding</label>
    <input type="text" name="grounding" value="<?= $data['grounding'] ?>" class="form-control">
</div>
<div class="form-group">
    <label>Kesimpulan Akhir Quality Check</label><br>
    <select name="kesimpulan" class="form-control" required>
        <option value="<?= $data['kesimpulan'] ?>"><?= $data['kesimpulan'] ?></option>
        <option value="Baik">Baik</option>
        <option value="Tidak (Kembalikan)">Tidak (Kembalikan)</option>
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
    $idmasuk    = $_REQUEST['idmasuk'];
    $mekanik1   = $_REQUEST['mekanik1'];
    $mekanik2   = $_REQUEST['mekanik2'];
    $mekanik3   = $_REQUEST['mekanik3'];
    $mekanik4   = $_REQUEST['mekanik4'];
    $mekanik5   = $_REQUEST['mekanik5'];
    $mekanik6   = $_REQUEST['mekanik6'];
    $mekanik7   = $_REQUEST['mekanik7'];
    $mekanik8   = $_REQUEST['mekanik8'];
    $proses1    = $_REQUEST['proses1'];
    $proses2    = $_REQUEST['proses2'];
    $proses3    = $_REQUEST['proses3'];
    $proses4    = $_REQUEST['proses4'];
    $proses5    = $_REQUEST['proses5'];
    $proses6    = $_REQUEST['proses6'];
    $proses7    = $_REQUEST['proses7'];
    $proses8    = $_REQUEST['proses8'];
    $proses9    = $_REQUEST['proses9'];
    $proses10   = $_REQUEST['proses10'];
    $proses11   = $_REQUEST['proses11'];
    $proses12   = $_REQUEST['proses12'];
    $listrik    = $_REQUEST['listrik'];
    $grounding  = $_REQUEST['grounding'];
    $kesimpulan = $_REQUEST['kesimpulan'];

    $ubah = mysqli_query($kon,"UPDATE qc SET mekanik1 = '$mekanik1', mekanik2 = '$mekanik2', mekanik3 = '$mekanik3', mekanik4 = '$mekanik4', mekanik5 = '$mekanik5', mekanik6 = '$mekanik6', mekanik7 = '$mekanik7', mekanik8 = '$mekanik8', proses1 = '$proses1', proses2 = '$proses2', proses3 = '$proses3', proses4 = '$proses4', proses5 = '$proses5', proses6 = '$proses6', proses7 = '$proses7', proses8 = '$proses8', proses9 = '$proses9', proses10 = '$proses10', proses11 = '$proses11', proses12 = '$proses12', listrik = '$listrik', grounding = '$grounding', kesimpulan = '$kesimpulan' WHERE idqc = '$idqc'");
    if($ubah){
      ?> <script>alert("Berhasil Diubah");window.location='qc.php';</script> <?php
    }else{
      ?> <script>alert("Gagal Diubah");window.location='qc_input.php';</script> <?php
    }
  }
?>