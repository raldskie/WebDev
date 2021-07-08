<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Personal Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn2" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Personal Data
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Personal Data
            </button>
    </h6>
  </div>

  <div class="card-body">
     <?php
        if(isset($_SESSION['success2']) && $_SESSION['success2'] !=''){
          echo '<h2> '.$_SESSION['success2'].' </h2>';
          unset($_SESSION['success2']);
        }
     ?>
    <div class="table-responsive">
      <?php
                $connection = mysqli_connect("localhost","root","","db_web2");
                $query = "SELECT * FROM form";
                $query_run = mysqli_query($connection, $query);
            ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Age</th>
            <th>Birthdate</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>EDIT </th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if(mysqli_num_rows($query_run) > 0)
              {
                while($row = mysqli_fetch_assoc($query_run))
                  {
              ?>
               <tr>
                     <td><?php  echo $row['id']; ?></td>
                      <td><?php  echo $row['fname']; ?></td>
                      <td><?php  echo $row['age']; ?></td>
                      <td><?php  echo $row['dob']; ?></td>
                      <td><?php  echo $row['gender']; ?></td>
                      <td><?php  echo $row['email']; ?></td>
                      <td><?php  echo $row['phone']; ?></td>
                      <td>
                      <form action="Edit_Personal.php" method="post">
                              <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                              <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                          </form>
                      </td>
                      <td>
                          <form action="code.php" method="post">
                              <input type="hidden" name="delete_id2" value="<?php echo $row['id']; ?>">
                              <button type="submit" name="delete_btn2" class="btn btn-danger"> DELETE</button>
                          </form>
                      </td>
                  </tr>
              <?php
                  }
              }
              else {
                  echo "No Record Found";
              }
              ?>

        </tbody>
      </table>

    </div>
  </div>
</div>

</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
