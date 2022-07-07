<?php require('atas.php'); 
    $sparepart     = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM sparepart"));
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
        <!-- /.row -->
        <h1>PT. Topaz</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../images/1.jpg" width="300px">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../images/2.jpg" width="300px">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../images/3.jpg" width="300px">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-top: 20px;">
                <img src="../images/gg.jpeg" width="300px" height="225px">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<?php require('bawah.php');