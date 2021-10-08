<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loading Animation</title>
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/burbujas.css">
  </head>
  <body>
    <div class="loading">
    <img src="assets/imagenes/PANTALLA1.1.png" width="100" height="100">
      <img src="assets/imagenes/B1.png" width="100" height="100">
      <img src="assets/imagenes/B4.png" width="100" height="100">
      <img src="assets/imagenes/B2.png" width="100" height="100">

      <div class="text">APRENDAMOS CON DAVA</div>
    
      


       <label class="percent">100%</label>
      <div class="progress-bar">
        <div class="progress"></div>
      </div>
    </div>

    <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>

    <script src="assets/js/pre.js"></script>

    <script> 

function redireccionar(){
window.location.replace('RL.php'); 
} 
setTimeout ("redireccionar()", 7000);
//-->
</script>
  </body>
</html>
