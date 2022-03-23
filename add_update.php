<?php
include("connection.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$gender = $_REQUEST['gender'];
$password = $_REQUEST['password'];

if ($name != "" && $email != "" && $number != "" && $gender != "" && $password != "") {
           $mysqli->query("insert into admin set name = '" . $name . "',email = '" . $email . "',
             number = '" . $number . "', gender = '".$gender."', password = '".$password."',
              created = '" . time() . "', modified = '" . time() . "' ");
            header("location:home.php?msg=Successfully added");
        } else {
            header("location:add.php?msg=Something Went Wrong");
        }
    

