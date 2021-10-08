<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efecto hover avanzado con puro CSS</title>
    <link rel="stylesheet" href="assets/css/Niveles.css">
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

    <div class="container-all"> 
        <div class="container-box">
        <a class="boton">
                <div class="box box1">
                <div class="banner_img">     
            <img src="assets/imagenes/VOCALA.jpg" alt="" width="100px" height="100px">      
            </div> 

        <a href="LetraA.php" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        LETRA A
    </a>
 
                </div>
            </a>
            
           


       <div class="container-box">
       <a class="boton1">
                <div class="box box2">
                    <div class="banner_img">        
            <img src="assets/imagenes/VOCALA.jpg" alt="" width="100px" height="100px">       
            </div>
            <a href="#" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        LETRA E
    </a>

                </div>
            </a>
                    
                    







            <a href="#">
                <div class="box box3">

                <div class="banner_img">
                    <h4>Película</h4>        
            <img src="assets/imagenes/VOCALA.jpg" alt="" width="100px" height="100px">      
            </div>
                    <div class="background-hover"></div>

                </div>
            </a>

            <a href="#">
                <div class="box box4">

                <div class="banner_img">
                    <h4>Película</h4>        
            <img src="assets/imagenes/VOCALA.jpg" alt="" width="100px" height="100px">      
            </div>
                    <div class="background-hover"></div>

                </div>
            </a>

            <a href="#">
                <div class="box box5">

                <div class="banner_img">
                    <h4>Película</h4>        
            <img src="assets/imagenes/VOCALA.jpg" alt="" width="100px" height="100px">      
            </div>
                    <div class="background-hover"></div>

                </div>
            </a>

            
        </div>

    </div>

<audio src="assets/Audio/VOCAL A1.0.mp3" preload></audio>
<audio src="assets/Audio/VOCAL E1.0.mp3" preload></audio>



</body>

</html>