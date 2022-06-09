<?php require('header.php');?>
	</div>
  <div class="collection_text">Data Service Anda</div>
    <div class="layout_padding collection_section">
    	<div class="container">
           <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover " id="dataTables-example">
                            <thead class="success table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>No.Transaksi </th>
                                    <th>Barang</th>
                                    <th>Kerusakan</th>
                                    <th>Solusi</th>
                                    <th>Status</th>
                                    <th>Biaya</th>
                                </tr>
                            </thead>
                            <tbody class="table-light">
                                    <?php $no=1; 
                                    $query = mysqli_query($kon, "SELECT * FROM dataservice INNER JOIN barang ON dataservice.idbarang = barang.idbarang WHERE namap = '$memori[nama]' ORDER BY tgl DESC");
                                        while($data = mysqli_fetch_array($query)){ ?>
                                            <tr class="odd gradeX" style="color:black">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= date('d/m/Y',strtotime($data['tgl'])) ?></td>
                                                    <td><?= $data['notransaksi'] ?></td>
                                                    <td><?= $data['namabarang'] ?></td>
                                                    <td><?= $data['kerusakan'] ?></td>
                                                    <td><?= $data['solusi'] ?></td>
                                                    <td>
                                                    <?php 
                                                        $ohh = $data['notransaksi'];
                                                        $gini = mysqli_query($kon, "SELECT * FROM proses WHERE notransaksi = '$ohh' ORDER BY waktu DESC");
                                                        $lah = mysqli_fetch_array($gini);
                                                        if($lah['ket']=='Selesai'){?>
                                                            <a href="proses.php?notransaksi=<?php echo $data['notransaksi']; ?>" class="btn btn-success btn-sm">Selesai</a><?php
                                                        }else{ ?>
                                                            <a href="proses.php?notransaksi=<?php echo $data['notransaksi']; ?>" class="btn btn-outline-success btn-sm">Proses</a><?php
                                                        } ?></td>
                                                     <td><?= number_format($data['biaya'],0,'.','.') ?></td>
                                                </tr>
                                        <?php } ?> 
                                    <?php if(mysqli_num_rows($query)<=0){
                                        ?>
                                            <tr class="odd gradeX" style="color:black">
                                                <td colspan="9"><h1 class="text-center">Tidak Ada Service</h1></td>
                                            </tr>
                                        <?php
                                    } ?>
                                </tbody>
                        </table>
                    </div>
                                
                </div>
                <!-- /.panel-body -->
            </div>
    	</div>
    </div>



      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>
