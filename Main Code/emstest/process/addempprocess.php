<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$base = $_POST['salary'];
$bonus = $_POST['bonus'];

$total = $base;
if($bonus > 0){
  $increament = ($base * $bonus) / 100;
  $total = $base + $increament;
}

$sql = "INSERT INTO `employee`(`firstName`, `lastName`, `email`, `password`, `gender`, `contact`, `address`, `dept`, `degree`) VALUES ('$firstname','$lastName','$email','$password', '$gender','$contact', '$address','$dept','$degree')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;



$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$base','$bonus','$total')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Register')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}


?>