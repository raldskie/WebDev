<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php
          $connection = mysqli_connect("localhost","root","","db_web");
            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM form WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Full name</label>
                                <input type="text" name="edit_fname" value="<?php echo $row['fname'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input type="text" name="edit_dob" value="<?php echo $row['dob'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <br>
                                <input type="radio" class="radi" name="edit_gender" value="Male" required>
                                <label class="radi_lab">Male</label>
                                <input type="radio" name="edit_gender" class="radi" value="Female" required>
                                <label class="radi_lab">Female</label>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                               <input type="text" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control"
                                    placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="edit_phonenum" value="<?php echo $row['phone'] ?>" class="form-control"
                                    placeholder="Enter Phone Number">
                            </div>
                        

                            <a href="M_Personal.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn2" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
