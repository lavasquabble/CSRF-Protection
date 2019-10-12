<html>
	<head>
		<title>Adding Info</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
            if(!isset($_COOKIE['session_cookie'])) {
              	echo "<h3>Couldn't set session correctly. Try login again!!!</h3><br><a href='dsclogin.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Login </button></a>";
            }
        ?>

        <script>
			function getCookie(cname) {
	            var name = cname + "=";
	        	var decodedCookie = decodeURIComponent(document.cookie);
	            var ca = decodedCookie.split(';');
	            for(var i = 0; i <ca.length; i++) {
	            	var c = ca[i];
		            	while (c.charAt(0) == ' ') {
		            	c = c.substring(1);
		            	}
	        		if (c.indexOf(name) == 0) {
	            		return c.substring(name.length, c.length);
	        		}
        		}
                return "";
            }

			function submitForm(oFormElement)
            {
                document.getElementById("csrf_Token").value=getCookie("csrf_token");

            }
        </script>

		<?php
			if(isset($_COOKIE['session_cookie'])) {
              	echo "<div class='container'>
	              	<div class='row' align='right' style='padding-top: 20px;'>
	              		<a href='logout.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Logout </button></a>
	              	</div>
			        <div class='row' align='center' style='padding-top: 100px;'>
			        	<div class='col-12'>
							<div class='card'>
			              		<h5 class='card-header'>Add Information</h5>
			              		<div class='card-body'>
			                    	<div class='row'>
			                        <div class='col-sm-2'></div>
			                        	<div class='col-sm-8'>
                        				<form method='post' action='dscvalidation.php' onsubmit='submitForm(this);'>
						              		<input type='hidden' name='csrf_Token' id='csrf_Token' value=''>
						              		<div class='form-group row'>
							                    <label for='name' class='col-sm-2 col-form-label'>Full Name</label>
							                    <div class='col-sm-10'>
							                    	<input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
						                    	</div>
						                    </div>

						                    <div class='form-group row'>
						                        <label for='dob' class='col-sm-2 col-form-label'>DOB</label>
						                        <div class='col-sm-10'>
						                            <input type='text' class='form-control' id='dob' name='dob' placeholder='Date of birth' required>
						                        </div>
						                    </div>

											<div class='form-group row'>
						                        <label for='address' class='col-sm-2 col-form-label'>Address</label>
						                        <div class='col-sm-10'>
						                            <input type='text' class='form-control' id='address' name='address' placeholder='Address' required>
						                        </div>
						                    </div>

						                    <div class='form-group row'>
						                        <label for='age' class='col-sm-2 col-form-label'>Age</label>
						                        <div class='col-sm-10'>
						                            <input type='number' class='form-control' id='age' name='age' placeholder='Age' required>
						                        </div>
						                    </div>

						                    <button type='submit' class='btn btn-primary' >Submit</button>
						                    
                						</form>
        							    </div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>";
            }
        ?>
      	<script src="/public/js/bootstrap.min.js"></script>
        <script src="/public/js/popper.min.js"></script>
	</body>
</html>
