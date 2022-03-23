<?php include("connection.php");
if(isset($_SESSION['id'])){
    header("location:home.php");
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<style>
    .form-group{
        margin: 30px;
    }
    .container{
        width: 700px;
        border: 1px solid;
        height: 400px;
    }
    .form-control{
        width: 600px;
    }
    #gender{
        margin-right: 20px;
    }

</style>
<body>
    <h1 style="text-align: center;">Login Form</h1>
<div class="container">
    <div class="navbar">
        <div class="col-md-10">
    <form action="index_update.php" method="POST">
    
<div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email id">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Login</button><br><br><br>
        <h6 style="color: red;">If You Don't Have An Account Click Here</h6>
       <a href="register.php" class="btn btn-primary">Register</a>
        </div>
        </div>
    </form>
    
</div>


</div>




</body>
</html>