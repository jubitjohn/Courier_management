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
            <div class="row d-flex justify-content-center ">

                <div class="col-5 text-center">
                    <h3 class="bg-success"><?php echo "Tracking id :" . $ref ?></h3>
                </div>


            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4 text-capitalize text-center ">
                    <dl>
                        <dd class=" bg-danger ">
                            <b><?php echo "Reference no : " . $parcel["reference_no"]; ?> </b>
                        </dd>

                    </dl>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4 text-capitalize text-center ">
                    <dl>
                        <dd class=" bg-danger ">
                            <b><?php echo $parcel["from_branch_id"]; ?> </b>
                        </dd>

                    </dl>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4 text-capitalize text-center ">
                    <dl>
                        <dd class=" bg-danger ">
                            <b><?php echo $parcel["to_branch_id"]; ?> </b>
                        </dd>

                    </dl>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4 text-capitalize text-center ">
                    <dl>
                        <dd class=" bg-danger ">
                            <b><?php echo $track["parcel_status"]; ?> </b>
                        </dd>

                    </dl>
                </div>

            </div>

        </div>



    </div>

    <footer class="fixed-bottom">
        <div class="text-center p-4">&copy courier management systems <?php echo date('Y'); ?>
        </div>
    </footer>

</body>

</html>