<?php
    $conex=mysqli_connect("localhost", "root", "", "smdb");

    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $consulta="INSERT INTO xlogin (nombre, email, usuario, contrasena) VALUES ('$nombre','$email','$usuario', '$contrasena')";
    $resultado=mysqli_query($conex, $consulta);

    if($resultado){
        echo "EL ".$usuario." HA SIDO INCLUIDO CON EXITO";
    }
?>
