<?php
include_once('db_connect.php')
?>
<!DOCTYPE html>

<head>
    <title>View</title>

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
                . $row["District"] . "</td></tr>"."<tr><td>" . $row["City"] ."<tr><td>" . $row["ContactNum"] ."<tr><td>" . $row["Pin_code"] ;
        }
        echo "</table>";
    } 
    $conn->close();


    ?>

</body>

</html>