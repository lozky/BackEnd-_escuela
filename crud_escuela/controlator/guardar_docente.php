<?php
require 'conexion.php';
$numero_docente=$_POST['numero_empleado'];
$nombre_docente=$_POST['nombre_docente'];
$email_docente=$_POST['email_docente'];
$perfil_docente = $_POST['perfil_docente'];
$direccion_docente = $_POST['direccion_docente'];
$telefono_docente = $_POST['telefono_docente'];
   

    // Ahora ingreso los valores previamente preparados
   $inserto_docente = mysqli_query($db_connection, "INSERT INTO docente (num_empledo, nombre, email, perfil, direccion, telefono) VALUES ('$numero_docente', '$nombre_docente', '$email_docente', '$perfil_docente', '$direccion_docente', '$telefono_docente')");
   // Verifico errores y preparo mensajes
if($inserto_docente === TRUE){
    echo'<script type="text/javascript">
    alert("Docente guardado con exito");
    window.location.href="../views/forrm_docente.php";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("No se ha podido guardar el docente");
    window.location.href="../views/forrm_docente.php";
    </script>';
}

?>