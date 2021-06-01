<?php include('header.php') ?>;
<?php include_once('db_connect.php') ?>;

<head>
    <?php include('library.php') ?>;
    <link rel="stylesheet" href="css/add_parcel.css" />

</head>
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


<body class="overflow-auto">

    <div class="n_parcel">


        <div class="card ">

            <div class="card-body">

                <form action="p_update.php?id=<?php echo $row['id'] ?>" id="p_manage" method="POST">
                    <div class="row ">
                        <div class="col-lg-6  card-body">
                            <b>Sender Information</b>
                            <div class="card card-body">
                                <div class=" card card-body">
                                    <label> Name</label>
                                    <input type="text" name="sender-name" placeholder="name"
                                        value="<?php echo $row['sender_name'] ?>">
                                </div>
                                <div class=" card card-body">
                                    <label> Sender address</label>
                                    <input type="text" name="sender-ad" value="<?php echo $row['sender_address'] ?>">
                                </div>
                                <div class=" card card-body">
                                    <label> Contact</label>
                                    <input type="text" name="sender-contact"
                                        value="<?php echo $row['sender_contact'] ?>">
                                </div>
                            </div>






                        </div>
                        <div class="col-lg-6 card-body">
                            <b>Receiver Information</b>
                            <div class="card card-body">
                                <div class=" card card-body">
                                    <label> Name</label>
                                    <input type="text" name="receiver-name" placeholder=""
                                        value="<?php echo $row['recipient_name'] ?>">
                                </div>
                                <div class=" card card-body">
                                    <label> Receiver address</label>
                                    <input type="text" name="receiver-ad" placeholder=""
                                        value="<?php echo $row['recipient_address'] ?>">
                                </div>
                                <div class=" card card-body">
                                    <label> Contact</label>
                                    <input type="text" name="receiver-contact" placeholder=""
                                        value="<?php echo $row['recipient_contact'] ?>">
                                </div>
                            </div>






                        </div>
                    </div>
                    <hr>
                    <div class="row bg-light">
                        <div class="col-lg-4 card card-body ">
                            <b>Parcel Information</b>
                            <div class=" card card-body">
                                <label> reference_no</label>
                                <input type="number" name="ref_no" placeholder=""
                                    value="<?php echo $row['reference_no'] ?>">
                            </div>
                            <div class=" card card-body">
                                <label> Weight</label>
                                <input type="text" name="p_weight" placeholder=""
                                    value="<?php echo $row['p_weight'] ?>">
                            </div>
                            <div class=" card card-body">
                                <label> Price</label>
                                <input type="text" name="p_price" placeholder="" value="<?php echo $row['p_price'] ?>">
                            </div>
                            <div class=" card card-body">
                                <label> Status</label>
                                <select name="p_status" id="status" value="<?php echo $row['p_status'] ?>">
                                    <option value="Accepted Parcel"
                                        <?php if ($row['p_status'] == 'Accepted') echo ' selected="selected"'; ?>>
                                        Accepted
                                        Parcel</option>
                                    <option value="Collected"
                                        <?php if ($row['p_status'] == 'Collected') echo ' selected="selected"'; ?>>
                                        Collected</option>
                                    <option value="Shipped"
                                        <?php if ($row['p_status'] == 'Shipped') echo ' selected="selected"'; ?>>Shipped
                                    </option>
                                    <option value="Intransit"
                                        <?php if ($row['p_status'] == 'In-transit') echo ' selected="selected"'; ?>>
                                        In-transit</option>
                                    <option value="Arrived"
                                        <?php if ($row['p_status'] == 'Arrived') echo ' selected="selected"'; ?>>Arrived
                                    </option>
                                    <option value="Ready For Pickup"
                                        <?php if ($row['p_status'] == 'Ready For Pickup') echo ' selected="selected"'; ?>>
                                        Ready For Pickup</option>
                                    <option value="Delivered"
                                        <?php if ($row['p_status'] == 'Delivered') echo ' selected="selected"'; ?>>
                                        Delivered</option>
                                    <option value="Picked Up"
                                        <?php if ($row['p_status'] == 'Picked Up') echo ' selected="selected"'; ?>>
                                        Picked Up</option>
                                    <option value="Delivered Unsuccesful"
                                        <?php if ($row['Delivered Unsuccesful'] == 'Accepted') echo ' selected="selected"'; ?>>
                                        Delivered Unsuccesful</option>

                                </select>
                            </div>





                        </div>
                        <div class="col-lg-4  card card-body">
                            <b>Branch Information</b>
                            <div class=" card card-body">
                                <label> From Branch (id)</label>
                                <input type="text" name="frm_branch" placeholder=""
                                    value="<?php echo $row['from_branch_id'] ?>">
                            </div>
                            <div class=" card card-body">
                                <label> To Branch (id)</label>
                                <input type="text" name="to_branch" placeholder=""
                                    value="<?php echo $row['to_branch_id'] ?>">
                            </div>
                            <br>
                            <div class="row d-flex ">

                                <div class="col col-lg-6 ps-4"> <input class="btn btn-success col-lg-8 " type="submit"
                                        name="Save" value=" Update">
                                </div>

                            </div>




                        </div>
                    </div>
                    <br>

                </form>


            </div>
            <?php include('sidemenu.php') ?>;

        </div>
        <?php include('footer.php') ?>

    </div>


</body>