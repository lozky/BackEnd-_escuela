<?php
require 'conexion.php';
$nombre_materia=$_POST['nombre_materia'];
$descripcion_materia=$_POST['descripcion_materia'];
$horas_materia= $_POST['horas_materia'];
   

    // Ahora ingreso los valores previamente preparados
   $inserto_docente = mysqli_query($db_connection, "INSERT INTO materia (nombre_materia, descripcion_materia, horas_materia) VALUES ('$nombre_materia', '$descripcion_materia', '$horas_materia')");
   // Verifico errores y preparo mensajes
if($inserto_docente === TRUE){
    echo'<script type="text/javascript">
    alert("Materia guardada con exito");
    window.location.href="../views/form_materia.php";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("No se ha podido guardar la materia");
    window.location.href="../views/form_materia.php";
    </script>';
}

?>