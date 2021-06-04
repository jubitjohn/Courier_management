<?php include_once('db_connect.php') ?>;
<?php

$id = $_GET['id'];

?>
<?php


$s_name = $_POST['sender-name'];
$s_ad = $_POST['sender-ad'];
$s_contact = $_POST['sender-contact'];
$r_name = $_POST['receiver-name'];
$r_ad = $_POST['receiver-ad'];
$r_contact = $_POST['receiver-contact'];
$p_ref = $_POST['ref_no'];
$p_weight = $_POST['p_weight'];
$p_price = $_POST['p_price'];
$p_frm_b = $_POST['frm_branch'];
$p_to_b = $_POST['to_branch'];
$p_status = $_POST['p_status'];

$sql = "UPDATE parcel set reference_no ='$p_ref',sender_name='$s_name',sender_address='$s_ad',sender_contact='$s_contact',recipient_name='$r_name',recipient_address='$r_ad',recipient_contact='$r_contact',from_branch_id='$p_frm_b',to_branch_id='$p_to_b',p_weight='$p_weight',p_price ='$p_price',p_status=' $p_status' where id= $id ;";

/*(reference_no,sender_name,sender_address,sender_contact,recipient_name,recipient_address,recipient_contact,from_branch_id,to_branch_id,p_weight,p_price,p_status)
VALUES (' $p_ref',' $s_name','$s_ad','$s_contact','$r_name','$r_ad',' $r_contact',' $p_frm_b','$p_to_b','$p_weight','$p_price','$p_status');";*/
$sql1 = "UPDATE parcel_tracks set parcel_id ='$p_ref',parcel_status='$p_status' where id= $id ;";

//$sql1 ="UPADTE 
//parcel_tracks SET parcel_id='$p_ref',parcel_status='$p_status';";

$result = mysqli_query($conn, $sql);

$result1 = mysqli_query($conn, $sql1);


if ($result && $result1) {
    header("Location: list_parcel.php?id=21");
    exit();
} else {
    header("Location: list_parcel.php?id=22");
    exit();
}
?>