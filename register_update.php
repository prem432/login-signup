<?php
 include("connection.php"); 

 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $number = $_REQUEST['number'];
 $password = $_REQUEST['password'];
    
 if($name != "" && $email != "" && $number != "" && $password != ""){

    $mysqli->query("insert into admin set name = '".$name."', email = '".$email."', number = '".$number."', password = '".$password."', created = '".time()."', modified = '".time()."' ");
    header("location:index.php?msg=You Have Successfully Registerd!");
 }else{
     header("location:register.php?msg=Something Went wrong!");
 }
 ?>