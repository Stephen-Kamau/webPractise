<?php
session_start();
session_destroy();
echo "You successfully logout <br>";

echo "Click here to <a href ='login.php'> login again</a>";


?>