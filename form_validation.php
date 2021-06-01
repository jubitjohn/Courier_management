<?php 

$nameErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["sender-name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["sender-name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["receiver-name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["receiver-name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      } 

if (isset ($POST['save']))
{
    $number = $_POST['receiver-contact'];

    if(strlen($_POSTnumber)>10 || strlen($number)<10)
    {
        echo "Invalid mobile number";
    }

    if (preg_match("/^[a-nd white space allowezA-Z-' ]*$/",$number)) {
        echo "Invalid mobile number";
      }
}