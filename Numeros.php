<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="assets/css/Numeros.css">
  <link rel="stylesheet" href="assets/css/BotonNivles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" type="text/javascript"></script>
 <script type="text/javascript">
  $(document).ready(function(){
   $('.boton').mouseover(function(){
   $('audio')[0].play();
   });
   $('.boton1').mouseover(function(){
   $('audio')[1].play();
   });
   });
 </script>
</head>
<body>

<title>NUMEROS</title>
<!-- partial:index.partial.html -->
<div class="container">
  
  <ul class="slider">
    <li id="slide1">
      <img src="assets/imagenes/Numeros/1.jpeg"/>
    </li>
    <li id="slide2">
	<img src="assets/imagenes/Numeros/2.jpeg"/>
    </li>
    <li id="slide3">
	<img src="assets/imagenes/Numeros/3.jpeg"/>
    </li>

    <li id="slide4">
      <img src="assets/imagenes/Numeros/4.jpeg"/>
    </li>
    <li id="slide5">
      <img src="assets/imagenes/Numeros/5.jpeg"/>
    </li>
    <li id="slide6">
      <img src="assets/imagenes/Numeros/6.jpeg"/>
    </li>
    <li id="slide8">
      <img src="assets/imagenes/Numeros/8.jpeg"/>
    </li>
    <li id="slide9">
      <img src="assets/imagenes/Numeros/9.jpeg"/>
    </li>
    <li id="slide10">
      <img src="assets/imagenes/Numeros/10.jpeg"/>
    </li>
  </ul>
  
  <ul class="menu">
    <li>
   
      <a href="#slide1" class="boton">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
     <li>
      <a href="#slide3">3</a>
    </li>
    <li>
    <a href="#slide4" >4</a>
    </li>
    <li>
    <a href="#slide5" >5</a>
    </li>
    <li>
    <a href="#slide6" >6</a>
    </li>
    <li>
    <a href="#slide8" >8</a>
    </li>
    <li>
    <a href="#slide9" >9</a>
    </li>
    <li>
    <a href="#slide10" >10</a>
    </li>
   
  </ul>
  
</div>
<a href="Niveles.php" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        NIVELES
    </a>
<!-- partial -->
  <audio src="assets/Audio/VOCAL A1.0.mp3" preload></audio>
<audio src="assets/Audio/VOCAL E1.0.mp3" preload></audio>
</body>
</html>
