<?php include_once('db_connect.php') ?>;
<?php

$id = $_GET['id'];

?>
<?php




$sql = "DELETE FROM parcel WHERE id='$id';";
$sql1 = "DELETE FROM parcel_tracks WHERE id='$id';";

$delresult = mysqli_query($conn, $sql);
$delresult1 = mysqli_query($conn, $sql1);
if ($delresult || $delresult1) {
    header("Location: list_parcel.php?id=11");
    exit();
} else {
    header("Location: list_parcel.php?id=12");
    exit();
}
?>