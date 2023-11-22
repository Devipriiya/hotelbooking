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
<body style="overflow-x:hidden;background-color:white">
<!-- header -->
<ul >
<li><img src="hotel-removebg-preview.png" style="width:60px"></li>
<!-- <li><a href="desktop.html">Home</a></li> -->

            <li><a href="index.php" class="active" style="background-color:#edbe6d;text-decoration: none;">Home</a></li>
         
            <li><a href="home.php" style="text-decoration: none;">Personal Profile</a></li>
			<li><a href="#contact" style="text-decoration: none;">Favourties</a></li>
			<li><a href="bookings.php" style="text-decoration: none;">My Bookings</a></li>
			<li><a href="contact.php" style="text-decoration: none;">Contact</a></li>
            <!-- <li style="float:right"><a class="active" href="#about">About</a></li> -->
          </ul>
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
              background-color:  #f3cc84;
            }
            
            .active {
              background-color: #04AA6D;
            }
            </style>
<img src="./uploads/s960_hotel_booking.jpg"style=" width:100%;  height:35em;">
		</div>
	</div>
	      
	
    
        <div id="wrapper" class="toggled">
       <!-- /#wrapper -->
        <!-- <img class="carbon-notification" src="n1-removebg-preview.png" style=" position: absolute;
        width: 50px;
        height: 32px;
        top: 12px;
        left: 1150px;" /> -->
        <!-- <img class="vector" src="img/vector.svg" />hotel
        <img class="vector-2" src="img/vector-2.svg" /> -->
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
    <script>
      $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(window).resize(function(e) {
          if($(window).width()<=768){
            $("#wrapper").removeClass("toggled");
          }else{
            $("#wrapper").addClass("toggled");
          }
        });
      });
       
    </script>
  </body>

<!-- //header -->
	
		
<!-- //Modal1 -->
<!-- <div id="availability-agileits">
<div class="col-md-3 book-form-left-w3layouts">
	
</div>

			   <form action="indexmain.php" method="post">
					<div class="fields-w3ls form-left-agileits-w3layouts" style="margin-left:-100px">
							<p>Room Type</p>
							<select class="form-control" name="roomtype">
								<option>Select a Room</option>
								<option>Luxury Room</option>
								<option>Deluxe Room</option>
								<option>Single Room</option>
								<option>Double Room</option>
							</select>
					</div>
					<div class="fields-w3ls form-date-w3-agileits">
						        <p>Arrival Date</p>
									<input  id="datepicker1" name="arrivaldate" type="text" value="Select Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="fields-w3ls form-date-w3-agileits" style="margin-left:-70px">
						        <p>Departure Date</p>
									<input  id="datepicker2" name="departuredate" type="text" value="Select Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
					
					<div class=" form-left-agileits-submit">
						  <input type="submit" value="Check Availability" style="    margin-top: 58px;
    margin-left: -100px;">
					</div>
				</form>
			</div>
			<div class="clearfix"> </div>
</div> -->



	 <!-- rooms & rates -->
      
	 
			
	 <!--// rooms & rates -->


	    <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Best Places</h3>
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
        $sql = "SELECT * FROM bestplaces";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
          
                
		
			
				 
        $image_data = $row['image_data'];
       $placename= $row['placename'];
				
				

