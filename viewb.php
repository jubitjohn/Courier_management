<?php
include_once('db_connect.php')
?>
<!DOCTYPE html>

<head>
    <title>View</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>

</head>

<body>

    <?php
    $sql = "SELECT BranchId,BranchName,District,City,ContactNum,Pin_code FROM Branches;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["BranchId"] . "</td><td>" . $row["BranchName"] . "</td><td>"
                . $row["District"] . "</td><td>"  . $row["City"] . "</td><td>" . $row["ContactNum"] . "</td><td>" . $row["Pin_code"]. "</td></tr>";
        }
        echo "</table>";
    }
    $conn->close();


    ?>

</body>

</html>