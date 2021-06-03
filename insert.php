<?php
include_once('db_connect.php')
?>
<?php
    $branch_id = $_POST['branch_id'];
    $branch_name = $_POST['branch_name'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $contact_number = $_POST['contact_number'];
    $pincode = $_POST['pincode'];
    $sql = "INSERT INTO Branches (BranchId,BranchName,District,City,ContactNum,Pin_code)VALUES('$branch_id','$branch_name','$district','$city','$contact_number','$pincode');";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("Location: list_branch.php?id=31");
        exit();
    } else {
        header("Location: list_branch.php?id=32");
        exit();
    }
?>