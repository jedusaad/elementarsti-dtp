<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elementar STI | Contate-nos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<header id="header">
						<h1>
							<a href="/"><span class="menuFontHeavy elemenYellow">E</span><span class="menuFontLight">lementar</span></a></h1>
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

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Contate-nos</h2>
							<p>Para mais informações, dúvidas, ou orçamentos entre em contato consoco!</p>
						</header>
						<section class="wrapper style5" style="text-align: center;"> 
								<div style="width: 70%; text-align: justify; display: inline-block;">
								<form method="post" action="./function/mailSender.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="demo-name" value="" placeholder="Nome" required />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="demo-email" value="" placeholder="Email" required />
										</div>
										<div class="12u$">
											<div class="select-wrapper">
												<select name="category" id="demo-category">
													<option value="0">- Tipo -</option>
													<option value="1">Dúvida</option>
													<option value="2">Sugestão</option>
													<option value="3">Interesse em produto</option>
													<option value="4">Outro</option>
												</select>
											</div>
										</div>
										<div class="6u 12u$(small)">
											<input type="checkbox" id="demo-copy" name="copy" checked>
											<label for="demo-copy">Me envie uma cópia via email</label>
										</div>
										<div class="6u$ 12u$(small)">
											<input type="checkbox" id="demo-human" name="human" required >
											<label for="demo-human">Não sou um robô</label>
										</div>
										<div class="12u$">
											<textarea name="demo-message" id="message" placeholder="Digite sua mensagem" rows="6"></textarea>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Enviar" class="special" /></li>
												<li><input type="reset" value="Resetar formulário" /></li>
											</ul>
										</div>
									</div>
								</form>
								</div>
							</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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