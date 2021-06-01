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
                        <h4>Admin Login</h4>
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
                    <div class="card-text h4">Enter Your Tracking Id :</div>
                </h2>

            </div>
            <div class="row">
                <form action="courier-track-details.php" method="post" class="row">
                    <div class=" d-flex justify-content-center "> <input class="col-4" type="text" id="track_id"
                            name="trackid">
                        <div class="row  "> <input class="col btn btn-danger" type="submit" name="track"
                                value="Track"><br><br>
                        </div>
                    </div>
                    <br><br>



                </form>
            </div>

        </div>



    </div>

    <footer class="fixed-bottom">

        <?php include('footer.php') ?>
    </footer>

</body>


</html>