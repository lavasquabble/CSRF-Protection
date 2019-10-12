<html>
    <head>
        <title>validate</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
    </head>

    <body>
        
      <div class="container">
        <div class='row' align='right' style='padding-top: 20px;'>
          <a href='logout.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Logout </button></a>
        </div>
        <div class="row" align="center" style="padding-top: 100px;">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2"></div>
                    <div class="col-sm-8">


          						<?php
          						if(isset($_COOKIE['session_cookie']))
          						{
          							session_start();
          							if ($_POST['csrf_Token'] == $_COOKIE['csrf_token'])
          							{
          								$name=$_POST['name'];
          								$dob=$_POST['dob'];
          								$address=$_POST['address'];
          								$age=$_POST['age'];

                          echo "<div class='alert alert-warning' role='alert'>"."You are CSRF free"."</div>";
          								echo "<div class='alert alert-success' role='alert'>".$name."</div>";
          								echo "<div class='alert alert-info' role='alert'>".$dob."</div>";
          								echo "<div class='alert alert-success' role='alert'>".$address."</div>";
          								echo "<div class='alert alert-info' role='alert'>".$age."</div>";

          							}
          							else
          							{
          								echo "<script>alert('CSRF NOT FOUND')</script>";
          							}
                      }
                      else{
                        echo "<h3>Try again.. Session Setting Up Failed</h3><br><a href='dsclogin.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Login </button></a>";
                      }
          						
          						?>


                    </div>
                  <div class="col-sm-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </body>
  </html>
