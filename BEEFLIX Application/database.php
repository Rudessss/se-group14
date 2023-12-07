<?php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $name = "projek_se_it_div";
        $conn = "";

        try{
            $conn = mysqli_connect($server, $user, $pass, $name);
        }
        catch(mysqli_sql_exception){
            echo"fail<br>";
        }

?>