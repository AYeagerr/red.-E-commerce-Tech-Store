<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$email = validate($_POST['email']);

	$user_data = 'uname='. $uname. '&email='. $email;


	if (empty($uname)) {
		header("Location: register.php?error=Username is required&$user_data");
	    exit();
	}
	
	else if(strlen($uname)<=2) {
		

		header("Location: register.php?error=Username should be at least 3 characters&$user_data");
	    exit(); 
		}

		else if(!preg_match("/^[0-9a-zA-Z_]+$/", $uname)) {
		

			header("Location: register.php?error=Username should contain only letters,numbers and underscores&$user_data");
			exit(); 
			}
	
		
	else if(empty($pass)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(strlen($pass)<=7) {
		

		header("Location: register.php?error=Password should be at least 8 characters&$user_data");
	    exit(); 
		}

		else if(!preg_match("#[a-z]+#", $pass)) {
		

			header("Location: register.php?error=Password should contain at least one lowercase character&$user_data");
			exit(); 
			}
			else if(!preg_match("#[A-Z]+#", $pass)) {
		

				header("Location: register.php?error=Password should contain at least one uppercase character&$user_data");
				exit(); 
				}
				else if(!preg_match("#[0-9]+#", $pass)) {
		

					header("Location: register.php?error=Password should contain at least one digit&$user_data");
					exit(); 
					}
	

	else if(empty($email)){
        header("Location: register.php?error=email is required&$user_data");
	    exit();
	}

	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: register.php?error=Invalid email format&$user_data");
	    exit();
	}
	
	else if(!preg_match('/(@gmail.com|@hotmail.com|@yahoo.com|@outlook.com)/', $email)) {
		

		header("Location: register.php?error=Enter a valid domain&$user_data");
		exit(); 
		}

	

	else{

		
	   /* hashing the password------->*/
		$pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name,email,password  ) VALUES('$uname', '$email', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}