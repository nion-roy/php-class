<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

   <!-- GET / POST / REQUEST(default) data received -->

   <div class="container">
      <form action="content.php" method="POST" enctype="multipart/form-data">
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

</body>

</html>