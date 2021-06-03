<?php
if (emptyempty ($_POST["sender-name"])) {  
    $errMsg = "Error! You didn't enter the Name.";  
             echo $errMsg;  
} else {  
    $name = $_POST["name"];  
}  

?>
<?php
$name = $_POST ["sender-name"];  
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} else {  
    echo $name;  
}  ?>

<?php
if (emptyempty ($_POST["receiver-name"])) {  
    $errMsg = "Error! You didn't enter the Name.";  
             echo $errMsg;  
} else {  
    $name = $_POST["name"];  
}  

?>
<?php
$name = $_POST ["receiver-name"];  
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} else {  
    echo $name;  
}  ?>

<?php

$error=""
if (isset($_POST['Save'])) {
    if(empty('sender-contact')){

        $error = "Enter your mobile number "
    } else if(strlen($_POST['sender-contact'])<10)
    {
        $error = "Enter a valid mobile number "
    }else if(!preg_match("/^[6-9]/d{9}$/",$_POST['sender-contact']))
    {
        $error = "Enter a valid mobile number "
    }
}

?>

<?php

$error=""
if (isset($_POST['Save'])) {
    if(empty('receiver-contact')){

        $error = "Enter your mobile number "
    } else if(strlen($_POST['receiver-contact'])<10)
    {
        $error = "Enter a valid mobile number "
    }else if(!preg_match("/^[6-9]/d{9}$/",$_POST['receiver-contact']))
    {
        $error = "Enter a valid mobile number "
    }
}

?>

<?php

$error=""
if (isset($_POST['Save'])) {
    if(empty('ref_no')){

        $error = "Enter reference number "
    } else if(strlen($_POST['ref_no'])<10)
    {
        $error = "Enter a valid reference number "
    }else if(!preg_match("/^[6-9]/d{9}$/",$_POST['ref_no']))
    {
        $error = "Enter a valid reference number "
    }
}

?>

