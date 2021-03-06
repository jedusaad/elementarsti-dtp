<?php
	if (isset($_GET["person"])) {
		header('Location: '.$uri.'/colaborators.php');
	}
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elementar STI | Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
		<link rel="icon" href="images/icon.png" type="image/x-icon">
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="/"><span class="menuFontHeavy elemenYellow">E</span><span class="menuFontLight">lementar</span></a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="./index.php">Página inicial</a></li>
											<li><a href="./portfolio.html">Produtos e Serviços</a></li>
											<li><a href="./contactus.php">Contate-nos</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><span class="menuFontHeavy elemenYellow">E</span><span class="menuFontLight">lementar</span></h2>
								
							<p>Soluções em TI</p>
						</div>
						<a href="#one" class="more scrolly">Saiba Mais</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Tecnologia da Informação</h2>
								<p>Soluções em mídias sociais, desenvolvimento de páginas web e aplicações <br/> 
									desktop e API's distribuidas</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-users major stylepersonalizado"><span class="label">Redes Sociais</span></span></li>
								<li><span class="icon fa-television major stylepersonalizado"><span class="label">Websites</span></span></li>
								<li><span class="icon fa-terminal major stylepersonalizado"><span class="label">API's</span></span></li>
							</ul>
						</div> 
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight bg-color-2">
							<div class="image"><img src="images/maintain.png" alt="" /></div><div class="content">
								<h2 class="title-color-dark">Montagem e manuntenção de Micros e Redes</h2>
								<p>Montamos e damos manutenção no seu computador. Troca de peças, limpeza e formatação </p>
							</div>
						</section>
						<section class="spotlight bg-color-1">
							<div class="image"><img src="images/socialmedia.png" alt="" /></div><div class="content">
								<h2 class="title-color-dark">Mídias Sociais e Desing</h2>
								<p>Manutenção e gerência de mídias sociais, desenhos de logos e material desing.</p>
							</div>
						</section>
						<section class="spotlight bg-color-2">
							<div class="image"><img src="images/responsive.png" alt="" /></div><div class="content">
								<h2 class="title-color-dark">Desenvolvimento de páginas web</h2>
								<p>Páginas web personalizadas e 100% responsivas. </p>
							</div>
						</section>
						<section class="spotlight bg-color-1"> 
							<div class="image"><img src="images/api.png" alt="" /></div><div class="content">
								<h2 class="title-color-dark">Desenvolvimento de API's</h2>
								<p>Desenvolvimento de API's para aplicações internas e externas, com integração com banco de dados e de alta disponibilidade</p>
							</div>
						</section>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Produtos e Serviços</h2>
								<!-- <p>Para saber mais, </p> -->
							</header>
							<ul class="actions vertical">
								<li><a href="./portfolio.html" class="button fit special">Veja mais</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">

							<li><a href="https://www.facebook.com/elementarsti/" class="icon fa-facebook" target="blank"><span class="label">Facebook</span></a></li>
							<li><a href="http://elementarsti.com.br?pages=api" class="icon fa-dribbble" target="blank"><span class="label">Dribbble</span></a></li>
							<li><a href="mailto:contato@elementarsti.com.br?subject=Contato" class="icon fa-envelope-o" target="blank"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Elementar STI - Todos direitos reservados</li><li>Template: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>