<!DOCTYPE HTML>
<html>
<head>
<title>A Dias d'Vinho - Contacto</title>
 <link rel="icon" href="images/icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="A Dias de Vinho Promoção consultoria e comércio de vinho exportação internacional de vinhos portugueses e espanhois Portugal França Suiça Espanha Brasil Guiné-Bissau Moçambique Estados Unidos da América Contacto" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- //bootstrap-css -->
<!-- css -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //css -->
<script src="js/jquery-1.11.1.min.js"> </script>	
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>		
</head>
<body>
	<!-- banner -->
	<div class="banner banner-bg">
		
		<?php
			require_once("header.html");
		?>

	</div>
	<!-- banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-info">
				<h2>Contacto</h2>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d136054.96323341154!2d-8.728168092384351!3d41.10355366848673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd246527744036f1%3A0x677d50cf52addd75!2sVila+Nova+de+Gaia!5e0!3m2!1spt-PT!2spt!4v1500477161649" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="address">
				<div class="col-md-4 address-grids">
					<h4>Endereço :</h4>
					<ul>
						<li><p>São Felix da Marinha<br>
								Vila Nova de Gaia</p>
						</li>
					</ul>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Telefone :</h4>
					<p>967 299 834</p>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:adi-ass@hotmail.com">adi-ass@hotmail.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--<div class="contact-infom">
				<h4>Miscellaneous Information:</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s with the release of Letraset
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>-->	
			<!--<div class="contact-form">
				<h4>Contacte-nos</h4>
				<form name="formContacto" id="formContacto" action="emailContacto.php" method="post">
					<input type="text" id="contactNome" name="nome" placeholder="Nome" required>
					<input type="text" id="contactEmail" name="email" placeholder="Email" required>
					<input type="text" id="contactAssunto" name="assunto" placeholder="Assunto" required>
					<textarea id="contactMensagem" name="mensagem" cols="77" rows="6" placeholder="Mensagem" required></textarea>
					<button type="submit" class="btn1 btn-1 btn-1b">Enviar</button>
				</form>
			</div>-->
		</div>
	</div>
	<!-- //contact -->
	
	<?php

		require_once("footer.html");

	?>

	<script type="text/javascript">
		$(document).ready(function() {

			//Adicionar class active no menu
			$("#ulMenu li a").removeClass("active");
			$("#aContacto").addClass("active");
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>