<?php
session_start();
//session_destroy();



if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
  }
?>










<html>
<head>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>
        Registration
    </title>
</head>

<body>


<div class="container">

   <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8 text-center">

      <?php
     $name = $_SESSION['email'];
    echo "<br><h3><strong> You are loged In $name</strong></h3>";
 ?>


  </div>
  <div class="col-xs-6 col-md-4 text-right">

      <h1><a href="logout.php">Logout</a> </h1>

  </div>
</div>

    <h1 class="well">Registration Form</h1>

<!--  form start from here   -->

<!--    <form action="" method="POST"></form>-->
	<div class="col-lg-12 well">
	<div class="row">
				


        <form role="form" method="post" action="Welcome2.php">
            <fieldset>
                <div class="col-sm-6 form-group">
                <label><i class="fa fa-user" aria-hidden="true"></i> First Name</label>
                    <input class="form-control" placeholder="Enter First Name Here.." name="First_Name" type="text" autofocus>
                </div>

                <div class="form-group col-sm-6 ">
                  <label> <i class="fa fa-user" aria-hidden="true"></i> Last Name</label>
                    <input class="form-control" placeholder="Enter Last Name Here.." name="Last_Name" type="text" autofocus>
                </div>
                <div class="form-group">
                  <label> <i class="fa fa-envelope" aria-hidden="true"></i> Email Address</label>
                    <input class="form-control" placeholder="Enter Email Address Here.." name="Email_Address" type="text" value="">
                </div>

                <div class="form-group">
                  <label><i class="fa fa-map-marker" aria-hidden="true"></i> Address</label>
                    <input class="form-control" placeholder="Enter Address Here.." name="Address" type="text" value="">
                </div>
                <div class="form-group col-sm-4">
                  <label><i class="fa fa-cogs" aria-hidden="true"></i> Year of Experience</label>
                    <input class="form-control" placeholder="Password" name="Experience" type="text" value="">
                </div>
                <div class="form-group col-sm-4">
                  <label><i class="fa fa-home" aria-hidden="true"></i> Zip</label>
                    <input class="form-control" placeholder="Password" name="Zip" type="text" value="">
                </div>
                <div class="form-group col-sm-4">
                  <label><i class="fa fa-mobile" aria-hidden="true"></i> Phone</label>
                    <input class="form-control" placeholder="Password" name="Phone" type="text" value="">
                </div>


                <div class="form-group">
                  <label>Capabilities : </label>
                    <input class="form-control" placeholder="Password" name="Capabilities" type="text" value="">
                </div>


                <input class="btn btn-lg btn-success btn-block" onclick="location.href = '';" type="submit" value="register" name="register" >

            </fieldset>
        </form>
				</div>
	</div>
	</div>


<?php

    include 'Welcome2.php';

    ?>


</body>

</html>
