<?php

$cookie_name = "userLogedIn";
$cookie_value = "";

if(isset($_COOKIE[$cookie_name])) {
  $cookie_value = $_COOKIE[$cookie_name];
  if($cookie_value != "admin"){
    header("Location: ..//alogin.html");
  	exit();
  }
}
else{
  header("Location: ..//alogin.html");
  exit();
}

?>