
<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT *FROM crud WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
       $firstName=$row['firstName'];
       $lastName=$row['lastName'];
       $email=$row['email'];
       $mobileNumber=$row['mobileNumber'];
       $Password=$row['Password'];

if(isset($_POST['submit'])){
   $firstName=$_POST['firstName'];
   $lastName=$_POST['lastName'];
   $email=$_POST['email'];
   $mobileNumber=$_POST['mobileNumber'];
   $Password=$_POST['Password'];

   $sql="UPDATE crud SET id='$id',firstName='$firstName',lastName='$lastName',email='$email',mobileNumber='$mobileNumber',Password='$Password' where id='$id'";

   $result=mysqli_query($conn,$sql);
   if($result){
       
     header('location:display.php');
        } else{
      die(mysqli_error($conn));
   }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>User Login</title>
  </head>
  <body>
  <div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow-lg">
   <form method="POST"> 
   <div class="mb-3">
      <label  class="form-label">First Name</label>
      <input type="name" class="form-control"  placeholder="first name" name="firstName"  value=<?php echo $firstName?>>
   </div>
   <div class="mb-3">
      <label  class="form-label">Last Name</label>
      <input type="name" class="form-control"  placeholder="last name" name="lastName"value=<?php echo $lastName?>>
   </div>
    <div class=" mb-3">
      <label  class="form-label">Email address</label>
      <input type="email" class="form-control"aria-describedby="emailHelp" placeholder="Email" name="email"value=<?php echo $email?>>
    
    </div>
    
    <div class="mb-3">
      <label  class="form-label">Mobile Number</label>
      <input type="text" class="form-control" placeholder="Mobile Number"  name="mobileNumber"value=<?php echo $mobileNumber?>>
    </div>
    <div class="mb-3">
      <label  class="form-label">Password</label>
      <input type="password" class="form-control"  placeholder="Password" name="Password"value=<?php echo $Password?>>
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">update</button>
   </form>
  </div>

  </body>
</html>