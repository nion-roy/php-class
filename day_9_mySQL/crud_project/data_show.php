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
                        <th>Phone Number</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $con = new mysqli('localhost', 'root', '', 'students');
                     $sql = "SELECT * FROM details";
                     $data = $con->query($sql);

                     while ($data_user = $data->fetch_object()) :
                     ?>
                        <tr>
                           <td>1</td>
                           <td><?php echo $data_user->name ?> </td>
                           <td>
                              <?php echo $data_user->roll ?>
                           </td>
                           <td><?php echo $data_user->number ?></td>
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