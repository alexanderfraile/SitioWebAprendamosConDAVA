<!DOCTYPE html>
<html>
<head>
	<title>Javascript Image Slider</title>
	<link rel="stylesheet" type="text/css" href="assets/css/Numeros.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<div class="container">
		<div class="background">
			<img src="assets/imagenes/Numeros/6.jpeg" class="bg">
			<img src="assets/imagenes/Numeros/7.jpeg" class="bg">
			<img src="assets/imagenes/Numeros/8.jpeg" class="bg">
			<img src="assets/imagenes/Numeros/9.jpeg" class="bg">
			<img src="assets/imagenes/Numeros/10.jpeg" class="bg">
			
		<div class="slider-container">
			<div>
				<div>
					<div class="slider">
						<div class="img" id="first">
							<img src="assets/imagenes/Numeros/10.jpg">
						</div>
						<div class="img">
							<img src="assets/imagenes/Numeros/6.jpeg" >
						</div>
						<div class="img">
							<img src="assets/imagenes/Numeros/7.jpeg" >
						</div>
						<div class="img">
							<img src="assets/imagenes/Numeros/8.jpeg" >
						</div>
						<div class="img">
							<img src="assets/imagenes/Numeros/9.jpeg" >
						</div>
						<div class="img">
							<img src="assets/imagenes/Numeros/10.jpeg" >
						</div>
						<div class="img" id="last">
							<img src="assets/imagenes/Numeros/6.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<button class="btn" id="prev"><i class="fas fa-chevron-left"></i></button>
			<button class="btn" id="next"><i class="fas fa-chevron-right"></i></button>
			<ul>
				<li class="option" op-index="0"></li>
				<li class="option" op-index="1"></li>
				<li class="option" op-index="2"></li>
				<li class="option" op-index="3"></li>
				<li class="option" op-index="4"></li>
				
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/Numeros.js"></script>
</body>
</html>