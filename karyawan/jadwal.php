<?php require('atas.php') ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Jadwal Maintenance</h1>
            </div>
        </div>
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
                                        <th>Nama Alat</th>
                                        <th>Petugas</th>
                                        <th>Cara Pemeliharaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; $query = mysqli_query($kon, "SELECT * FROM jadwal INNER JOIN user ON jadwal.id = user.id INNER JOIN barang ON jadwal.idbarang = barang.idbarang ORDER BY tgl DESC");
                                        while($data = mysqli_fetch_array($query)){ ?>
                                            <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= date('d/m/Y',strtotime($data['tgl'])) ?></td>
                                                    <td><?= $data['namabarang'] ?></td>
                                                    <td><?= $data['nama'] ?></td>
                                                    <td><?= $data['cara'] ?></td>
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
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php require('bawah.php') ?>
