<?php require('header.php') ?>
  <div class="collection_text">Lokasi</div>
   <div class="about_main layout_padding">
    <div class="collectipn_section_3 layout_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3514128947713!2d106.9234647!3d-6.2173039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ddef4a1c029%3A0xd9ee775c54a75c84!2sPT%20RAFA%20Topaz%20Utama!5e0!3m2!1sid!2ssg!4v1655429516711!5m2!1sid!2ssg" width="600" height="510" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    				</div>
    				<div class="col-md-5">
    					<div class="sale_text"><strong>Jl. Panglima Batur <br><span style="color: #0a0506;">Timur </span> <br>RT. 02 RW.01 </strong><br><span style="color:black">Ruko No. 6 </span></div>
    					<div class="number_text"><strong></strong></div>
    					<button class="seemore">TELP 1: (0852) 45114690</button>
                        <button class="seemore">TELP 2: (0811) 5138800</button>
                        <button class="seemore">TELP 3 : (0511) 6749897</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    </div>
	<!-- new collection section end -->

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
