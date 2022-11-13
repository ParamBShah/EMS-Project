<?php

$cookie_name = "userLogedIn";
$cookie_value = "";

if(isset($_COOKIE[$cookie_name])) {
  $cookie_value = $_COOKIE[$cookie_name];
  unset($_COOKIE[$cookie_name]); 
  setcookie($cookie_name, "", time() - 86400, "/emstest", ".projects.digitizerventures.com");
}

if($cookie_value == "admin"){
  header("Location: ..//alogin.html");
  exit();
}
elseif($cookie_value == "employee"){
  header("Location: ..//elogin.html");
  exit();
}
else{
  header("Location: ..//index.html");
  exit();
}

?>