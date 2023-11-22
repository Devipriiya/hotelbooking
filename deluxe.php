<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Room Booking</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel inn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->

		<ul>
		<li><img src="hotel-removebg-preview.png" style="width:60px"></li>
            <li><a href="index.php">Home</a></li>
			<li><a href="luxury.php" style="text-decoration: none;">Luxury Room</a></li>
            <li><a href="deluxe.php" class="active" style="background-color:#edbe6d;text-decoration: none;">Deluxe Room</a></li>
            <li><a href="single.php" style="text-decoration: none;">Single Room</a></li>
            <li><a href="double.php" style="text-decoration: none;">Double Room</a></li>
            <li><a href="#" style="text-decoration:none">Favorites</a></li>
            <li><a href="contact.php" style="text-decoration:none">Contact</a></li>
			
            <!-- <li style="float:right"><a class="active" href="#about">About</a></li> -->
          </ul>
		  <div id="wrapper" class="toggled">
			<!-- /#wrapper -->
			 <img class="carbon-notification" src="n1-removebg-preview.png" style=" position: absolute;
			 width: 50px;
			 height: 32px;
			 top: 12px;
			 left: 1150px;" />
		
			
		   </div>
		  
          <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
			  background-color: #007bff;
			  box-shadow: inset 0 0em 0em #1bdc74, 0 0 0 -2px #abacab, 0.3em 0.3em 1em #1387e775;
            }
            
            li {
              float: left;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
            
            li a:hover:not(.active) {
              background-color: #f3cc84;
            }
            
            .active {
              background-color: #04AA6D;
            }
            </style>

		</div>
	</div>
	
		
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-3 book-form-left-w3layouts">
	
</div>

			  

			</div>
			<div class="clearfix"> </div>
</div>



	 <!-- rooms & rates -->
      
	 
			
	 <!--// rooms & rates -->


	   
     

	<div class="plans-section" id="rooms">
	 <div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Deluxe Rooms</h3>
	  	<?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'booking';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to select all images from the table
        $sql = "SELECT * FROM deluxe";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
          
                
		
                
               $image_data = $row['image_data'];
             
				$wifi= $row['wifi'];
				$tv= $row['tv'];

				echo   '<div class="priceing-table-main">';
				echo '<div class="col-md-3 price-grid">';
				echo '<div class="price-block agile">';
				echo '<div class="price-gd-top">';
				echo    '<img src="data:image/jpeg;base64,' . base64_encode($image_data) . '" alt="Image"/>';
            //    echo'<h4 style="top: 3.3em;">'.$name.'</h4>';
               echo	'</div>';
					echo '<div class="price-gd-bottom" >';
					echo   '<div class="price-list">';
					echo   '<div class="price-list">';
					
									echo '</div>';
									echo '<div class="price-selet">';
										
									echo '<i style="font-size:20px;color:#007bff;" class="fa">&#xf1eb;'.$wifi.'</i><br>';
									echo '<i style="font-size:20px;color:#007bff;" class="fa" co>&#xf26c;'.	$tv.'</i><br><br>';
									echo '<button style="background-color:#007bff;color:white;text-decoration:none;border:none"><a href="deluxbookroom.php" style="background-color:#007bff;color:white;text-decoration:none;border:none">Book now</a></button>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div><br><br>';
							echo '<div class="clearfix"> </div>';
							echo '</div>';
							echo '</div>';
							
							
            }
        } else {
            echo 'No images found in the table.';
        }

        $conn->close();
        ?>
			</div>
	</div>
	 <!--// rooms & rates -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>	
<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>