<?php include_once('db_connect.php') ?>;
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

$sql = "INSERT INTO
parcel (reference_no,sender_name,sender_address,sender_contact,recipient_name,recipient_address,recipient_contact,from_branch_id,to_branch_id,p_weight,p_price,p_status)
VALUES (' $p_ref',' $s_name','$s_ad','$s_contact','$r_name','$r_ad',' $r_contact',' $p_frm_b','$p_to_b','$p_weight','$p_price','$p_status');";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "data added";
} else {
    echo "error";
}
?>