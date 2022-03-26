<?php
include 'connect.php';

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Staff Details</title>
  </head>
  <body>
   
    <div class="container border col-lg-8 col-md-4 mt-4 p-4">
    <h2 class="text-bold float-right">Staff Details</h2>
        <button class="btn btn-primary my-5"> <a href="login.php" class="text-light">Add Staff</button>


    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">mobileNumber</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $sql= "SELECT *FROM crud";
   $result= mysqli_query($conn,$sql);
   if($result){
      while($row=mysqli_fetch_assoc($result)){
       $id=$row['id'];
       $firstName=$row['firstName'];
       $lastName=$row['lastName'];
       $email=$row['email'];
       $mobileNumber=$row['mobileNumber'];
       $Password=$row['Password'];
       echo'<tr>
       <th scope="row">'.$id.'</th>
       <td>'.$firstName.'</td>
       <td>'.$lastName.'</td>
       <td>'.$email.'</td>
       <td>'.$mobileNumber.'</td>
       <td>'.$Password.'</td>

       <td>
       <button class="btn btn-primary" ><a href="update.php? updateid='.$id.'" class="text-light">Update</button>
       <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</button>
   </td>
     </tr>';
      }
   } 
   
   
   ?>
  
  </tbody>
</table>
</div>

    
  </body>
</html>