<?php
 include("connection.php"); 
  

    $email = $_REQUEST['email'];   
    $password = $_REQUEST['password'];   
 
 if($email == ""){
     header("location:index.php?msg=Please Enter Correct Email");
 }

 if($password == ""){
     header("location:index.php?msg=Please Enter Correct password");
 }
 if($email != "" && $password != ""){
 $record = $mysqli->query("select * from admin where email = '".$email."' and password = '".$password."' ");
    $count = mysqli_num_rows($record);
    if($count > 0){
        $result=mysqli_fetch_assoc($record);
        $_SESSION['id'] = $result['id'];
        header("location:home.php?msg=Successful login");
    }
    }else {
        header("location:index.php?msg=Something Wrong");
        
    }
 
 
 ?>