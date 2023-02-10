<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

   <style>
   .error {
      color: red;
   }
   </style>
</head>

<body>


   <?php
      if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone_number = $_POST['phone_number'];

         if(empty($name)){
            $err['name'] = '<span class=\'error\'> * Required </span>';
         }
         if(empty($email)){
            $err['email'] = '<span class=\'error\'> * Required </span>';
         }
         if(empty($phone_number)){
            $err['phone_number'] = '<span class=\'error\'> * Required </span>';
         }


         // Phone Number Manage
         $cell_start = substr($phone_number, 0, 3);


         if(empty($name) || empty($email) || empty($phone_number)){
            $msg = '<span class=\'alert-danger py-2 px-3 w-100 d-block\'>All filed is Required !</span>';
         }
         
         elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $msg = '<span class=\'alert-warning py-2 px-3 w-100 d-block\'>Your email is invalid !</span>';
         }
         
         elseif(in_array($cell_start, ['017', '016', '015', '018', '019', '013', '014']) == false){
            $msg = '<span class=\'alert-warning py-2 px-3 w-100 d-block\'>Your Phone Number is invalid !</span>';
         }

         else{
            $msg = '<span class=\'alert-success py-2 px-3 w-100 d-block\'> Successful !</span>';
         }
      }

   ?>

   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <div class="p-5">
         <form action="" method="POST" enctype="multipart/form-data">
            <?php 
               if(isset($msg)){
                  echo $msg;
               }
            ?>
            <div class="mb-3 mt-5">
               <label class="form-label">Full Name</label>
               <input type="text" name="name" class="form-control" value="<?php if (isset($_POST['submit'])) {
                  echo $name;}?>">
               <?php 
                  if(isset( $err['name'])){
                     echo  $err['name'];
                  }
               ?>
            </div>
            <div class="mb-3">
               <label class="form-label">Email address</label>
               <input type="email" name="email" class="form-control" value="<?php if (isset($_POST['submit'])) {
                  echo $email;}?>">
               <?php 
                  if(isset( $err['email'])){
                     echo  $err['email'];
                  }
               ?>
            </div>
            <div class="mb-3">
               <label class="form-label">Phone Number</label>
               <input type="number" name="phone_number" class="form-control" value="<?php if (isset($_POST['submit'])) {
                  echo $phone_number;}?>">
               <?php 
                  if(isset( $err['phone_number'])){
                     echo  $err['phone_number'];
                  }
               ?>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
         </form>
      </div>
   </div>
</body>

</html>