<?php

$ref = $_POST['trackid'];
?>
<?php
include_once('db_connect.php')
?>
<?php
$query = "SELECT * FROM parcel WHERE `reference_no`= $ref";
$result_set = mysqli_query($conn, $query);
$track = mysqli_fetch_assoc($result_set);
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
            <div class="row">
                <h2 class="col-12 text-center card-body">
                    <div class="card-text h4"><?php echo "Reference no :" . $ref ?></div>
                </h2>

            </div>
            <div class="row">
                <div class="col-12 text-center text-capitalize align-content-center">
                    <dl>
                        <dd class="card-body"><b><?php echo $track["sender_name"]; ?> </b></dd>
                        <dd><b><?php echo $track["sender_contact"]; ?></b></dd>
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