<?php 
   $con = new mysqli('localhost', 'root', '0', 'database name');

   $sql = "INSERT INTO details(name, roll, phone number) VALUES ('Nion Roy', '108509', '01761115624')";

   $con -> query($sql);