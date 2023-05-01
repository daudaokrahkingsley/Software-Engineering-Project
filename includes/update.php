<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM hospital_tb WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $name = $row['name'];
          $phone = $row['phone'];
          $address = $row['address'];
	  $gender = $row['gender'];
          $age = $row['age'];
	  $message = $row['message'];
          $email = $row['email'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $message = $_POST['message'];
       $email = $_POST['email'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE hospital_tb SET name = '{$name}' , phone = '{$phone}' , address = '{$address}', gender = '{$gender}',age = '{$age}', message = '{$message}', email = '{$email}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
      </div>

      <div class="form-group">
        <label for="email" >Address</label>
        <input type="text" name="address"  class="form-control" value="<?php echo $address  ?>">
      </div>
        <small id="emailHelp" class="form-text text-muted"></small>
    
      <div class="form-group">
        <label for="pass" >Phone</label>
        <input type="text" name="phone"  class="form-control" value="<?php echo $phone  ?>">
      </div>  


      
      <div class="form-group">
        <label for="pass" >	Gender</label>
        <input type="text" name="gender"  class="form-control" value="<?php echo $gender  ?>">
      </div>  


     
      <div class="form-group">
        <label for="pass" >age</label>
        <input type="text" name="age"  class="form-control" value="<?php echo $age  ?>">
      </div>  

      
      <div class="form-group">
        <label for="pass" >Message</label>
        <input type="text" name="message"  class="form-control" value="<?php echo $message  ?>">
      </div>  
    
 	
	 <div class="form-group">
        <label for="pass" >Email</label>
        <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div>  



  

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>