<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);


	if (empty($uname)) {
		header("Location: login.php?error=Username is required");
	    exit();
	}
	else if(strlen($uname)<=2) {
		

		header("Location: login.php?error=Username should be at least 3 characters&$user_data");
	    exit(); 
		}

		else if (empty($pass)) {
			header("Location: login.php?error=Password is required");
			exit();
		}
		else if(strlen($pass)<=7) {
		

			header("Location: login.php?error=Password should be at least 8 characters&$user_data");
			exit(); 
			}
	
			else{
		/* hashing the password------->*/
		$pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['created_at'] = $row['created_at'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect Username or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorrect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}