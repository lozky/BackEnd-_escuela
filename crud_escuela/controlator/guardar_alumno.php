<?php
require 'conexion.php';
$matricula_alumno=$_POST['matricula_alumno'];
$nombre_alumno=$_POST['nombre_alumno'];
$email_alumno=$_POST['email_alumno'];
$direccion_alumno = $_POST['direccion_alumno'];
$telefono_alumno= $_POST['telefono_alumno'];
$procendencia_alumno= $_POST['procendencia_alumno'];
   

    // Ahora ingreso los valores previamente preparados
   $inserto_docente = mysqli_query($db_connection, "INSERT INTO alumno (matricula, nombre_alumno, email_alumno , direccion, telefono, prepa_procedencia) VALUES ('$matricula_alumno', '$nombre_alumno', '$email_alumno', '$direccion_alumno', '$telefono_alumno', '$procendencia_alumno')");
   // Verifico errores y preparo mensajes
if($inserto_docente === TRUE){
    echo'<script type="text/javascript">
    alert("Alumno guardado con exito");
    window.location.href="../views/form_alumno.php";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("No se ha podido guardar el alumno");
    window.location.href="../views/form_alumno.php";
    </script>';
}

?>