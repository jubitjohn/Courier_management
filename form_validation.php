<?php

 <script type="text/javascript">
const form = document.querySelector("form");
const passwordInput = document.querySelector("#password");
const usernameInput = document.querySelector("#username");
const errorMessage = document.querySelector("#error");

passwordInput.addEventListener("input", (evt) => {
  if(passwordInput.value.length < 8)
    passwordInput.classList.add("error");
  else
  {
    passwordInput.classList.add("success");
    passwordInput.classList.remove("error");
  }
});



form.addEventListener("submit", (evt) => {
  const password = evt.target.elements.password.value;
  if(password.length < 9)
  {
    errorMessage.innerText = "Password must be more than 8 characters"
    evt.preventDefault();
  }
});
</script>

?>
<style>
.errorMess{
  color: red;
}

.success{
  border: 2px solid green;
}


.error{
  border: 2px solid red;
}


input{
  outline: none;
}
</style>
<?php
$error="";
if(isset($_POST['Save'])) {
    if(empty('sender-contact')){

        $error = "Enter your mobile number ";
        if (empty($_POST["sender-name"])) {  
            $errMsg = "Error! You didn't enter the Name.";  
                     echo $errMsg;  
        } else {  
            $name = $_POST["name"];  
        }  
        
        ?>
        <?php
        $name = $_POST['sender-name'];  
        if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
            $ErrMsg = "Only alphabets and whitespace are allowed.";  
                     echo $ErrMsg;  
        } else {  
            echo $name;  
        }  ?>
        
        <?php
        if (empty ($_POST["receiver-name"])) {  
            $errMsg = "Error! You didn't enter the Name.";  
                     echo $errMsg;  
        } else {  
            $name = $_POST["name"];  
        }  
        
        ?>
        <?php
        $name = $_POST ["receiver-name"];  
        if(!preg_match ("/^[a-zA-z]*$/", $name) ) {  
            $ErrMsg = "Only alphabets and whitespace are allowed.";  
                     echo $ErrMsg;  
        } else {  
            echo $name;  
        }  
    } else if(strlen($_POST['sender-contact'])<10)
    {
        $error = "Enter a valid mobile number ";
    }else if(!preg_match("/^[6-9]/d{9}$/",$_POST['sender-contact']))
    {
        $error = "Enter a valid mobile number ";
    }
}

?>

<?php

$error="";
if(isset($_POST['Save'])) {
    if(empty('receiver-contact')){

        $error = "Enter your mobile number ";
    } else if(strlen($_POST['receiver-contact'])<10)
    {
        $error = "Enter a valid mobile number ";
    }else if(!preg_match("/^[6-9]/d{9}$/",$_POST['receiver-contact']))
    {
        $error = "Enter a valid mobile number ";
    }
}

?>

<?php

$error="";
if(isset($_POST['Save'])) {
    if(empty('ref_no')){

        $error = "Enter reference number ";
    } else if(strlen($_POST['ref_no'])<10)
    {
        $error = "Enter a valid reference number ";
    }else if(!preg_match("/^[6-9]/d{9}$/",$_POST['ref_no']))
    {
        $error = "Enter a valid reference number ";
    }
}

?>


<!-- .errorMess{
  color: red;
}

.success{
  border: 2px solid green;
}


.error{
  border: 2px solid red;
}


input{
  outline: none;
}
</style>

<script>
const form = document.querySelector("form");
const senderInput = document.querySelector("#sender_name");
const receiverInput = document.querySelector("#receiver_name");
const errorMessage = document.querySelector("#error");

senderInput.addEventListener("input", (evt) => {
  if(senderInput.value.length < 2)
   senderInput.classList.add("error");
  else
  {
   senderInput.classList.add("success");
   senderInput.classList.remove("error");
  }
 
});



form.addEventListener("submit", (evt) => {
  const password = evt.target.elements.sender-name.value;
  if(sender-name.length < 2)
  {
    errorMessage.innerText = "Password must be more than 8 characters"
    evt.preventDefault();
  }
  
});
 </script> -->