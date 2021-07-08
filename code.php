<?php
session_start();
include('security.php');
$connection = mysqli_connect("localhost","root","root","db_web2");

if(isset($_POST['registerbtn']))
{

  $fname = $_POST['fname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $phonenum = $_POST['phonenum'];
  $birthday = $_POST['birthday'];

    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];


    $email_query = "SELECT * FROM form WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        header('Location: M_Account.php');
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO form (fname,age,dob,gender,phone,email,username,password,cpassword) VALUES ('$fname','$age','$birthday','$gender',$phonenum','$email','$user_name','$password','$cpassword')";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Account Data Added";
                header('Location: M_Account.php');
            }
            else
            {
                $_SESSION['status'] = "Account Data Not Added";
                header('Location: M_Account.php');
            }
        }
        else
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('Location: M_Account.php');
        }
    }

}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $user_name = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $fname = $_POST['edit_fname'];
    $age = $_POST['edit_age'];
    $dob = $_POST['edit_dob'];
    $gender = $_POST['edit_gender'];
    $email = $_POST['edit_email'];
    $user = $_POST['edit_username'];
    $pass = $_POST['edit_password'];
    $phonenum = $_POST['edit_phonenum'];

    $query = "UPDATE form SET fname='$fname',age='$age',dob='$dob',gender='$gender',phone='$phonenum', username='$user_name', email='$email', password='$password',cpassword='$cpassword' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: M_Account.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: M_Account.php');
    }
}

if(isset($_POST['delete_btn']))
{
$id = $_POST['delete_id'];

$query = "DELETE FROM form WHERE id='$id' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
    $_SESSION['success'] = "Your Data is Deleted";
    header('Location: M_Account.php');
}
else
{
    $_SESSION['status'] = "Your Data is NOT DELETED";
    header('Location: M_Account.php');
}
}



//----------------------------------------------------------------------------------
//Login

    if(isset($_POST['login_btn']))
    {
        $admin_login = $_POST['user_name'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM admin WHERE admin_username='$admin_login' AND password='$password_login' LIMIT 1";
        $query_run = mysqli_query($connection, $query);

       if(mysqli_fetch_array($query_run))
       {
            $_SESSION['username'] = $admin_login;
            header('Location: adminpage.php');
       }
       else
       {
            header("location:admion.php?error=1");
       }

    }
//----------------------------------------------------------------------------------
//Login
if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: admin.php');
}

?>
