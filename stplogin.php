<html>
	<head>
		<title> Syncronized Token Pattern</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class='row' align='right' style='padding-top: 20px;'>
	            <a href='index.php' class='button'><button type='submit' class='btn btn-default' id='dsc' name='dsc'> Back </button></a>
	        </div>
		  	<h2>Login</h2>
		  	<form action ='stplogin.php' method='POST' enctype='multipart/form-data'>
		    	<div class="form-group">
		      		<label for="email">Email:</label>
		      		<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
		    	</div>
		    	<div class="form-group">
		      		<label for="password">Password:</label>
		      		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
		    	</div>
		    	
		    	<button type="submit" class="btn btn-default" id="submit" name="submit">Login</button>
		  	</form>
		</div>
	</body>
</html>


<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
    function user_login()
    {
      	$my_email = 'umindu12@gmail.com';
      	$my_password = 'havefun';

      	$email_in = $_POST['email'];
      	$password_in = $_POST['password'];

      	if(($email_in == $my_email)&&($password_in == $my_password)) {
	       
	        session_start();
	        
	        $sessionID = session_id();

	        setcookie('session_cookie', $sessionID, time() + 3600, '/');

	        $_SESSION['CSRF_Token'] = generate_token();
	        
	        header("Location:stpaddinfo.php");
        	exit;
    	}
    	else{
        	echo "<script> alert('Try Again..Invalid Credentials') </script>";
	    }
	}

	function generate_token(){
	    return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
	}
?>