<?php require('atas.php'); 
    $transaksi     = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM transaksi"));
    $gaji          = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM gaji"));
    $qc            = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM qc"));
    $masuk         = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM masuk"));
    $service       = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM dataservice"));
    $proses        = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM proses"));
    $servicereport = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM servicereport"));
    $jadwal        = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM jadwal"));
    $hari          = mysqli_num_rows(mysqli_query($kon, "SELECT SUM(biaya) as total FROM dataservice GROUP BY DAY(tgl)"));
    $bulan         = mysqli_num_rows(mysqli_query($kon, "SELECT SUM(biaya) as total FROM dataservice GROUP BY MONTH(tgl)"));
?>
<script src="../js/Chart.min.js"></script>
<style>
    .yayaya{
        background-color: #01633c; color: white;
    }
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <br>
        <br>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-cube"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $masuk ?></span>
                        <label class="text-muted"><a style="color: white;" href="masuk.php">Barang Masuk</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-check-square"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $qc ?></span>
                        <label class="text-muted"><a style="color: white;" href="qc.php">Quality Check</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $transaksi ?></span>
                        <label class="text-muted"><a style="color: white;" href="transaksi.php">Barang Keluar</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <img src="../images/logo.png" width="160px">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-connectdevelop"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $service ?></span>
                        <label class="text-muted"><a style="color: white;" href="service.php">Transaksi Service</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $proses ?></span>
                        <label class="text-muted"><a style="color: white;" href="proses.php">Proses Service</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-file-o"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $servicereport ?></span>
                        <label class="text-muted"><a style="color: white;" href="report.php">Service Report</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-random"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $jadwal ?></span>
                        <label class="text-muted"><a style="color: white;" href="jadwal.php">Jadwal Maintenance</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $gaji ?></span>
                        <label class="text-muted"><a style="color: white;" href="gaji.php">Gaji Karyawan</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $hari ?></span>
                        <label class="text-muted"><a style="color: white;" href="pendapatan2.php">Pendapatan Harian</a></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hero-widget well well-sm yayaya">
                    <div class="icon">
                        <i class="fa fa-euro"></i>
                    </div>
                    <div class="text">
                        <span class="value"><?= $bulan ?></span>
                        <label class="text-muted"><a style="color: white;" href="pendapatan1.php">Pendapatan Bulanan</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<?php require('bawah.php');