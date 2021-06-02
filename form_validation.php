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