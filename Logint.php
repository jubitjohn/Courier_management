<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<style>
    body {
        background-color: #e62b1e;/*#f90606;*/
    }
    .row{
        box-shadow: 0 4px 8px 8px darkred, 0 6px 20px 10px darkred;
        width: 75%;
        height: 500px;
        display: flex;
        flex-direction: row;
        margin-top: 8%;
    }
    .wel_head{
        font-family: 'Lato', sans-serif;
        color:red;
        font-size: 2.1em;
        line-height: 1.7em;
        font-weight: 700;
    }
    .moto_hed{
        font-family: sans-serif;
        font-style: italic;
        font-size: 1.5em;
        line-height: 1.1em;
        color: red;
    }
    .sign_in_form{
        text-align: center;
        margin-top: 70px;
    }
    .error{
        background-color: #ffcccc;
        /*margin-left: 100px;*/
        border-radius: 4px;
        padding: 3px 0px;
    }
    .err{
        width: 60%;
        margin: auto;
    }
    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #ff471a;
        border: none;
        color: black;
        text-align: center;
        font-size: 18px;
        padding: 8px 2px;
        transition: all 0.5s;
        cursor: pointer;
        width: 15%;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .button:hover {
        background-color: #990000;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        color: white;
        width: 17%;
    }
</style>
</head>
<body>
<div class="row mx-auto">
    <div class="col-sm px-0">
        <img src="./images/coimg2.jpg" alt="photo" style="width: 100%; height: 100%;">
    </div>
    <div class="col-sm pt-5 " style="background-color: #ff9900 ;">
        <h1 class="wel_head" style="color: black; margin-top: 0px; margin-left: 20px;">Welcome to AdaidCouriers</h1>
        <h4 class="moto_hed" style="color: #666666; margin-top: -10px; margin-left:20px;" >--Everything at your doorstep</h4>
        <form class="sign_in_form" action="login.php" method="POST">
            <div class="err">
            <?php if (isset($_GET['error'])) {?>
                <p class="error" ><span>&#10060;</span><?php echo $_GET['error']; ?></p>
            <?php } ?>
            </div>
            <p>
            <input type="text" id="email" name="email" placeholder="&#9993; Email or username" style="  width: 60%; font-size: 1.2em; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; padding: 8px 15px; border-radius: 4px;  border: 0px; ">
            </p>
            <p>
            <input type="password" id="pass" name="pass" placeholder="&#128273;Password" style="  width: 60%; padding: 8px 15px; border-radius: 4px; border: 0px; font-size: 1.2em; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
            </p>
            <button class="button" style="vertical-align:middle" type="submit" value="Login">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>