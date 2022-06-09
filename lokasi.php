<?php require('header.php') ?>
  <div class="collection_text">Lokasi</div>
   <div class="about_main layout_padding">
    <div class="collectipn_section_3 layout_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15930.53596313815!2d114.8396203!3d-3.4388987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfbcd2c24e4330751!2sCV.%20TWINCOM%20SALES%20%26%20SERVICE%20CENTER!5e0!3m2!1sid!2sid!4v1629497803901!5m2!1sid!2sid" width="600" height="510" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
