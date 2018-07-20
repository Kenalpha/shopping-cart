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
  <style type="text/css">
    table tr td{padding: 10px;}
  </style>
  

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
      <a href="#" class="navbar-brand">Kenalpha shopping cart</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
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
    <div class="col-md-8">
      <div class="panel panel-success">
          <div class="panel-heading"></div>
          <div class="panel-body">
            <h1>Customer Order Details</h1>
            <hr/>
            <div class="row">
              <div class="col-md-6">
                <img style="float:right;" src="product_images/demo.png" class="img-thumbnail">
              </div>
              <div class="col-md-6">
                <table>
                  <tr><td>Product Name</td> <td><b>Sky</b></td></tr>
                  <tr><td>Product Price</td> <td><b>$1000</b></td></tr>
                  <tr><td>Quantity</td> <td><b>1</b></td></tr>
                  <tr><td>Payment</td> <td><b>Completed</b></td></tr>
                  <tr><td>Transaction Id</td> <td><b>RTYRRWSMQQ56WPLS9</b></td></tr>
                </table>
              </div>
            </div>
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