<?php include("connection.php");
if(isset($_SESSION['id'])){
    header("location:home.php");
   
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap file -->
    <link href="/bootstrap-5.1.3-dist/css">
    <link href="/bootstrap-5.1.3-dist/js">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
          .form-group{
        margin: 20px;
    }
    .container{
        width: 700px;
        border: 1px solid;
        height: 600px;
    }
    .form-control{
        width: 600px;
    }
    #gender{
        margin-right: 20px;
    }
    </style>
</head>
<body>
<h1 style="text-align: center;">Registration Form</h1>
  

    <div class="container">
    <div class="navbar">
    <form action="register_update.php" method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Email id">
    </div>
        
    <div class="form-group">
        <label for="number">Mobile No:</label>
        <input type="text" name="number" class="form-control" id="number" placeholder="Mobile No">
    </div>

    <div class="form-group">
        <label for="gender">Gender:</label>&nbsp;&nbsp;
        <label for="gender">Male </label>
        <input type="radio" name="gender" id="gender" value="Male">
        <label for="gender">Female </label>
        <input type="radio" name="gender" id="gender" value="Female">
        <label for="gender">Others </label>
        <input type="radio" name="gender" id="gender" value="Others">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control"  id="password" placeholder="Password">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Register</button><br><br><br>
        <h6 style="color: red;">If You Have An Account Click Here To Login</h6>
        <a href="index.php" class="btn btn-primary"> Login</a>
    </div>

        </form>

        </div>


        </div>


    
</body>
</html>