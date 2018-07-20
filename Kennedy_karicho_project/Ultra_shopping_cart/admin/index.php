<?php

session_start(); #starting session in this page
if (!isset($_SESSION["aid"])) {
  header ("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenalpha cart| Admin</title>

  
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  
  

<head>
	<title>Administrator</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Kenalpha Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../">Website</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
<div class="row">
  <div class="col-md-2">
	 <div class="list-group">
	  <a href="#" class="list-group-item active">
	    Operations
	  </a>
	  <a href="#" class="list-group-item" id="add_products">Add products</a>
	  <a href="#" class="list-group-item" id="view_products">View Products</a>
	  <a href="#" class="list-group-item" id="category">Categories</a>
	  <a href="#" class="list-group-item" id="brand">Brands</a>
	 </div>
  </div>
  <div class="col-md-10 well">

    <div class="addContent">
      <h1 style="color:green">Dashboard</h1>
      <hr>
      <div id="admn_area">
    
          <h3 style="color:green">Add Products</h3>

          <div class="e_message">

          </div>

      <form id="admn_data">
  		  <div class="form-group">
  		    <label for="product_cat">Product Category</label>
  		    <select class="form-control" id="get_categoryy" name="product_cat">
                <!-- <option>kenya</option>
                <option>kenya</option>
                <option>kenya</option>
                <option>kenya</option> -->
  		    </select>
  		  </div>

  		  <div class="form-group">
  		    <label for="product_brd">Product Brand</label>
  		    <select class="form-control" id="product_brdd" name="product_brd">
                <!-- <option>kenya</option>
                <option>kenya</option>
                <option>kenya</option>
                <option>kenya</option> -->
  		    </select>
  		  </div>

  		  <div class="form-group">
  		    <label for="product_ttl">Product Title</label>
  		    <input type="text" class="form-control" id="product_ttl" name="product_ttl" placeholder="Product Title">
  		  </div>

  		  <div class="form-group">
  		    <label for="product_prc">Product Price</label>
  		    <input type="text" class="form-control" id="product_prc" name="product_prc" placeholder="Product Price">
  		  </div>

  		  <div class="form-group">
  		    <label for="product_descr">Product Description</label>
  		    <input type="text" class="form-control" id="product_descr" name="product_descr" placeholder="Product Description">
  		  </div>

  		  <div class="form-group">
  		    <label for="product_img">Product Image</label>
  		    <input type="file" class="form-control" id="product_img" name="product_img" placeholder="Product Image">
  		  </div>

  		  <div class="form-group">
  		    <label for="product_kwrd">Product Keywords</label>
  		    <input type="text" class="form-control" id="product_kwrd" name="product_kwrd" placeholder="Product Keywords">
  		  </div>
  		  
  		  <button type="submit" class="btn btn-default" id="addPrdts">Submit</button>

      </form>

      </div>
    </div>
    
  </div>
</div>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="admn_main.js"></script>


</body>
</html>
