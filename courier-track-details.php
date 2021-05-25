<?php

$ref = $_POST['trackid'];
?>
<?php
include_once('db_connect.php')
?>
<?php
$query = "SELECT * FROM parcel_tracks WHERE `parcel_id`= $ref";
$result_set = mysqli_query($conn, $query);
$track = mysqli_fetch_assoc($result_set);
$p_id = $track["id"];
$query_p = "SELECT * FROM parcel WHERE `id`= $p_id";
$result_set_p = mysqli_query($conn, $query_p);
$parcel = mysqli_fetch_assoc($result_set_p);



?>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />


</head>

<body class="container p-4 bg-secondary text-white">
    <div>
        <div class="row bg-light ">

            <div class="card-body col-md-8 bg-dark">
                <h2>Courier Management systems</h2>
            </div>
            <div class="col-2 bg-gradient text-center card-body ">
                <div class="mt-2"><a class="  text-center card-link text-decoration-none text-dark" href="#">
                        <h4>Admin Login </h4>
                    </a></div>

            </div>
        </div>


        <div class="bg-gradient mt-5 ">
            <div class="row ">
                <h2 class="col-12 text-center card-body">
                    <div class="card-text">Track Your Order</div>
                </h2>

            </div>

            <div class="row  ">

                <div class="text-center col-6 p-3 offset-3">
                    <h6>
                        <?php echo "Tracking id :" . $ref ?></h6>
                </div>


            </div>
            <?php
            if (!isset($track)) {
                echo '<div class="row d-flex justify-content-center mb-2">

                            <div class=" bg-danger col-4 text-center mb-2">
                                <h4>
                                        Invalid Reference No
            
                                    </h4>
                     </div>';
            }

            ?>

            <div class="row ">
                <div class=" bg-light col-6 p-3  offset-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col-4 text-capitalize text-center ">
                            <dl>
                                <dd class=" bg-danger  p-2">
                                    <b><?php echo "Reference no : <h3>" . $parcel["reference_no"] . "</h3>"; ?> </b>
                                </dd>

                            </dl>
                        </div>

                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4 text-capitalize text-center ">
                            <dl>
                                <dd class=" bg-danger  p-2">
                                    <b><?php echo "Sender Name : <br><h4>" . $parcel["sender_name"] . "</h4>"; ?> </b>
                                </dd>

                            </dl>
                        </div>

                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4 text-capitalize text-center ">
                            <dl>
                                <dd class=" bg-danger  p-2">
                                    <b><?php echo "Recipient Name :  <br><h4>" . $parcel["recipient_name"] . "</h4>"; ?>
                                    </b>
                                </dd>

                            </dl>
                        </div>

                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4 text-capitalize text-center ">
                            <dl>
                                <dd class=" bg-danger p-2">
                                    <b><?php echo "Order Status : <br><div> <h4>" . $track["parcel_status"] . "</h4></div>"; ?>
                                    </b>
                                </dd>

                            </dl>
                        </div>

                    </div>
                </div>
            </div>




        </div>
        <div class="d-flex justify-content-center mt-3">

            <a class="btn btn-dark justify-content-center col-4" href="courier-track.php" role="button">
                <h4>Track
                    again</h4>
            </a>


        </div>

        <footer class="fixed-bottom">
            <div class="text-center p-4">&copy courier management systems <?php echo date('Y'); ?>
            </div>
        </footer>

</body>

</html>