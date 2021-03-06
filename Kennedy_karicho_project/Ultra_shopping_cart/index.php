<?php
session_start();
if (isset($_SESSION["uid"])) {
   header("Location:profile.php");
}
?>

<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenalpha cart</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  
  

<head>
	<title>Kenalpha cart</title>
</head>

<body>
<div class="well container-fluid">
<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#awesomeNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index.php" class="navbar-brand">Kenalpha shopping cart</a>
    </div>
    <div class="collapse navbar-collapse" id="awesomeNav">
    <ul class="nav navbar-nav">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
      <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
      <li style="top:10px;left:20px;"><button class="btn btn-success" id="search_btn"><i class="glyphicon glyphicon-search"></i></button></li>
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
        <div class="dropdown-menu" style="width:400px;">
          <div class="panel panel-success">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-3">Sl.No</div>
                <div class="col-md-3">Product Image</div>
                <div class="col-md-3">Product Name</div>
                <div class="col-md-3">Price in $.</div>
              </div>
            </div>
            <div class="panel-body"></div>
            <div class="panel-footer"></div>
          </div>
        </div>
      </li>
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
         <ul class="dropdown-menu">
            <div style="width:300px;">
              <div class="panel panel-info">
                <div class="panel-heading panel-heading-custom">Login</div>
                <div class="panel-heading">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email"/>
                  <label for="email">Password</label>
                  <input type="password" class="form-control" id="password" />
                  <p><br /></p>
                  <a href="#" style="color:white; list-style:none;">Forgotten Password</a>
                  <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
                </div>
                <div class="panel-footer" id="e_msg" style="color:red"></div>
              </div>
            </div>
         </ul>
      </li>
      <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
    </ul>
  </div>
  </div>
</div>

<p><br /></p>
<p><br /></p>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <div id="get_category">
      </div>

      <!-- <div class="nav nav-pills nav-stacked">
        <li class="active"><a href="#"><h4>Categories</h4></a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Categories</a></li>
      </div> -->
      
      <div id="get_brand">
      </div>

      <!-- <div class="nav nav-pills nav-stacked">
        <li class="active"><a href="#"><h4>Brand</h4></a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Categories</a></li>
      </div> -->

    </div>

    <div class="col-md-10">
      <div class="panel panel-success">
        <div class="panel-heading">Products</div>
        <div class="panel-body">
        
        <div id="get_product">
          <!-- Here we get product from jQuery Ajax Request -->
        </div>
        
         <!--  <div class="col-md-4">
            <div class="panel panel-info">
              <div class="panel-heading">Samsung Galaxy</div>
              <div class="panel-body">
                <img class="img-responsive" alt="Product" src="product_images/me.jpg" />
              </div>
              <div class="panel-heading">
                $.500.00
                <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
              </div>
            </div>
          </div> -->
        </div>
        <div class="panel-footer">&copy; 2017</div>
      </div>
    </div>
  </div>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script type="text/javascript" src="assets/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="main.js"></script>

</div>
</body>
</html>