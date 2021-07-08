<?php
session_start();
include('database/dbconfig.php');

if($conn)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if(!$_SESSION['username'])
{
    header('Location: index.php');
}
?>
