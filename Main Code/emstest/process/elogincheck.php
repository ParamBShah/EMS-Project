<?php

$cookie_name = "userLogedIn";
$cookie_value = "";

if(isset($_COOKIE[$cookie_name])) {
  $cookie_value = $_COOKIE[$cookie_name];
  if($cookie_value != "employee"){
    header("Location: ..//elogin.html");
  	exit();
  }
}
else{
  header("Location: ..//elogin.html");
  exit();
}

?>