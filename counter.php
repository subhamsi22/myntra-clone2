<?php
 $server = "localhost";
 $username = "root";
 $pass = "";
 $db =  "subham";
 $connection = mysqli_connect($server,$username,$pass,$db);
 if(!$connection){
    die("the connection is not done ".mysqli_connect_error());

 }

mysqli_query($connection,"UPDATE counter SET views = views +1 WHERE id = 1");
mysqli_close($connection);

?>