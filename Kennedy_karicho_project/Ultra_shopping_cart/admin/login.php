<?php
  session_start();
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
<p><br /></p>
<p><br /></p>
<p><br /></p>
<div class="container-fluid">
  <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4" id="admn_err_msg">
            <!--Error message alert-->
          </div>
          <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">Admin SignUp Form</div>
        <div class="panel-body">

        <form method="post">
          <div class="row">
            <div class="col-md-12">
              <label for="admn_email">Email Address</label>
              <input type="text" id="admn_email" name="admn_email" class="form-control">
            
              <label for="admn_pss">Password</label>
              <input type="password" id="admn_pss" name="admn_pss" class="form-control">
              <p><br /></p>
              <input style="margin-left:40%;" value="Login" type="button"
               id="admn_lg" name="admn_lg" class="btn btn-success btn-lg">
            </div>
          </div>
        </form>

        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../main.js"></script>


</body>
</html>