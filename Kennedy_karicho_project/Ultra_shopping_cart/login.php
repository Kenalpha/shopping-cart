<?php

include "db.php";

session_start();

if (isset($_POST["userLogin"])) {
   $email = security($_POST["userEmail"]);
   $password = md5($_POST["userPassword"]); #Hashing the password

   $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' ";
   $run_query = mysqli_query($con, $sql);
   $count = mysqli_num_rows($run_query);
   if ($count == 1) {
       $row = mysqli_fetch_array($run_query);
       $_SESSION["uid"] = $row["user_id"];
       $_SESSION["name"] = $row["first_name"];
       echo "true";
   }else{
       echo "Wrong password or email";
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
