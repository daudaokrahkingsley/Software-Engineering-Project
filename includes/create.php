<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
        $message = $_POST['message'];
	 $email = $_POST['email'];
        
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO hospital_tb(name, address, phone, gender,age, message, email) VALUES('{$name}','{$address}','{$phone}', '{$gender}', '{$age}', '{$message}', '{$email}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Client added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Client Details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" class="form-label">Name: </label>
        <input type="text" name="name"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Address: </label>
        <input type="text" name="address"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">Phone: </label>
        <input type="text" name="phone"  class="form-control">
      </div>


     <div class="form-group">
        <label for="pass" class="form-label">Gender: </label>
        <input type="text" name="gender"  class="form-control">
      </div>

     <div class="form-group">
        <label for="pass" class="form-label">Age: </label>
        <input type="text" name="age"  class="form-control">
      </div>





     <div class="form-group">
        <label for="pass" class="form-label">Message: </label>
        <input type="text" name="message"  class="form-control">
      </div>
  	

     <div class="form-group">
        <label for="pass" class="form-label">Email: </label>
        <input type="text" name="email"  class="form-control">
      </div>

      
    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>