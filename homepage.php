<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Homepage|Dashboard</title>
    <link rel="stylesheet" href="css/homepage.css" />
    <link rel="stylesheet" href="css/sidemenu.css" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <?php include('sidemenu.php') ?>
    <?php include('header.php') ?>

    <div class="home_content">




        <div class="text">Dashboard</div>
        <div class="home">
            <h1>Home</h1>
        </div>
        <!--Home content-->
        <section class="body">
            <div class="cards">
                <div class="row">
                    <ul>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT id from branches ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Total Branches</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-plus'></i>
                            </div>

                        </li>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT id from parcel  ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Total Parcels</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-list-ul'></i>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT id from staff  ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Total Staff</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-list-ol'></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <ul>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Accepted Parcel'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Item accepted by courier</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-message-square-check'></i>
                            </div>

                        </li>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Collected'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>
                                <p>Collected</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-cart-alt'></i>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Shipped';";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Shipped</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-anchor'></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <ul>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Intransit'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>In-transit</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-pointer'></i>
                            </div>

                        </li>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Arrived'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Arrived at destination</p>
                            </div>
                            <div class="right">
                                <i class='bx bxs-message-square-check'></i>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Ready for Pickup';";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Ready for Pickup</p>
                            </div>
                            <div class="right">
                                <i class='bx bxs-truck'></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul>
                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Picked up'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Picked up</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-check'></i>
                            </div>

                        </li>

                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Order Delivered'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p> Delivered</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-like'></i>
                            </div>

                        </li>

                        <li>
                            <div class="left">
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "root", "db_couriers");

                                    $query = "SELECT * FROM parcel_tracks WHERE parcel_status = 'Delivered Unsuccesful'";
                                    $query_run = mysqli_query($connection, $query);

                                    $rows = mysqli_num_rows($query_run);

                                    echo '<h1> ' . $rows . ' </h1>'
                                    ?>

                                <p>Delivery Unsuccessful</p>
                            </div>
                            <div class="right">
                                <i class='bx bx-user-check'></i>
                            </div>

                        </li>
                    </ul>
                </div>
               
            </div>
        </section>

    </div>


    <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }

    searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    </script>


</body>

</html>

<?php
} else {
    header("Location: Logint.php");
    exit();
}
?>