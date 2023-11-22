<?php
session_start();
$user_id = $_SESSION['user_id'];
include 'connect.php';

// if(isset($_COOKIE['admin_id'])){
//    $admin_id = $_COOKIE['admin_id'];
// }else{
//    $admin_id = '';
//    header('location:login.php');
// }

if(isset($_POST['delete'])){

   $delete_id = $_POST['delete_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

   $verify_delete = $conn->prepare("SELECT * FROM `bookings`");
   $booking_id = $verify_delete['booking_id'];
   $verify_delete->execute([$delete_id]);

   if($verify_delete->rowCount() > 0){
      $delete_bookings = $conn->prepare("DELETE FROM `bookings` WHERE booking_id = ?");
      $delete_bookings->execute([$delete_id]);
      $success_msg[] = 'Booking deleted!';
   }else{
      $warning_msg[] = 'Booking deleted already!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bookings</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
</head>
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
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style_book.css">

<!--//fonts-->
</head>
<body style="overflow-y: scroll;height: 1300px;overflow-x: hidden;overflow:hidden;color:grey">

<!-- header -->
<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
						

								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<ul>
			<li><img src="hotel-removebg-preview.png" style="width:60px"></li>
			<li><a href="index.php" style="text-decoration: none;">Home</a></li>
            <li><a href="luxury.php" style="text-decoration: none;">Luxury Room</a></li>
            <li><a href="deluxe.php" style="text-decoration: none;">Deluxe Room</a></li>
            <li><a href="single.php" style="text-decoration: none;">Single Room</a></li>
            <li><a href="double.php" style="text-decoration: none;">Double Room</a></li>
            <li><a href="bookings.php" class="active" style="background-color:#edbe6d;text-decoration: none;">My Bookings</a></li>


            <!-- <li style="float:right"><a class="active" href="#about">About</a></li> -->
          </ul>
		      
		  <div id="wrapper" class="toggled">
			<!-- /#wrapper -->
			 <img class="carbon-notification" src="n1-removebg-preview.png" style=" position: absolute;
			 width: 50px;
			 height: 32px;
			 top: 12px;
			 left: 1150px;" />
			 <!-- <img class="vector" src="img/vector.svg" />hotel
			 <img class="vector-2" src="img/vector-2.svg" /> -->
		   </div>
          <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
			  font-size: 15px;
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
   
<!-- header section starts  -->


<!-- header section ends -->

<!-- bookings section starts  -->

<section class="grid">

   <h1 class="heading">bookings</h1>


  
   <div class="box-container">

   <?php
      $select_bookings = $conn->prepare("SELECT * FROM `bookings`  WHERE  user_id='$user_id'");
      $select_bookings->execute();
      if($select_bookings->rowCount() > 0){
         while($fetch_bookings = $select_bookings->fetch(PDO::FETCH_ASSOC)){
   ?>
   

  <div class="column">
  <div class="card">
   <div class="box">
      <p>Booking id : <span><?= $fetch_bookings['booking_id']; ?></span> </p>
      <p>Name : <span><?= $fetch_bookings['name']; ?></span></p>
      <p>Email : <span><?= $fetch_bookings['email']; ?></span></p>
      <p>Number : <span><?= $fetch_bookings['number']; ?></span></p>
      <p>Rooms : <span><?= $fetch_bookings['rooms']; ?></span></p>
      <p>Numberofnights : <span><?= $fetch_bookings['numberofnights']; ?></span></p>

      <p>amount : <span><?= $fetch_bookings['amount']; ?></span></p>
  
      <p>Hotel : <span><?= $fetch_bookings['hotel']; ?></span></p>



      <p>Check in : <span><?= $fetch_bookings['check_in']; ?></span></p>
      <p>Check out : <span><?= $fetch_bookings['check_out']; ?></span></p>
   
      <p>Adults : <span><?= $fetch_bookings['adults']; ?></span></p>
      <p>Childs : <span><?= $fetch_bookings['childs']; ?></span></p>
      <form action="" method="POST">
         <input type="hidden" name="delete_id" value="<?= $fetch_bookings['booking_id']; ?>">
         <!-- <input type="submit" value="delete booking" onclick="return confirm('delete this booking?');" name="delete" class="btn" style="    background-color: #007bff;
    box-shadow: inset 0 0em 0em #1bdc74, 0 0 0 -2px #abacab, 0.3em 0.3em 1em #1387e775;"> -->
      </form>
  
     <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/jhgjhgjg.jpg" data-amount="<?= $fetch_bookings['amount']; ?>" data-id="<?= $fetch_bookings['booking_id']; ?>">Pay now</a> 
  </div>
  </div><br><br>
  </div>
   <?php
      }
   }else{
   ?>
 
 <div class="box" style="text-align: center;">
      <p>no bookings found!</p>
      <!-- <a href="hotel.php" class="btn">go to home</a> -->
   </div>
   <?php
      }
   ?>


 
   </div><br>
 
</section>

<!-- bookings section ends -->
















<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

<!-- -->
<style>
   /* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
   </style>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_YgoaoFyyKzgg1r",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-process.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.`preventDefault`();
  });

</script>

<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_YgoaoFyyKzgg1r", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>

</body>
</html>