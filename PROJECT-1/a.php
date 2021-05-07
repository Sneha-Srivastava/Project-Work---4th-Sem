<?php
    $host="localhost"; 
    $email="root"; 
    $pass=""; 
    $db_name="sem1_db";
    $tbl_name="sem1";
    $conn =mysqli_connect("$host","$email","$pass")or die("cannot connect"); 
    mysqli_select_db($conn,"$db_name")or die("cannot select DB");
    $email=isset($_POST['email']);
    $sem = isset($_POST['sem']);
    $pass =isset($_POST['password']);
    
    if($sem=="1st sem")
    {       
    $email = stripslashes($email);
    $sem = stripslashes($sem);
    $email= mysqli_real_escape_string($conn,$email);
    $sem= mysqli_real_escape_string($conn,$sem);  
    $sql1="INSERT INTO sem1 VALUES ('$email','$sem')";
    $result1=mysqli_query($conn,$sql1);
    $sql2="SELECT * FROM $tbl_name";
    $result2=mysqli_query($conn,$sql2);
     echo "Success"; 
    }             
   else
   {
   echo "Fail"; 
}
    mysqli_close($conn);
?>