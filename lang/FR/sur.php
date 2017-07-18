<!DOCTYPE HTML>
<html>
<head>
<title>A Dias d'Vinho - Sobre</title>
 <link rel="icon" href="images/icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="A Dias de Vinho Promoção consultoria e comércio de vinho exportação internacional de vinhos portugueses e espanhois Portugal França Suiça Espanha Brasil Guiné-Bissau Moçambique Estados Unidos da América" />
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
	<!-- about -->
	<div class="about">
		<div class="about-info">
			<!-- container -->
			<div class="container">
				<h2>Sobre Nós</h2>
			</div>
			<!-- //container -->
		</div>
		<!-- about-bottom -->
		<div class="about-bottom">
			<!-- container -->
			<div class="container">
				<div class="about-grids">
					<div class="col-md-6 about-grid">
						<h3>A nossa história</h3>
						<h5>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</h5>
						<p>Morbi condimentum imperdiet placerat. Nullam in nisl eget turpis convallis venenatis. Cras cursus elementum justo nec bibendum. Donec quis nisi cursus, vestibulum elit eget, sagittis ligula. Suspendisse urna metus, posuere interdum tempor at, convallis a enim. Fusce vel egestas eros, sit amet maximus dolor urna metus, posuere interdum tempor at, convallis a enim. Fusce vel urna metus, posuere interdum tempor at, convallis a enim. Fusce vel egestas eros, sit amet maximus dolor egestas eros, sit amet maximus dolor. Suspendisse vitae nibh at erat sollicitudin bibendum. Aenean pretium turpis eget vestibulum vulputate.</p>
					</div>
					<div class="col-md-6 about-grid">
						<img src="images/11.jpg" alt="" />
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- about-bottom -->
		<!-- choose -->
		<div class="choose">
			<!-- container -->
			<div class="container">
				<h3>Porque escolher os nossos vinhos</h3>
				<div class="choose-grids">
					<div class="col-md-4 choose-grid">
						<h5>Donec cursus felis a enim egestas, vitae porttitor elit condimentum.</h5>
						<p>Etiam ex lorem, cursus vitae placerat a, suscipit dapibus tortor. Sed nec augue enim. Cras rhoncus ultricies eros, interdum aliquam eros iaculis id.</p>
						<!--<a href="single.html">MORE</a>-->
					</div>
					<div class="col-md-4 choose-grid">
						<h5>Donec cursus felis a enim egestas, vitae porttitor elit condimentum.</h5>
						<p>Etiam ex lorem, cursus vitae placerat a, suscipit dapibus tortor. Sed nec augue enim. Cras rhoncus ultricies eros, interdum aliquam eros iaculis id.</p>
						<!--<a href="single.html">MORE</a>-->
					</div>
					<div class="col-md-4 choose-grid">
						<h5>Donec cursus felis a enim egestas, vitae porttitor elit condimentum.</h5>
						<p>Etiam ex lorem, cursus vitae placerat a, suscipit dapibus tortor. Sed nec augue enim. Cras rhoncus ultricies eros, interdum aliquam eros iaculis id.</p>
						<!--<a href="single.html">MORE</a>-->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //choose -->
		<!-- about-team -->
		<div class="about-team">
			<!-- container-wrap -->
			<div class="container">
				<h3>A nossa equipa</h3>
				<div class="team-grids">
					<div class="col-md-3 team-grid">
						<img src="images/t1.jpg" alt="">
						<h6>convallis id mauris</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					<div class="col-md-3 team-grid">
						<img src="images/t2.jpg" alt="">
						<h6>massa convallis</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					<div class="col-md-3 team-grid">
						<img src="images/t3.jpg" alt="">
						<h6>leonec purus</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					<div class="col-md-3 team-grid">
						<img src="images/t4.jpg" alt="">
						<h6>venenatis portt</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //about-team -->
	</div>
	<!-- //about -->
	
	<?php
		require_once("footer.html");
	?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/

			//Adicionar class active no menu
			$("#ulMenu li a").removeClass("active");
			$("#aSobre").addClass("active");
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>