<?php
    include("connection.php");

    if(isset($_GET['delId']))
    $id=$_GET['delId'];

    $mysqli->query("delete from admin where id = $id");  
    
    if($id){
        mysqli_close($mysqli);
        header("location:home.php?msg=Successfully Deleted!");
        exit();
    }else {
        echo "Error Deleting Record";
    }

?>