<?php 
$servername = "localhost";
$username = "root";
$password = "www.570915J/981202L[m]";

//connection
$con = new mysql_connect($servername, $username, $password);

//checking
if ($con -> connect_error){
    echo "Connection failed!!: ".
    $con -> connect_error;
}
echo "Connected successfully !! :)";

?>
