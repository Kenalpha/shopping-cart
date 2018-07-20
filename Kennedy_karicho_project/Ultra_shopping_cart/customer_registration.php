<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenalpha |Registration</title>

  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  
  

<head>
	<title>Kenalpha cart</title>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                       
      </button>
      <a href="index.php" class="navbar-brand">Kenalpha shopping cart</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      </ul>
    </div>
  </div>
</div>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<div class="container-fluid">
  <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8" id="signup_msg">
            <!--Alert from signup form-->
          </div>
          <div class="col-md-2"></div>
  </div>

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-success">
        <div class="panel-heading">Customer SignUp Form</div>
        <div class="panel-body">

        <form method="post">
          <div class="row">
            <div class="col-md-6">
              <label for="f_name">First Name</label>
              <input type="text" id="f_name" name="f_name" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="l_name">Last Name</label>
              <input type="text" id="l_name" name="l_name" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="repassword">Confirm Password</label>
              <input type="password" id="repassword" name="repassword" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="mobile">Mobile Number</label>
              <input type="text" id="mobile" name="mobile" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="address1">Address Line 1</label>
              <input type="text" id="address1" name="address1" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="address2">Address Line 2</label>
              <input type="text" id="address2" name="address2" class="form-control">
            </div>
          </div>
          
          <p><br /></p>

          <div class="row">
            <div class="col-md-12">
              <input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
            </div>
          </div>
        </form>

        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script type="text/javascript" src="assets/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="main.js"></script>

</body>
</html>
