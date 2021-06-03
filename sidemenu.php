<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <title>Responsive Menubar</title>
    <link rel="stylesheet" href="css/sidemenu.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar">
        <div class="logo_content ">
            <div class="logo">
            <i class='bx bxs-truck'></i>
                <div class="logo-name"> ADMIN</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <div>
            <ul class="nav_list">
            <!--  <li>

                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search" />


                    <span class="tooltip"> Search</span>
                </li> -->

                <li>

                    <a href="new_branch.php">
                        <i class='bx bx-plus'></i>
                        <span class="link_names"> ADD BRANCH </span>
                    </a>

                    <span class="tooltip">Add Branch</span>

                </li>

                <li>

                    <a href="list_branch.php">
                        <i class='bx bx-git-branch'></i>
                        <span class="link_names">BRANCH LIST</span>
                    </a>

                    <span class="tooltip">Branch List</span>

                </li>

                <li>

                    <a href="#">
                        <i class='bx bx-user-plus'></i>
                        <span class="link_names">ADD BRANCH STAFF </span>
                    </a>

                    <span class="tooltip"> Add Staff</span>

                </li>

                <li>

                    <a href="#">
                        <i class='bx bx-list-ol'></i>
                        <span class="link_names">BRANCH STAFF LIST </span>
                    </a>

                    <span class="tooltip">Staff List</span>

                </li>
                <li>
                    <a href="add_parcel.php">
                        <i class='bx bx-book-add'></i>
                        <span class="link_names">ADD PARCEL</span>

                    </a>
                    <span class="tooltip">Add Parcel</span>

                </li>

                <li>
                    <a href="list_parcel.php">
                        <i class='bx bx-list-ul'></i>
                        <span class="link_names"> LIST PARCELS</span>

                    </a>
                    <span class="tooltip"> List Parcels</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-message-square-check'></i>
                        <span class="link_names"> ACCEPTED PARCELS</span>

                    </a>
                    <span class="tooltip1">Accepted parcel</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-cart-alt'></i>
                        <span class="link_names"> COLLECTED</span>

                    </a>
                    <span class="tooltip">Collected</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-anchor'></i>
                        <span class="link_names"> SHIPPED</span>

                    </a>
                    <span class="tooltip">Shipped</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-pointer'></i>
                        <span class="link_names"> IN-TRANSIT</span>

                    </a>
                    <span class="tooltip">In-transit</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bxs-message-square-check'></i>
                        <span class="link_names"> ARRIVED</span>

                    </a>
                    <span class="tooltip">Arrived</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bxs-truck'></i>
                        <span class="link_names">OUT FOR DELIVERY</span>

                    </a>
                    <span class="tooltip1">Out for delivery</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-check'></i>
                        <span class="link_names">READY FOR PICKUP</span>

                    </a>
                    <span class="tooltip1">Ready for pickup</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-like'></i>
                        <span class="link_names"> DELIVERED</span>

                    </a>
                    <span class="tooltip">Delivered</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-user-check'></i>
                        <span class="link_names"> PICKED-UP</span>

                    </a>
                    <span class="tooltip">Picked-up</span>
                </li>
                <li>
                    <a href="homepage.php">
                        <i class='bx bx-shield-x'></i>
                        <span class="link_names">DELIVERY FAILED</span>

                    </a>
                    <span class="tooltip">Delivery Failed</span>
                </li>

                <li>
                    <a href="homepage.php">
                        <i class='bx bx-trip'></i>
                        <span class="link_names">TRACK PARCELS</span>

                    </a>
                    <span class="tooltip">Track Parcels</span>
                </li>

                <li>
                    <a href="homepage.php">
                        <i class='bx bx-clipboard'></i>
                        <span class="link_names">REPORT</span>

                    </a>
                    <span class="tooltip">Report</span>
                </li>

            </ul>
        </div>

    </div>

    <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
       // document.getElementById("headbar").style.marginLeft = "270px";
    }


    searchBtn.onclick = function() {
        sidebar.classList.toggle("active")
    }
    </script>
</body>

</html>