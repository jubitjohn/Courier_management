<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        display: flex;
        height: 80px;
        width: 100%;
        background: #29BB89;
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;

    }

    nav .heading {
        color: #fff;
        font-size: 45px;
        font-weight: 800;
        font-family: Arial, Helvetica, sans-serif;

    }

    nav ul {
        display: flex;

        list-style: none;
    }

    nav ul li {
        margin: 0 5px;
    }

    nav ul li a {
        color: #f2f2f2;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 5px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    nav ul li a.active,
    nav ul li a:hover {
        color: #111;
        background: #fff;
    }
    </style>


</head>

<body>
    <div id="headbar">
        <nav>
            <div class="heading">Courier Management Systems</div>
            <ul>
                <li><a class="active" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>

</body>