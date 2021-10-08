<?php

include 'Conexion_be.php';


$NombreUsuario = $_POST['Nombre_Usuario'];
$Password = $_POST['Password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE NombreUsuario='$NombreUsuario'
        and Password = '$Password'");


if(mysqli_num_rows($validar_login) >0 ){
 
    header("location: ../Niveles.php");
    exit;
}else{
    echo'
        <script> 
        
        alert("Este usuario o existe, por favor verifique los datos introducidos");
        window.location = "../Index.php";
        </script>
    ';

    exit;

}

?>

