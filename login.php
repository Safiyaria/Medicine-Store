<?php
include "db.php";

session_start();


if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);
	
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["first_name"];
		$ip_add = getenv("REMOTE_ADDR");
		//we have created a cookie in login_form.php page so if that cookie is available means user is not login
        
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
		   	
		
			//if user is login from page we will send login_success
			echo "login_success";
			$BackToMyPage = $_SERVER['HTTP_REFERER'];
				if(!isset($BackToMyPage)) {
					header('Location: '.$BackToMyPage);
					echo"<script type='text/javascript'>
					
					</script>";
				} else {
					header('Location: index.php'); // default page
				} 
				
			
            exit;
    
	
}

?>