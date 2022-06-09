<?php require('atas.php') ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Quality Check</h1>
                </div>
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
                                        <th>Waktu (WITA)</th>
                                        <th>Supplier</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Nama Teknisi</th>
                                        <th>Kesimpulan</th>
                                        <th><i class="fa fa-toggle-on"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; $query = mysqli_query($kon, "SELECT * FROM qc JOIN masuk ON qc.idmasuk = masuk.idmasuk JOIN stok ON masuk.idstok = stok.idstok JOIN user ON qc.id = user.id ORDER BY tglqc DESC");
                                        while($data = mysqli_fetch_array($query)){ ?>
                                            <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= date('d/m/Y H:i',strtotime($data['tglqc'])); ?></td>
                                                    <td><?= $data['distributor'] ?></td>
                                                    <td><?= $data['namastok'] ?></td>
                                                    <td><?= $data['jumlah'] ?></td>
                                                    <td><?= $data['nama'] ?></td>
                                                    <td><?= $data['kesimpulan']; ?></td>
                                                    <td>
                                                        <a href="qc_edit.php?idqc=<?php echo $data['idqc']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
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
