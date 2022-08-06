
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="escuela";

$db_connection = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()){
    echo "Error" . mysqli_connect_errno();
}

?> 

