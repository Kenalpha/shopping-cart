<?php

session_start();

$_SESSION["uid"]=14;
$_SESSION["name"]="anonymous";

header("Location: index.php");

?>