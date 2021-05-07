<html>
        <?php

             
            $myfile=fopen("demo2.txt","a+");
            $checkbox=$_POST["cb"];
            $textwrite="checkbox" . "\t". $checkbox . "\n";
            fwrite($myfile,$textwrite);
            fclose($myfile);
        ?>
        <head>
    <meta charset="utf-8">
    <title>
        Thank you!
    </title>
    <link rel="stylesheet" href="style3.css">
</head>
<style>
button
{
font-size:20px;
padding:10px;
border-radius:20px;
margin:10px;
}
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-size: cover;
}
.t{
    background: url(https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80);
    background-size: cover;
}
.ft{
    padding-top: 100px;
    color:black;
}
  </style>
  <body class="t">

  

        <div>
                <nav class="navbar">
                    <a href="index.html">
                        <img class="logo" src="Pic/logo3.jpeg">
                    </a>
                    
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/B.M.S._College_of_Engineering" target="_blank">About</a></li>
                        <li><a href="https://www.shiksha.com/college/bms-college-of-engineering-basavanagudi-bangalore-397/admission" target="_blank">FAQs</a></li>
                        <li><a href="https://www.bmsce.ac.in/" target="_blank">BMSCE Website</a></li>
                        <li><a href="https://www.google.com/maps/place/BMS+College+of+Engineering/@12.9410174,77.5633371,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae158b11e34d2f:0x5f4adbdbab8bd80f!8m2!3d12.9410122!4d77.5655258" target="_blank">Contact Us</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>       
                </nav>
        </div>
      <div class="ft">
<center><img src="https://ssipgujarat.in/gih/img/thanks.jpg" alt="THANK YOU!">
    <h2> COURSE REGISTRATION COMPLETED SUCCESSFULLY!</h2></center></div>
  

    </body>
</html>        
