<?php include('header.php') ?>;
<?php include_once('db_connect.php') ?>;

<head>
    <?php include('library.php') ?>;
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;



        }

        .container {
            max-width: 1000px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            margin-left: 300px;
            margin-top: 80px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }


        form .button {
            height: 45px;
            margin: 35px 0;
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #fa1e0e;
        }

        @media (max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media (max-width: 459px) {
            .container .content {
                flex-direction: column;
            }
        }
    </style>

</head>
<?php

$id = $_GET['id'];

?>
<?php

$qry = "SELECT * from branches where id = $id;";
$result = mysqli_query($conn, $qry);
if ($result) {
    echo "";
} else {
    echo "Query Corrupt";
}
$row = mysqli_fetch_assoc($result);
?>

<body>
    
    




    <div class="container">
        <div class="title">Edit Branch</div>
        <div class="content">
            <form action="branch_update.php?id=<?php echo $row['id'] ?>" method="POST">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Branch Id</span>
                        <input type="text" placeholder="" name="branch_id" value="<?php echo $row['BranchID'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Branch Name</span>
                        <input type="text" placeholder=" " name="branch_name"  value="<?php echo $row['BranchName'] ?>"required>
                    </div>
                    <div class="input-box">
                        <span class="details">District</span>
                        <input type="text" placeholder="" name="district" value="<?php echo $row['District'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" placeholder="" name="city" value="<?php echo $row['City'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="" name="contact_number" value="<?php echo $row['ContactNum'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Pin Code</span>
                        <input type="text" placeholder="" name="pincode" value="<?php echo $row['Pin_code'] ?>" required>
                    </div>
                </div>
                <div class="button" name="submit">
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
    <?php include('sidemenu.php') ?>
</body>