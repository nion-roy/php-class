<?php

$pass = (123);
echo  md5($pass);

?>

<br>

<?php

$password_hash = (123);

echo password_hash($password_hash, PASSWORD_DEFAULT);

?>