<?php

include('database/dbconfig.php');
include('functions.php');
$errors = array();


if($_SERVER['REQUEST_METHOD'] == "POST")
  {

$fname=$_POST['fname'];
$age=$_POST['age'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$cpassword = $_POST['cpassword'];

if(!empty($fname) && !empty($age) && !empty($dob) && !empty($gender) && !empty($phone) && !empty($email) && !empty($user) && !empty($pass) && !empty($cpassword))
		{
$register_query = "INSERT INTO `form`(`fname`, `age`, `dob`, `gender`, `email`, `username`, `password`, `cpassword`, `phone`)
VALUES ('$fname','$age','$dob', '$gender','$email','$user','$pass', '$cpassword', '$phone')";


$register_result = mysqli_query($conn, $register_query);
header('index.php');

}
}




?>
