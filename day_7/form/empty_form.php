<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>empty form</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

   <?php

   if (isset($_POST['submit'])) {

      // get all values
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(empty($name)){
         $err = '<span class="text-danger">your name is undefine!</span>';
      }
      elseif(empty($email)){
         $err = '<span class="text-danger">your email is undefine!</span>';
      }
      elseif(empty($password)){
         $err = '<span class="text-danger">your password is undefine!</span>';
      }
      else{
         $submit = '<span class="text-danger">your date is submit</span>';
      }
   }
   ?>



   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
         <?php
               if(isset($submit)){
                  echo $submit;
               }
            ?>
         <div class="mb-3 mt-5">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control">
            <?php
               if(isset($err)){
                  echo $err;
               }
            ?>
         </div>
         <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control">
            <?php
               if(isset($err)){
                  echo $err;
               }
            ?>
         </div>
         <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            <?php
               if(isset($err)){
                  echo $err;
               }
            ?>
         </div>
         <input type="submit" name="submit" class="btn btn-primary" value="submit">
      </form>
   </div>

</body>

</html>