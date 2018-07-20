<?php

include "db.php";

$f_name = security($_POST["f_name"]);
$l_name = security($_POST["l_name"]);
$email = security($_POST["email"]);
$password = security($_POST["password"]);
$repassword = security($_POST["repassword"]);
$mobile = security($_POST["mobile"]);
$address1 = security($_POST["address1"]);
$address2 = security($_POST["address2"]);

$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z](2,4))$/";
$number = "/^[0-9]+$/";

#security function
function security($data){
  global $con;

  $data=mysqli_real_escape_string($con, $data);
  $data=htmlspecialchars($data);
  $data=trim($data);
  return $data;
}

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)){
	echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields</b>
      </div>;
	";
}else{
// if (!preg_match($name, $f_name)) {
//     echo "
//       <div class='alert alert-warning'>
//         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//         <b>This '$f_name' is not valid</b>
//       </div>";
//      exit();
// }
// if (!preg_match($name, $l_name)) {
//       echo "
//       <div class='alert alert-warning'>
//         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//         <b>This '$l_name' is not valid</b>
//       </div>";
//       exit();
//  }
//  if (!preg_match($emailValidation, $email)) {
//       echo "
//       <div class='alert alert-warning'>
//         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//         <b>This '$email' is not valid</b>
//       </div>";
//  	exit();
// }
if(strlen($password) < 9){ #Checking password strength
	echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Password is weak</b>
      </div>";
    exit();
}
if ($password != $repassword) { #checking matching of passwords
	echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Password do not match</b>
      </div>";
}
// if (!preg_match($number, $mobile)) {
//     echo "
//       <div class='alert alert-warning'>
//         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//         <b>Mobile number $mobile is not valid</b>
//       </div>";
// exit();
// }
if (!(strlen($mobile) == 10)) {
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Mobile number must be 10 digit</b>
      </div>";
}

#Checking whether the email address exist in our database
$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
$check_query = mysqli_query($con, $sql);
$count_email = mysqli_num_rows($check_query);
if ($count_email > 0) {
	echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Email Address is already available try another email address please</b>
      </div>";
	exit();
}else{
    $password = md5($password); #Hashing the password

	$sql = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`,
	 `password`, `mobile`, `address1`, `address2`) 
	  VALUES (NULL, '$f_name', '$l_name', '$email', '$password', 
	  '$mobile', '$address1', '$address2')";

    $run_query = mysqli_query($con, $sql);
    if ($run_query) {
    	echo "
	      <div class='alert alert-success'>
	        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	        <b>You are Registered successfully..!</b>
	      </div>";
    }
}

}

?>