<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="overflow:hidden">
<ul >
<li><img src="hotel-removebg-preview.png" style="width:60px"></li>
<!-- <li><a href="desktop.html">Home</a></li> -->

            <li><a href="index.php" >Home</a></li>
         
            <li><a href="home.php"class="active" style="background-color:#edbe6d;text-decoration: none;">Personal Profile</a></li>
			<li><a href="#contact" style="text-decoration: none;">Favourties</a></li>
			<li><a href="bookings.php" style="text-decoration: none;">My Bookings</a></li>
			<li><a href="contact.php" style="text-decoration: none;" >Contact</a></li>
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
           height:60px;
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
              font-size:15px;
            }
            
            li a:hover:not(.active) {
              background-color:  #f3cc84;
            }
            
            .active {
              background-color: #04AA6D;
            }
            </style>
   
<div class="container" style="background-color:#e0e8ed">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/a1.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a> or <a href="register.php">signup</a></p>
   </div>

</div>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --dark-blue:#2980b9;
   --red:#e74c3c;
   --dark-red:#c0392b;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   width: 10px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.btn,
.delete-btn{
   width: 100%;
   border-radius: 5px;
   padding:10px 30px;
   color:black;
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 10px;
}

.btn{
   background-color: #76e1d2;
}

.btn:hover{
   background-color: var(--dark-blue);
}

.delete-btn{
   background-color: var(--red);
}

.delete-btn:hover{
   background-color: var(--dark-red);
}

.message{
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--red);
   color:var(--white);
   font-size: 20px;
}

.form-container{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.form-container form{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 500px;
   border-radius: 5px;
}

.form-container form h3{
   margin-bottom: 10px;
   font-size: 30px;
   color:var(--black);
   text-transform: uppercase;
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   padding:12px 14px;
   font-size: 18px;
   color:var(--black);
   margin:10px 0;
   background-color: var(--light-bg);
}

.form-container form p{
   margin-top: 15px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.container{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.container .profile{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 400px;
   border-radius: 5px;
}

.container .profile img{
   height: 150px;
   width: 150px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.container .profile h3{
   margin:5px 0;
   font-size: 20px;
   color:var(--black);
}

.container .profile p{
   margin-top: 20px;
   color:var(--black);
   font-size: 20px;
}

.container .profile p a{
   color:var(--red);
}

.container .profile p a:hover{
   text-decoration: underline;
}

.update-profile{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.update-profile form{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 700px;
   text-align: center;
   border-radius: 5px;
}

.update-profile form img{
   height: 200px;
   width: 200p;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.update-profile form .flex{
   display: flex;
   justify-content: space-between;
   margin-bottom: 20px;
   gap:15px;
}

.update-profile form .flex .inputBox{
   width: 49%;
}

.update-profile form .flex .inputBox span{
   text-align: left;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color:var(--black);
}

.update-profile form .flex .inputBox .box{
   width: 100%;
   border-radius: 5px;
   background-color: var(--light-bg);
   padding:12px 14px;
   font-size: 17px;
   color:var(--black);
   margin-top: 10px;
}

@media (max-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}
    </style>

</html>