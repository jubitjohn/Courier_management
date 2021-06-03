<?php include_once('db_connect.php') ?>;
<?php

$id = $_GET['id'];

?>
<?php

$u_id = $_POST['branch_id'];
$u_name = $_POST['branch_name'];
$u_district = $_POST['district'];
$u_city = $_POST['city'];
$u_contact_number = $_POST['contact_number'];
$u_pincode = $_POST['pincode'];

$sql = " UPDATE branches set BranchID ='$u_id',BranchName='$u_name',District='$u_district',City='$u_city',ContactNum='$u_contact_number',Pin_code='$u_pincode' where id= $id ;";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: list_branch.php?id=21");
    exit();
} else {
    header("Location: list_branch.php?id=22");
    exit();
}
?>