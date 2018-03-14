  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>

  <script src="jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      $('.carousel').carousel();
      $(".button-collapse").sideNav();
      $('.materialboxed').materialbox();
      $('select').material_select();
       

      });



$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
});
  </script>
