<?php require('atas.php'); ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-sm" style="margin:0 auto">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Cetak</h4>
            </div>
            <div class="modal-body">
                <form action="../report/laporanTransaksi.php" target="_blank" method="post">
                <label>Bulan</label>
                <select name="bulan" class="form-control">
                  <option value="">Pilih</option>
                  <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(tgl) as bulan FROM transaksi ORDER BY bulan ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                    $bulan = $baris['bulan']; 
                      if($bulan == 1){ $namabulan = "Januari";
                        }else if($bulan == 2){ $namabulan = "Februari";
                        }else if($bulan == 3){ $namabulan = "Maret";
                        }else if($bulan == 4){ $namabulan = "April";
                        }else if($bulan == 5){ $namabulan = "Mei";
                        }else if($bulan == 6){ $namabulan = "Juni";
                        }else if($bulan == 7){ $namabulan = "Juli";
                        }else if($bulan == 8){ $namabulan = "Agustus";
                        }else if($bulan == 9){ $namabulan = "September";
                        }else if($bulan == 10){ $namabulan = "Oktober";
                        }else if($bulan == 11){ $namabulan = "November";
                        }else if($bulan == 12){ $namabulan = "Desember";
                        } ?><option value="<?= $baris['bulan'] ?>"><?= $namabulan; ?></option> 
                      }
                    <?php } ?>
                </select><br>
                <label>Tahun</label>
                <select name="tahun" class="form-control" required>
                  <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(tgl) as tahun FROM transaksi ORDER BY tahun ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                        ?><option value="<?= $baris['tahun'] ?>"><?= $baris['tahun']; ?></option> 
                    <?php } ?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-print"></i></button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="transaksi_input.php" style="color: white; text-decoration: none">+ Barang Keluar</a></button>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-print"></i> Cetak </button></h1>
            </div>
        </div>
        <?php if(isset($_GET['nota'])){ ?>
            <div class="alert alert-success">
                Klik pada No.Transaksi untuk <a href="transaksi.php" class="alert-link">Mencetak Nota</a>.
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="success">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>No.Transaksi</th>
                                        <th>Nama Instansi</th>
                                        <th>Catatan</th>
                                        <th>Total Pembayaran</th>
                                        <th><i class="fa fa-toggle-on"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
<?php $no=1; $query = mysqli_query($kon, "SELECT * FROM transaksi JOIN user ON transaksi.id = user.id ORDER BY tgl DESC");
while($data = mysqli_fetch_array($query)){ ?>
    <tr class="odd gradeX">
            <td><?= $no++; ?></td>
            <td><?= date('d/m/Y',strtotime($data['tgl'])) ?></td>
            <td><a target="_blank" href="../report/cetaknota1.php?notransaksi=<?= $data['notransaksi'] ?>"><?= $data['notransaksi'] ?></a></a>
            </td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['catatan'] ?></td>
            <td>Rp. <?= number_format($data['total'],0,'.','.') ?></td>
            <td>
            <a href="transaksi_edit.php?notransaksi=<?php echo $data['notransaksi']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
            <a href="delete.php?notransaksi=<?php echo $data['notransaksi'] ?>&m=keluar" class="btn btn-success btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
<?php } ?>
                                </tbody>
                            </table>
                        </div>
                                    
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php require('bawah.php') ?>
