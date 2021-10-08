<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="javascript">


   function activar(){
       
    document.getElementById('more').disabled = false;
    }
</script>
</head>
<body>

<a href="Prueba.php">
<input type="button" value="BOTON" onClick="activar()" />  

<input type="button" value="+" id="more" disabled="true" > 
</body>
</html>



