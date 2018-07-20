<?php

session_start(); #starting session in this page
if (!isset($_SESSION["uid"])) {
  header ("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenalpha cart</title>

  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  
  

<head>
	<title>Kenalpha cart</title>
</head>

<body>
<div class="navbar navbar-fixed-top navbar-inverse">
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
        <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
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
    <div class="col-md-8" id="cart_msg">
      <!--Cart Message-->
    </div>
    <div class="col-md-2"></div>
  </div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-success">
        <div class="panel-heading">Cart Checkout</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-2"><b>Action</b></div>
            <div class="col-md-2"><b>Product Image</b></div>
            <div class="col-md-2"><b>Product Name</b></div>
            <div class="col-md-2"><b>Quantity</b></div>
            <div class="col-md-2"><b>Product Price</b></div>
            <div class="col-md-2"><b>Price in $</b></div>
          </div>
          <div id="cart_checkout"></div>
         <!--  <div class="row">
            <div class="col-md-2">
              <div class="btn-group">
                <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
              </div>
            </div>
            <div class="col-md-2"><img src='product_images/c05369553.png' width=100px></div>
            <div class="col-md-2">Product Name</div>
            <div class="col-md-2"><input type='text' class='form-control' value='1'></div>
            <div class="col-md-2"><input type='text' class='form-control' value='1000' disabled></div>
            <div class="col-md-2"><input type='text' class='form-control' value='1000' disabled></div>
          </div> -->
          <!-- <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
              <b>Total $500000</b>
            </div>
          </div> -->

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