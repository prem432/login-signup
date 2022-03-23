<?php  
include("connection.php");
if(!isset($_SESSION['id'])){
    header("location:index.php");
   
}
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
        </head>  
      <body>  
      <a href="logout.php"><button class="btn btn-danger">LogOut</button></a>
        
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Record</button>
        
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2>Add Customer</h2>
        </div>
        <div class="modal-body">
            <form action="add_update.php" method="POST">
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
        <label for="gender">Gender:</label>
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
    <button class="btn btn-primary" type="submit">Add Customer</button>
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
           <div class="container">  
                <h1 align="center">Data Base Upload Using Bootstrap table data </h1>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Sr no.</td>  
                                    <td>Full Name</td>  
                                    <td>Email Id</td>  
                                    <td>Mobile No</td>  
                                    <td>Action</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          $record = $mysqli->query("select * from admin");
                          while($row = mysqli_fetch_array($record))  
                          {  
                              ?> <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['number']; ?></td>
                             
                              <td>  
                              <a href="edit.php?editId=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button> </a>
                              <a href="delete.php?delId=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure You Want To Delete!')"><button class="btn btn-danger">Delete</button> </a>
      
                              </td>
                          </tr>  
                        <?php  } ?> 
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  