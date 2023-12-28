<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile Card</title>
	<link rel="stylesheet" href="css/user.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<?php

include('./header.php');
include('./db.php');

?>
                 <?php
                            include "db.php";
                            if(isset($_SESSION["uid"])){
                            $sql = "SELECT *FROM user_info WHERE user_id='$_SESSION[uid]'";
                            $query = mysqli_query($con,$sql);
                            
							
							 if(mysqli_num_rows($query)==1){

							while($row = mysqli_fetch_array($query)){
								$user_id      = $row['user_id'];
								$user_fname   = $row['first_name'];								
								$user_lname   = $row['last_name'];
								$full_name    = $user_fname."".$user_lname;
								$user_email   = $row['email'];
								$user_mobile  = $row['mobile'];
								$user_address = $row['address1'];
								$user_City    = $row['address2'];
								$user_image   = $row['image'];
							
echo'<div class="wrapper">
      <div class="left">
        <img src="dev_images/'.$user_image.'"
        alt="user" width="100">
        <h2>'.$full_name.'</h2>
         <p>General User</p>
     </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>'.$user_email.'</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>'.$user_mobile.'</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Address</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Area</h4>
                    <p>'.$user_address.'</p>
                 </div>
                 <div class="data">
                   <h4>City</h4>
                    <p>'.$user_City.'</p>
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
    </div>
</div>';

	};
  }
}
?>

    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
