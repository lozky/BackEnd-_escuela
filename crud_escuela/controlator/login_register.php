<?php
require 'conexion.php';

$fullname = $_POST ['fullname'];
$email = $_POST ['email'];
$psw = password_hash($_POST ['psw'], PASSWORD_DEFAULT);


$verifico_email = mysqli_query($db_connection, "SELECT email from usuarios where email = '$email'");

if(mysqli_num_rows($verifico_email) > 0){ 
    echo'<script type="text/javascript">
    alert("Ya existe una cuenta con este email. Ingresa otro porfavor o registrate.");
    window.location.href="../views/registrate.html";
    </script>';
}else{

    $insert_usuario = mysqli_query($db_connection, "INSERT into usuarios (fullname, email, password) values ('$fullname', '$email', '$psw')");


if($insert_usuario === TRUE) {
    echo '<script type="text/javascript">
    alert ("Usuario guardado con exito");
    window.location.href="../views/login.php";
    </script>';
}else{
    echo '<script type="text/javascript">
    alert ("No se a podido guardar el usuario");
    window.location.href="../views/registrate.html";
    </script>';
}
}
?>