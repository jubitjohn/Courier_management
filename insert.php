<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'db_couriers';
$db_port = 8889;

$conn = mysqli_connect(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if ($conn->connect_error) {
    echo 'Errno: ' . $conn->connect_errno;
    echo '<br>';
    echo 'Error: ' . $conn->connect_error;
    exit();
}

$branch_id = $_POST['branch_id'];
$branch_name = $_POST['branch_name'];
$district = $_POST['district'];
$city = $_POST['city'];
$contact_number = $_POST['contact_number'];
$pincode = $_POST['pincode'];
$sql = "INSERT INTO Branches(BranchId,BranchName,District,City,ContactNum,Pin_code) VALUES('$branch_id','$branch_name','$district','$city','$contact_number','$pincode')";

if(mysqli_query($con,$sql))
{
    echo "Not Inserted";
}
else
{
    echo "Inserted";
}


?>