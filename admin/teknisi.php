<?php require('atas.php') ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><button class="btn btn-lg" style="background-color: #01633c;"><a href="teknisi_input.php" style="color: white; text-decoration: none">+Data Teknisi</a></button></h1>
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
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>TTL</th>
                                        <th>Telp</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th><i class="fa fa-toggle-on"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; $query = mysqli_query($kon, "SELECT * FROM user WHERE level = 'Teknisi' ORDER BY nama ASC");
                                        while($data = mysqli_fetch_array($query)){ ?>
                                            <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['nama'] ?></td>
                                                    <td><?= $data['username'] ?></td>
                                                    <td><?= $data['ttl'] ?></td>
                                                    <td><?= $data['telp'] ?></td>
                                                    <td><?= $data['alamat'] ?></td>
                                                    <td><?= $data['jk'] ?></td>
                                                    <td>
                                                        <a href="teknisi_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                        <a href="delete.php?id=<?php echo $data['id'] ?>&level=karyawan" class="btn btn-success btn-sm"><i class="fa fa-trash"></i></a>
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
