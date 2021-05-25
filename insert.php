<?php
$server="localhost";
$username="root";
$password="";
$dbname="cms_db";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['branch_id']) && !empty($_POST['branch_name']) && !empty($_POST['district']) &&! empty($_POST['city'])  && !empty($_POST['contact_number'])  && !empty($_POST['pincode']))
    {
        $branch_id =$_POST['branch_id'];
        $branch_name =$_POST['branch_name'];
        $district =$_POST['district'];
        $city =$_POST['city'];
        $contact_number =$_POST['contact_number'];
        $pincode =$_POST['pincode'];
        
        $query="insert into branches(BranchId,BranchName,District,City,ContactNum,Pin_code) values('$branch_id','$branch_name','$district','$city','$contact_number','$pincode')";
        $run= mysqli_query($conn,$query) ;
        if($run){
           echo "Form submitted successfully" ;
        }

        else{
            echo "Form not submitted successfully" ;
        }
    }
    else{
        echo "All fields required" ;
    }

       



        
        
}

?>
