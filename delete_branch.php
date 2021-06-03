<?php include_once('db_connect.php') ?>;
<?php

$id = $_GET['id'];

?>
<?php




$sql = "DELETE FROM branches WHERE id='$id';";


$delresult = mysqli_query($conn, $sql);

if ($delresult) {
    header("Location: list_branch.php?id=11");
    exit();
} else {
    header("Location: list_branch.php?id=12");
    exit();
}
?>