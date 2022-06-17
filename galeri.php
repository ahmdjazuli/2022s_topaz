<?php require('header.php') ?>
  <div class="collection_text">Galeri</div>
  <div class="layout_padding collection_section">
        <div class="container">
            <div class="collection_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="shoes-img"><a href="images/1.jpg" target="_blank"><img src="images/1.jpg"></a></div>
                        </div>
                        <button class="seemore_bt">Klik Gambar</button>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img2">
                            <div class="shoes-img2"><a href="images/2.jpg" target="_blank"><img src="images/2.jpg"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collectipn_section_3 layuot_padding">
                <div class="container">
                    <div class="racing_shoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="shoes-img3"><a href="images/3.jpg" target="_blank"><img src="images/3.jpg"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
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
