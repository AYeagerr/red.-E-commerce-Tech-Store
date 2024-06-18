<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: email.php?error=Email is required");
	    exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: email.php?error=Invalid email format&$user_data");
	    exit();
	}
	
	else if(!preg_match('/(@gmail.com|@hotmail.com|@yahoo.com)/', $email)) {
		

		header("Location: email.php?error=Enter a valid domain&$user_data");
		exit(); 
		}
	else if(empty($pass)){
        header("Location: email.php?error=Password is required");
	    exit();
	}
	else if(strlen($pass)<=7) {
		

		header("Location: email.php?error=Password should be at least 8 characters&$user_data");
	    exit(); 
		}

		else if(!preg_match("#[a-z]+#", $pass)) {
		

			header("Location: email.php?error=Password should contain at least one lowercase character&$user_data");
			exit(); 
			}
			else if(!preg_match("#[A-Z]+#", $pass)) {
		

				header("Location: email.php?error=Password should contain at least one uppercase character&$user_data");
				exit(); 
				}
				else if(!preg_match("#[0-9]+#", $pass)) {
		

					header("Location: email.php?error=Password should contain at least one digit&$user_data");
					exit(); 
					}
	else{
		/* hashing the password------->$pass = md5($pass);*/
	   $pass = ($pass);

        
		$sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
                $sql2 = "Update users set password ='$pass' WHERE email='$email'";
                $result2 = mysqli_query($conn, $sql2);
            	header("Location: email.php?success=Your password has been reseted");
		        exit();
            }else{
				header("Location: email.php?error=This email doesn't exist");
		        exit();
			}
		}else{
			header("Location: email.php?error=This email doesn't exist");
	        exit();
		}
	}
	
}else{
	header("Location: email.php");
	exit();
}