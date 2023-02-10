<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


   <?php

   if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (empty($name) || empty($email) || empty($password)) {
         $err = "<span class=\"alert-danger py-2 px-3 w-100 d-block\">All filed is required !</span>";
      } else {
         $err = "<span class=\"alert-success py-2 px-3 w-100 d-block\">Data add successful</span>";
      }
   }

   ?>

   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <div class="p-5">
         <form action="" method="POST" enctype="multipart/form-data">
            <?php
            if (isset($err)) {
               echo $err;
            }
            ?>
            <div class="mb-3 mt-5">
               <label class="form-label">Full Name</label>
               <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
               <label class="form-label">Email address</label>
               <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
               <label class="form-label">Password</label>
               <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
         </form>
      </div>
   </div>
</body>

</html>