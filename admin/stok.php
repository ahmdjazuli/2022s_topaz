<?php require('atas.php') ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="stok_input.php" style="color: white; text-decoration: none">+Data Stok Barang</a></button></h1>
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
                                        <th>Nama</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>Jumlah</th>
                                        <th>Harga Jual</th>
                                        <th><i class="fa fa-toggle-on"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; $query = mysqli_query($kon, "SELECT * FROM stok ORDER BY idstok ASC");
                                        while($data = mysqli_fetch_array($query)){ ?>
                                            <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['namastok'] ?></td>
                                                    <td><?= $data['merk'] ?></td>
                                                    <td><?= $data['tipe'] ?></td>
                                                    <td><?= $data['jumlahnya'] ?></td>
                                                    <td>Rp. <?= number_format($data['harganya'],0,'.','.') ?></td>
                                                    <td>
                                                        <a href="stok_edit.php?idstok=<?php echo $data['idstok']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                        <a href="delete.php?idstok=<?php echo $data['idstok'] ?>" class="btn btn-success btn-sm"><i class="fa fa-trash"></i></a>
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
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php require('bawah.php') ?>