http://localhost/musicon/landing/create.php
                // Generate the HTML for each image with Bootstrap card styling

				echo   '<div class="priceing-table-main">';
				echo '<div class="col-md-3 price-grid">';
				echo '<div class="price-block agile">';
				echo '<div class="price-gd-top">';
				echo    '<img src="data:image/jpeg;base64,' . base64_encode($image_data) . '" alt="Image"/>';
               echo'<h4 style="top: 3.3em;background-color:#007bff">'.$placename.'</h4>';
               echo	'</div>';
					echo '<div class="price-gd-bottom" style="padding:0px;">';
					echo   '<div class="price-list">';
					echo   '<div class="price-list">';
								echo '<ul style="background-color:white">';
					echo   '<div class="price-list">';
									echo '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
									echo '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
									echo '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
									echo '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
									echo '<li><i class="fa fa-star-o" aria-hidden="true"></i></li>';
								
									
									echo '</ul>';
									echo '</div>';
									echo '<div class="price-selet">';
								
									
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
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

	<div class="plans-section" id="rooms">
	 <div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Best Hotels</h3>

			<div class="priceing-table-main">
				
			<div class="col-md-3 price-grid">
				<div class="price-block agile" style="height: 363px;">
				<div class="price-gd-top">
			<img src="uploads/radison.jpg" alt="Image" style="height:140px"/>
             <h4 style="top: 3.3em;background-color:#007bff"><a href="hotel.php" style="color:white">Radisson Hotel</a></h4>
             </div>
					<div class="price-gd-bottom" >
					<div class="price-list">
				<div class="price-list" >
								<ul style="background-color:white">
				<div class="price-list" >
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								</div>
									<div class="price-selet">
										
									<h3 style="font-size: 20px;
">This refined hotel off the NH7 national highway is 3 km from Salem Junction railway station.<span></span></h3><br><br>
							<h3 ><span>25% OFF </span>2500</h3><br>
							</div>
							</div>
						</div>
							</div>
						<div class="clearfix"> </div>
							</div>
							</div>
							<div class="col-md-3 price-grid">
				<div class="price-block agile" style="height: 363px;">
				<div class="price-gd-top">
			<img src="uploads/blue.jpg" alt="Image" style="height:140px">
             <h4 style="top: 3.3em;background-color:#007bff"><a href="blue.php" style="color:white">Blue Door</a></h4>
             </div>
					<div class="price-gd-bottom">
					<div class="price-list">
				<div class="price-list">
								<ul style="background-color:white">
				<div class="price-list">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</div></ul>
								</div>
									<div class="price-selet">
										
									<h3 style="font-size: 20px;
">Blue Door is located in Morjim, 700 metres from Morjim Beach and 13 km from Chapora Fort<span></span></h3><br><br>
							<h3><span>25% OFF </span>3000</h3><br>
							</div>
							</div>
						</div>
							</div>
						<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 price-grid">
				<div class="price-block agile" style="height: 363px;">
				<div class="price-gd-top">
			<img src="uploads/singapore.jpg" alt="Image"/>
             <h4 style="top: 3.3em;background-color:#007bff"><a href="fraser.php" style="color:white">Fraser Residence</a></h4>
             </div>
					<div class="price-gd-bottom" >
					<div class="price-list">
				<div class="price-list" >
								<ul style="background-color:white">
				<div class="price-list" >
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								</div>
									<div class="price-selet">
										
									<h3 style="font-size: 20px;
">Fraser Residence Orchard Singapore is set within 1.5 km from the Orchard Road shopping district.<span></span></h3><br><br>
							<h3 ><span>25% OFF </span>3500</h3><br>
							</div>
							</div>
						</div>
							</div>
						<div class="clearfix"> </div>
							</div>
						
							
							<div class="col-md-3 price-grid">
				<div class="price-block agile" style="height: 363px;">
				<div class="price-gd-top">
			<img src="uploads/mysore.jpg" alt="Image"/>
             <h4 style="top: 3.3em;background-color:#007bff"><a href="majestic.php" style="color:white">The Majestic Crown</a></h4>
             </div>
					<div class="price-gd-bottom" >
					<div class="price-list">
				<div class="price-list" >
								<ul style="background-color:white">
				<div class="price-list" >
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								</div>
									<div class="price-selet">
										
									<h3 style="font-size: 20px;
">Situated along Mysore Road, The Majestic Crown is just 20 metres from the Government Museum. <span></span></h3><br><br>
							<h3 ><span>25% OFF </span>2700</h3><br>
							</div>
							</div>
						</div>
							</div>
						<div class="clearfix"> </div>
							</div>
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