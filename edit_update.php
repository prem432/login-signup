<?php
    include("connection.php");

    $editId = $_REQUEST['editId'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];

    if($name != "" && $email != "" && $number != ""){
        $mysqli->query("update admin set name = '".$name."', email = '".$email."', number = '".$number."' where id = '".$editId."'  ");
        header("location:home.php?msg=Successfully updated");
    }else {
        header("location:edit.php?msg=Update Failed");
    }

?>