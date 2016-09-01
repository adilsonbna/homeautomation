<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: gate.php");
		exit;
	}

	if( isset($_POST['btn-login']) ) {	
		
		$email = $_POST['email'];
		$upass = $_POST['pass'];
		
		$email = strip_tags(trim($email));
		$upass = strip_tags(trim($upass));
		
		$password = hash('sha256', $upass); // password hashing using SHA256
		
		$res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
		
		$row=mysql_fetch_array($res);
		
		$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
		
		if( $count == 1 && $row['userPass']==$password ) {
			$_SESSION['user'] = $row['userId'];
			header("Location: gate.php");
		} else {
			$errMSG = "Wrong Credentials, Try again...";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/login.css">
		<script src="js/prefixfree.min.js"></script>
	</head>	
	
	<body>
	
		<?php
			if ( isset($errMSG) ) {
				echo '<script type="text/javascript">alert("'.$errMSG.'");</script>';
			}
		?>
			
		<div class="login">
		<h1>Login</h1>
		<form method="post">
			<input type="email" name="email" placeholder="Username" required="required" />
			<input type="password" name="pass" placeholder="Password" required="required" />
			<button type="submit" name="btn-login" class="btn btn-primary btn-block btn-large">Let me in.</button>
		</form>
	</div>
    
	<script src="js/index.js"></script>
	
	</body>
</html>
