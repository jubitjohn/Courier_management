<?php

$mysqli = new mysqli('localhost','root','root','db_couriers') or die(mysqli_error($mysqli));

$update=false;
$id=0;

$StaffName='';
$email='';
$StaffID='';
$BranchName='';
$City='';
$District='';
$PhoneNum='';


if(isset($_POST['add'])){
    $staffid = $_POST['staffid'];
    $name = $_POST['name'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bname = $_POST['bname'];

    $mysqli->query("INSERT INTO staff (StaffID, StaffName, District, City, PhoneNum, email, BranchName) 
    VALUES('$staffid','$name','$district','$city','$phone','$email','$bname')") or die($mysqli->error);

    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: staff-add.php");
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM staff WHERE id=$id") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: staff-add.php");

}

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $result=$mysqli->query("SELECT * FROM staff WHERE id=$id") or die($mysqli->error());
    if(gettype($result)=='object'){
        $row = $result->fetch_array();
        $StaffName=$row['StaffName'];
        $email=$row['email'];
        $StaffID=$row['StaffID'];
        $BranchName=$row['BranchName'];
        $City=$row['City'];
        $District=$row['District'];
        $PhoneNum=$row['PhoneNum'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $StaffName=$_POST['name'];
    $email=$_POST['email'];
    $StaffID=$_POST['staffid'];
    $BranchName=$_POST['bname'];
    $City=$_POST['city'];
    $District=$_POST['district'];
    $PhoneNum=$_POST['phone'];

    $mysqli->query("UPDATE staff SET StaffName='$StaffName', email='$email', StaffID='$StaffID', BranchName='$BranchName', 
    City='$City', District='$District', PhoneNum='$PhoneNum' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message']="Record has been updated!";
    $_SESSION['msg_type']="warning";

    header('location: staff-add.php');
}

?>