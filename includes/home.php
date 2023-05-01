<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Clients List</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Name</th>
              <th  scope="col">Phone</th>
              <th  scope="col">Address</th>
	      <th  scope="col">gender</th>
	      <th  scope="col">age</th>
              <th  scope="col">Message</th>
	      <th  scope="col">Help Type</th>
	      <th  scope="col">Email</th>
	      
              <th  scope="col" colspan="3" class="text-center">Action</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM hospital_tb";               
            $view_users= mysqli_query($conn,$query);     

            
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['name'];        
              $phone = $row['phone'];         
              $address = $row['address'];  
              $gender = $row['gender'];
              $age = $row['age'];
	      $helptype = $row['helptype'];
              $message = $row['message'];
              $email = $row['email'];        

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$phone}</td>";
              echo " <td > {$address} </td>";
	      echo " <td > {$gender}</td>";
              echo " <td > {$age}</td>";
	      echo " <td > {$helptype}</td>";
              echo " <td > {$message} </td>";
 	       echo " <td > {$email} </td>";


              echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>