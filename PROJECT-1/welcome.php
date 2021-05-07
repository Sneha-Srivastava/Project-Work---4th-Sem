<html>
        <?php
            
            $myfile=fopen("demo.txt","a+");
            $name=$_POST["email"];
            $textwrite="email" . " ". $name;
            fwrite($myfile,$textwrite);
            fclose($myfile);
        ?>
    </body>
</html>        
