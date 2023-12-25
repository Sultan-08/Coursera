<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_course";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection Ok";
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}

?>