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
   if (isset($_POST['submit']))

      echo $_FILES = $_POST['photo'];

   ?>



   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <div class="p-5">
         <form action="" method="POST">
            <div class="mb-3 mt-5">
               <label class="form-label">Choose the Photo</label>
               <input type="file" name="photo" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update Now">
         </form>
      </div>
   </div>
</body>

</html>