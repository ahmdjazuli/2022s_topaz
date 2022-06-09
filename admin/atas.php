<?php require('../kon.php'); require('../tgl_indo.php'); session_start(); 
    $level  = $_SESSION['level'];
    $username   = $_SESSION['username'];
    $query      = mysqli_query($kon,"SELECT * FROM user WHERE level='$level' AND username = '$username'");
    $memori       = mysqli_fetch_array($query);
    $_SESSION['id'] = $memori['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="../images/logo.png">
        <title>Topaz Borneo Utara</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/timeline.css" rel="stylesheet">
        <link href="css/startmin.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">   
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="../images/logo.png" style="width: 40px; position: relative; bottom: 10px; float: left; margin-right: 7px;"></a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../index.php" target="_blank"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="profil.php"><i class="fa fa-user fa-fw"></i> Profil</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="keluar.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
<div class="navbar-default sidebar" role="navigation" style="overflow-y: scroll; height: 600px;">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li> <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Menu</a> </li>
            <li>
                <a href="#"><i class="fa fa-tasks fa-fw"></i> User (2)<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="karyawan.php"><i class="fa fa-user fa-fw"></i> Karyawan</a> </li>
                    <li><a href="user.php"><i class="fa fa-user-circle fa-fw"></i> Customer</a> </li>
                </ul>
            </li>
            <li><a href="barang.php"><i class="fa fa-tasks fa-fw"></i> Alat</a> </li>
            <li><a href="stok.php"><i class="fa fa-bitcoin fa-fw"></i> Stok Barang</a> </li>
            <li><a href="masuk.php"><i class="fa fa-cube fa-fw"></i> Barang Masuk</a> </li>
            <li><a href="qc.php"><i class="fa fa-check-square fa-fw"></i> Quality Check</a> </li>
            <li><a href="transaksi.php"><i class="fa fa-cubes fa-fw"></i> Barang Keluar</a> </li>
            <li> <a href="service.php"><i class="fa fa-connectdevelop fa-fw"></i> Transaksi Service</a> </li>
            <li> <a href="proses.php"><i class="fa fa-clock-o fa-fw"></i> Proses Service</a> </li>
            <li> <a href="report.php"><i class="fa fa-file-o fa-fw"></i> Service Report</a> </li>
            <li> <a href="jadwal.php"><i class="fa fa-random fa-fw"></i> Jadwal Maintenance</a> </li>
            <li> <a href="gaji.php"><i class="fa fa-money fa-fw"></i> Gaji Karyawan</a> </li>
            <li><a href="pendapatan2.php"><i class="fa fa-dollar fa-fw"></i> Pendapatan Harian</a>
            </li>
            <li><a href="pendapatan1.php"><i class="fa fa-euro fa-fw"></i> Pendapatan Bulanan</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-tasks fa-fw"></i> Laporan (10)<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="masuk.php">Barang Masuk</a> </li>
                    <li><a href="qc.php">Quality Check</a> </li>
                    <li><a href="keluarga.php">Barang Keluar</a> </li>
                    <li> <a href="gaji.php">Gaji Karyawan</a> </li>
                    <li> <a href="service.php">Transaksi Service (+nota)</a> </li>
                    <li> <a href="proses.php">Proses Service</a> </li>
                    <li> <a href="report.php">Service Report</a> </li>
                    <li> <a href="jadwal.php">Jadwal Maintenance</a> </li>
                    <li><a href="pendapatan2.php">Pendapatan Harian</a> </li>
                    <li><a href="pendapatan1.php">Pendapatan Bulanan</a> </li><br><br>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>