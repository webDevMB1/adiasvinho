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
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3771907.975236311!2d-2.09480472072984!3d39.07355564363949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436857347604" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="address">
				<div class="col-md-4 address-grids">
					<h4>Endereço :</h4>
					<ul>
						<li><p>Eiusmod Tempor inc<br>
								St Dolore Place,<br>
								Kingsport 56777</p>
						</li>
					</ul>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Telefone :</h4>
					<p>+2 123 456 789</p>
					<p>+2 987 654 321</p>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:example@email.com">mail@example.com</a></p>
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