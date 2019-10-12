<?php
	session_start();
	if(isset($_POST["request"]))
	{
		$data["token"]=$_SESSION['CSRF_Token'];
		echo json_encode($data);	
	}
?>