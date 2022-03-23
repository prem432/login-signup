<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
<?php
        if (isset($_GET['editId']))
            $id = $_GET['editId'];
        ?>
    <div class="container">
        <div class="cars">
    
    
    <form action="edit_update.php" method="POST">
        <?php
        $record = $mysqli->query("select * from admin where id = $id");
        while ($result = mysqli_fetch_assoc($record)) {

        ?>
        <br>
        <input type="hidden" name="editId" value="<?php echo $id; ?>">
  
        <div class="form-group">
                <label for="name">Full Name: </label>
            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>">
            </div><br>

            <div class="form-group">
                <label for="email">Email-Id: </label>
            <input type="text" name="email" class="form-control" value="<?php echo $result['email']; ?>">
            </div><br>

            <div class="form-group">
                <label for="number">Mobile No: </label>
            <input type="text" name="number" class="form-control" value="<?php echo $result['number']; ?>">
            </div><br>
            
        <?php } ?>
        
        <button class="btn btn-primary" type="submit">Update Details</button>
      
    </form>
        </div>
    </div>
</body>

</html>