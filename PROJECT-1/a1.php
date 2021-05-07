<?php
$pass = $_POST['password'];
if($pass=='BMSCE' or $pass=='bmsce' or $pass=='Bmsce')
{
    header('location:faculty_list.html');
}
echo "<script type='text/javascript'>
                alert('Invalid Email Id or password.Please try again.')
                window.location.href='login.html'
        </script>"
?>        