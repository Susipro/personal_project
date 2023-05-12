<?php
    $conex=mysqli_connect("localhost", "root", "", "smdb");

    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    $consulta="INSERT INTO xlogin (usuario, contrasena) VALUES ('$usuario', '$contrasena')";
    $resultado=mysqli_query($conex, $consulta);

    if($resultado){
        echo "incluido el usuario ".$usuario." con exito. ¡Bien por ti!";
    }
?>
