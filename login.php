<?php

include('database/dbconfig.php');
include('functions.php');
$errors = array();

	 $username = $_POST['user_name'];
	 $password = $_POST['pass_word'];

	// $password = md5($password);
    $query = "SELECT * FROM `form` WHERE `username` = '$username' AND `password` = '$password' LIMIT 1";
    // $result = mysqli_query($conn, $query);

    $result = $conn->query($query);

    if($result->num_rows > 0){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('Location: homepage.php');
        exit();
    }else{
        array_push($errors, "Incorrect Username/Password");
        echo json_encode($errors);
        // header('Location: index.php');
        // exit();
    }

?>