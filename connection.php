<?php session_start();
    $mysqli = new mysqli("localhost","root","","logfirst");

        //check connection 
        if($mysqli->errno){
            echo "Failed to Connect Mysqli " .$mysqli->errno;
            exit();
        }


?>