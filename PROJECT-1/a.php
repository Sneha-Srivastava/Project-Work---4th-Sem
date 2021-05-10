<?php
    $con=mysqli_connect('localhost','root');

    $db_name="CREATE DATABASE SEM_LIST1";  
    $result1=mysqli_query($con,$db_name);
    $tb_name="CREATE TABLE SEM_LIST1.sem1 ( email VARCHAR(255),PRIMARY KEY(email),sem VARCHAR(255),pass VARCHAR(255), courses VARCHAR(255));";
    $result2=mysqli_query($con,$tb_name);

    $db_name1="CREATE DATABASE SEM_LIST3";  
    $result4=mysqli_query($con,$db_name1);
    $tb_name1="CREATE TABLE SEM_LIST3.sem3 ( email VARCHAR(255),PRIMARY KEY(email),sem VARCHAR(255),pass VARCHAR(255),courses VARCHAR(255)); ";
    $result5=mysqli_query($con,$tb_name1);

    $db_name2="CREATE DATABASE SEM_LIST5";  
    $result7=mysqli_query($con,$db_name2);
    $tb_name2="CREATE TABLE SEM_LIST5.sem5 ( email VARCHAR(255),PRIMARY KEY(email),sem VARCHAR(255),pass VARCHAR(255),courses VARCHAR(255)); ";
    $result8=mysqli_query($con,$tb_name2);


    $db_name3="CREATE DATABASE SEM_LIST7";  
    $result10=mysqli_query($con,$db_name3);
    $tb_name3="CREATE TABLE SEM_LIST7.sem7 ( email VARCHAR(255),PRIMARY KEY(email),sem VARCHAR(255),pass VARCHAR(255),courses VARCHAR(255)); ";
    $result11=mysqli_query($con,$tb_name3);

        if(($sem=$_POST['sem'])=="1st sem")
        {       
            $email=$_POST['email']; 
            $pass =$_POST['password'];   
            $cou = "Engg. Maths 1,Engg. Chem,EEE,EME,Functional English ";
            $sql1="INSERT INTO SEM_LIST1.sem1 (email,sem,pass,courses) VALUES ('$email','$sem','$pass','$cou')";
            $result3=mysqli_query($con,$sql1);
            mysqli_close($con);
            header("location:sem1.html");
        }
   

    if(($sem=$_POST['sem'])=="3rd sem")
    {       
    $email=$_POST['email']; 
    $pass =$_POST['password'];
    $cou = "SDM,MP&MC,OOJ,DS,COA,LD,EVS,PROJECT WORK-1,PHYSICAL ACTIVITY";   
    $sql1="INSERT INTO SEM_LIST3.sem3 (email,sem,pass,courses) VALUES ('$email','$sem','$pass','$cou')";
    $result6=mysqli_query($con,$sql1);
    mysqli_close($con);
    header("location:sem3.html");
    }

    if(($sem=$_POST['sem'])=="5th sem")
    {       
    $email=$_POST['email']; 
    $pass =$_POST['password'];   
    $cou = "AI,CN,USP,SE,SPMF,IOT/ADVANCED JAVA AND J2EE/ADVANCED DS/ADVANCED ALGORITHMS/SYSTEM SOFTWARE AND COMPILER DESIGN/ADVANCED COMPUTER ARCHITECTURE,PROJECT WORK-3,MAKING VIDEOS WITH SOCIAL MESSAGE";
    $sql1="INSERT INTO SEM_LIST5.sem5 (email,sem,pass,courses) VALUES ('$email','$sem','$pass','$cou')";
    $result9=mysqli_query($con,$sql1);
    mysqli_close($con);
    header("location:sem5.html");
    }

    if(($sem=$_POST['sem'])=="7th sem")
    {       
    $email=$_POST['email']; 
    $pass =$_POST['password'];   
    $cou = "BIOLOGY FOR ENGINEERS,CYBER LAW,FORENSICS AND IPR,BLOCK CHAIN,NoSQL DATABASE,MULTIMEDIA COMPUTING,DISTRIBUTED SYSTEMS,SOFTWARE ARCHITECTURE AND DESIGN PATTERNS,CLOUD COMPUTING";
    $sql1="INSERT INTO SEM_LIST7.sem7 (email,sem,pass,courses) VALUES ('$email','$sem','$pass','$cou')";
    $result12=mysqli_query($con,$sql1);
    mysqli_close($con);
    header("location:sem7.html");
    }
?>
