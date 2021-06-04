<!DOCTYPE html>
<html>
<head>
<title>Staff Add</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<style>
.saf{
    width: 40%;
    height: 50%;
    margin: auto;
}
</style>
</head>
<body>

    <?php include('header.php') ?>
    <?php require_once 'staff-process.php';?>

    <?php

    if(isset($_SESSION['message'])):?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
    <?php
        $mysqli = new mysqli('localhost','root','root','db_couriers') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM staff") or die($mysqli->error);
        //pre_r($result);
        ?>
        <div class="row justify-content">
            <table class="table">
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Email</th>
                        <th>Staff ID</th>
                        <th>Branch Name</th>
                        <th>City</th>
                        <th>District</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
        <?php
            while($row=$result->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['StaffName'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['StaffID'];?></td>
                    <td><?php echo $row['BranchName'];?></td>
                    <td><?php echo $row['City'];?></td>
                    <td><?php echo $row['District'];?></td>
                    <td><?php echo $row['PhoneNum'];?></td>
                    <td>
                        <a href="staff-add.php?edit=<?php echo $row['id'];?>"
                            class="btn btn-info">Edit</a>
                        <a href="staff-process.php?delete=<?php echo $row['id'];?>"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </table>
        </div>
        <?php

        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>
    <div class=saf>
    <form class="row g-3" action="staff-process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Staff Name</label>
    <input type="text" name="name" class="form-control" id="inputPassword4" value="<?php echo $StaffName;?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" value="<?php echo $email;?>">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Staff ID</label>
    <input type="text" name="staffid" class="form-control" id="inputAddress" value="<?php echo $StaffID;?>">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Branch Name</label>
    <input type="text" name="bname" class="form-control" id="inputAddress2" value="<?php echo $BranchName;?>">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="inputCity" value="<?php echo $City;?>">
  </div>
  <div class="col-md-4">
    <label for="inputDistrict" class="form-label">District</label>
    <input type="text" name="district" id="inputDistrict" class="form-control" value="<?php echo $District;?>">
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputZip" value="<?php echo $PhoneNum;?>">
  </div>
  
  <div class="col-12">
  <?php
  if($update==true):
  ?>
    <button type="submit" name="update" class="btn btn-info">Update</button>
    <?php else: ?>
    <button type="submit" name="add" class="btn btn-primary">Add</button>
    <?php endif;?>
  </div>
</form>
    </div>
</body>
</html>