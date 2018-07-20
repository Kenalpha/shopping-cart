<?php

session_start();
include "../db.php";

if (isset($_POST["admnLogin"])) {
   $email = security($_POST["admnEmail"]);
   $password = md5($_POST["admnPassword"]); #Hashing the password

 if (isset($email) && isset($password)) {
   $sql = "SELECT * FROM Admin WHERE email = '$email' AND password = '$password' ";
   $run_query = mysqli_query($con, $sql);
   $count = mysqli_num_rows($run_query);
   if ($count == 1) {
       $row = mysqli_fetch_array($run_query);
       $_SESSION["aid"] = $row["admin_id"];
       $_SESSION["aname"] = $row["first_name"];
       echo "true";
   }else{
       echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Incorrect password or email</b>
      </div>";
   }
  }else{
      echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Fill all the fields</b>
      </div>";
  }
}

#security function
function security($data){
  global $con;

  $data=mysqli_real_escape_string($con, $data);
  $data=htmlspecialchars($data);
  $data=trim($data);
  return $data;
}

?>