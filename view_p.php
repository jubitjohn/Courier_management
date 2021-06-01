<?php include('header.php') ?>;
<?php include('sidemenu.php') ?>;
<?php include_once('db_connect.php') ?>;
<?php include('library.php') ?>;
<?php

$id = $_GET['id'];

?>


<?php
$qry = "SELECT * from parcel where id = $id;";
$result = mysqli_query($conn, $qry);
if ($result) {
    echo "Query Succesful";
} else {
    echo "Query Corrupt";
}
$row = mysqli_fetch_assoc($result);
?>

<div class="container ">
    <div>
        <table style="width:75%" class="table-responsive table m-5 table-danger table-bordered tab card card-outline  ">
            <tr class="">
                <th>Reference no:</th>
                <td><?php echo $row['reference_no'] ?></td>
            </tr>
            <tr>
                <th>Sender name :</th>
                <td><?php echo $row['sender_name'] ?></td>
            </tr>
            <tr>
            <tr>
                <th>Sender Address :</th>
                <td><?php echo $row['sender_address'] ?></td>
            </tr>
            <tr>
                <th>Sender Contact :</th>
                <td><?php echo $row['sender_contact'] ?></td>
            </tr>
            <tr>
            <tr>
                <th>Receiver Name:</th>
                <td><?php echo $row['recipient_name'] ?></td>
            </tr>
            <tr>
                <th>Receiver Address :</th>
                <td><?php echo $row['recipient_address'] ?></td>
            </tr>
            <tr>
            <tr>
                <th>Receiver Contact :</th>
                <td><?php echo $row['recipient_contact'] ?></td>
            </tr>
            <tr>
                <th>Parcel Weight :</th>
                <td><?php echo $row['p_weight'] ?></td>
            </tr>
            <tr>
                <th>Courier Charge</th>
                <td><?php echo $row['p_price'] ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?php echo $row['p_status'] ?></td>
            </tr>
            <tr>
                <th>From Branch</th>
                <td><?php echo $row['from_branch_id'] ?></td>
            </tr>
            <tr>
                <th>To Branch</th>
                <td><?php echo $row['to_branch_id'] ?></td>
            </tr>

        </table>
    </div>


</div>