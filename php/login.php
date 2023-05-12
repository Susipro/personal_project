<?php

    $conex=mysqli_connect("localhost", "root", "", "smdb");

    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $query=mysqli_query($conex,"SELECT * FROM xlogin WHERE usuario='".$usuario."' and contrasena='".$contrasena."'");

    $numero=mysqli_num_rows($query);

    if($numero==1){
        echo "ENTRADA CORRECTA DE...".$usuario;
        header("Refresh:0; url=../Html/privado.html");
    }
    else if($numero==0){
    echo "NO ESTÁS INSCRITO";
    }

?>
