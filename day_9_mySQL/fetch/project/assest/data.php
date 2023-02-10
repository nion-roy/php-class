<?php

include_once 'autoload.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Development Area</title>

   <!-- ALL CSS FILES  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


   <div class="container">
      <a href="create.php" class="btn btn-success mb-3 mt-5">add new information</a>
      <div class="wrap-table shadow">
         <div class="card">
            <div class="card-body">
               <h2>All Data</h2>
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Number</th>
                        <th>Photo</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>

                     <?php

                     $sql = "SELECT * FROM details";
                     $data = $conn->query($sql);
                     $i = 1;

                     while ($data_users = $data->fetch_object()):


                        ?>
                     <tr>
                        <td><?php echo $i;
                           $i++; ?></td>
                        <td>
                           <?php echo $data_users->name ?>
                        </td>
                        <td> <?php echo $data_users->roll ?> </td>
                        <td>
                           <?php echo $data_users->number ?>
                        </td>
                        <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
                        <td>
                           <a class="btn btn-sm btn-info" href="#">View</a>
                           <a class="btn btn-sm btn-warning" href="#">Edit</a>
                           <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                     </tr>
                     <?php endwhile; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>

</html>