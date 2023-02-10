<?php

include_once 'autoload.php';

?>

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
   if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $roll = $_POST['roll'];
      $number = $_POST['number'];

      if (empty($name)) {
         $err['name'] = '<span class=\'error\'> * Required </span>';
      }
      if (empty($roll)) {
         $err['roll'] = '<span class=\'error\'> * Required </span>';
      }
      if (empty($number)) {
         $err['number'] = '<span class=\'error\'> * Required </span>';
      } else {
         $sql = "INSERT INTO details(name, roll, number) VALUES ('$name','$roll','$number')";
         $conn->query($sql);

      }



      if (empty($name) || empty($roll) || empty($number)) {
         $msg = '<span class=\'alert-danger py-2 mb-5 px-3 w-100 d-block\'>All filed is Required !</span>';
      } else {
         $msg = '<span class=\'alert-success py-2 mb-5 px-3 w-100 d-block\'> Successful !</span>';
      }
   }

   ?>

   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <a href="data.php" class="btn btn-success mb-3 mt-5">all information</a>
      <div class="p-5 border rounded shadow">
         <form action="" method="POST" enctype="multipart/form-data">
            <?php
            if (isset($msg)) {
               echo $msg;
            }
            ?>
            <div class="mb-3">
               <label class="form-label">Full Name</label>
               <input type="text" name="name" class="form-control" value="<?php if (isset($_POST['submit'])) {
                  echo $name;
               } ?>">
               <?php
               if (isset($err['name'])) {
                  echo $err['name'];
               }
               ?>
            </div>
            <div class="mb-3">
               <label class="form-label">Roll</label>
               <input type="number" name="roll" class="form-control" value="<?php if (isset($_POST['submit'])) {
                  echo $roll;
               } ?>">
               <?php
               if (isset($err['roll'])) {
                  echo $err['roll'];
               }
               ?>
            </div>
            <div class="mb-3">
               <label class="form-label">Number</label>
               <input type="number" name="number" class="form-control" value="<?php if (isset($_POST['submit'])) {
                  echo $number;
               } ?>">
               <?php
               if (isset($err['number'])) {
                  echo $err['number'];
               }
               ?>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
         </form>
      </div>
   </div>

</body>

</html>