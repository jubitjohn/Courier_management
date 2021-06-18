<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <title>Courier Management System</title>
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

                <a href="homepage.php">
                <i class='bx bxs-dashboard'></i>
                <span class="link_names"> DASHBOARD</span>
                </a>

                <span class="tooltip">Dashboard</span>

                </li>
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

                    <a href="staff-add.php">
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
                    <a href="courier-track.php">
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