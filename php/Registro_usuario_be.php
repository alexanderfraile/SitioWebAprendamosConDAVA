<?php

include 'Conexion_be.php';

$Nombre_Completo = $_POST['Nombre_Completo'];
$Nombre_Usuario = $_POST['Nombre_Usuario'];
$Password = $_POST['Password'];

$query = "INSERT INTO usuarios(NombreCompleto, NombreUsuario, Password) 
VALUES('$Nombre_Completo', '$Nombre_Usuario', '$Password')";

$Verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE NombreUsuario='$Nombre_Usuario'");


    if (mysqli_num_rows($Verificar) > 0 ) {

    
    echo'
            <script>
             alert("USUARIO EXISTENTE");
             window.location = "../Index.php";
            </script>
    ';

    exit();
}


$ejecutar = mysqli_query($conexion, $query);


 if($ejecutar){
     echo '
         <script>
             alert("Usuario almacenado exitosamente");
             window.location = "../Index.php";
         </script>
     ';
 }else{
     echo '
     <script>
         alert("Intentalo de nuevo usuario no almacenado");
         window.location = "../Index.php";
     </script>
 ';
 }

 mysqli_close($conexion);
 


?>