<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;

        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
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

<body>
    <div class="container">
        <div class="title">New Branch</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Id</span>
                        <input type="text" placeholder="Enter your Id" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Branch Id</span>
                        <input type="text" placeholder="Enter your Branch Id" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Branch Name</span>
                        <input type="text" placeholder="Enter your Branch Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">District</span>
                        <input type="text" placeholder="Enter your District" required>
                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" placeholder="Enter your City" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="Enter your Contact Number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Pin Code</span>
                        <input type="text" placeholder="Enter your Pin Code" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>