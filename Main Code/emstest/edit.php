<?php
require_once ('process/alogincheck.php');
?>

<?php

require_once ('process/dbh.php');
$statuscheck1 = false;
$statuscheck2 = false;
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
  	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);


$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email', `password`='$password', `gender`='$gender',`contact`='$contact', `address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
$statuscheck1 = true;
	
}

$sql = "SELECT * FROM `salary` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$base = mysqli_real_escape_string($conn, $_POST['base']);
  	$bonus = mysqli_real_escape_string($conn, $_POST['bonus']);

  
$total = $base;
if($bonus > 0){
  $increament = ($base * $bonus) / 100;
  $total = $base + $increament;
}
$result = mysqli_query($conn, "UPDATE `salary` SET `base`='$base', `bonus`='$bonus', `total`='$total' WHERE id=$id");
$statuscheck2 = true;
	
}

if($statuscheck1 == true && $statuscheck2 == true){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Details updated successfully');
    window.location.href='viewemp.php';
    </SCRIPT>");
}


?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
    $password = $res['password'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	
}
}

$sql = "SELECT * from `salary` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
      $base = $res['base'];
      $bonus = $res['bonus'];

}
}

?>

<html>
<head>
	<title>View Employee |  Admin Panel | EMS Project</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>EMS Project</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="/emstest/process/logoutprocess.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Info</h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                      	<div class="input-group">
                            <input class="input--style-1" type="password"  name="password" value="<?php echo $password;?>">
                        </div>
                      
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
									<input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>">
                                </div>
                            </div>
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="degree" value="<?php echo $degree;?>">
                        </div>
                      
                      	<div class="input-group">
                            <input class="input--style-1" type="number" name="base" value="<?php echo $base;?>">
                        </div>
                      
                      	<div class="input-group">
                            <input class="input--style-1" type="number" name="bonus" value="<?php echo $bonus;?>">
                        </div>
                      
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
