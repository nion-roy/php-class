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
      $roll = $_POST['roll'];
      $number = $_POST['number'];

      if (empty($name)) {
         $err['name'] = '<span class=\'text-danger\'>* Required !</span>';
      }
      if (empty($roll)) {
         $err['roll'] = '<span class=\'text-danger\'>* Required !</span>';
      }
      if (empty($number)) {
         $err['number'] = '<span class=\'text-danger\'>* Required !</span>';
      } else {
         $con = new mysqli('localhost', 'root', '', 'students');
         $sql = "INSERT INTO details(name, roll, number) VALUES ('$name', '$roll', '$number')";
         $con->query($sql);

         header('location:03_form_data_insert.php');
      }
   }

   ?>

   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <div class="p-5">
         <form action="" method="POST">
            <div class="mb-3 mt-5">
               <label class="form-label">Full Name</label>
               <input type="text" name="name" class="form-control" value="<?php if (isset($name)) {
                  echo $name;
               } ?>">
               <?php
               if (isset($err['name'])) {
                  echo $err['name'];
               }
               ?>
            </div>
            <div class="mb-3">
               <label class="form-label">Roll Number</label>
               <input type="number" name="roll" class="form-control" value="<?php if (isset($roll)) {
                  echo $roll;
               } ?>">
               <?php
               if (isset($err['roll'])) {
                  echo $err['roll'];
               }
               ?>
            </div>
            <div class="mb-3">
               <label class="form-label">Phone Number</label>
               <input type="number" name="number" class="form-control" value="<?php if (isset($number)) {
                  echo $number;
               } ?>">
               <?php
               if (isset($err['number'])) {
                  echo $err['number'];
               }
               ?>
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
         </form>
      </div>
   </div>
</body>

</html>