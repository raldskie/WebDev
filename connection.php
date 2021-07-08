<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "db_web2";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
