<?php include 'header.php' ?>
<body>

	<header>
		<div class="contact-bar">
			<div class="container">
				<ul class="menu personal">
					<li><i class="fa fa-phone"></i><a href="tel:+421900111222">+421 900 111 222</a></li>
					<li><i class="fa fa-envelope"></i><a href="mailto:email@mailinator.com">email@mailinator.com</a></li>
				</ul>
				<ul class="menu social">
					<li><a href="#" class="social-icon"><i class="fa fa-github"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="nav-bar">
			<div class="container">
				<h1 class="logo">
					<a href="#">
						<strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
					</a>
				</h1>

				<nav class="group">
					<ul class="menu navigation">
						<li><a href="index.html"><i class="fa fa-shield fa-2x"></i> Domov</a></li>
						<li class="selected"><a href="portfolio.html"><i class="fa fa-leaf fa-2x"></i> Portfolio</a></li>
						<li><a href="about.html"><i class="fa fa-bolt fa-2x"></i> O nás</a></li>
						<li><a href="contact.html"><i class="fa fa-trophy fa-2x"></i> Kontakt</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<main>
		<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Portfólio našich prác</h1>
				</div>
			</header>
			<div class="post-content">
				<div class="container">

					<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

					<ul class="menu controls">
						<li data-from="left" class="selected"><a href="#vsetko">Všetko</a></li>
						<li data-from="right"><a href="web.html">Web</a></li>
						<li data-from="left"><a href="branding.html">Branding</a></li>
						<li data-from="right"><a href="fotografia.html">Fotografia</a></li>
						<li data-from="left"><a href="video.html">Video</a></li>
					</ul>

				</div>

				<section class="gallery">
					<div class="gallery-set container" id="vsetko">
						<a href="img/samurai/image-1.jpg">
							<img src="img/samurai/thumb-1.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-2.jpg">
							<img src="img/samurai/thumb-2.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-3.jpg">
							<img src="img/samurai/thumb-3.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-4.jpg">
							<img src="img/samurai/thumb-4.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-5.jpg">
							<img src="img/samurai/thumb-5.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-6.jpg">
							<img src="img/samurai/thumb-6.jpg" height="192" width="383" alt="jackie boy">
						</a>
					</div>
				</section>
			</div>
		</article>
	</main>

	<aside class="pre-footer">
		<div class="container">
			<p>
				<strong>Zaujali sme Vás pre nový projekt?</strong>
				Jednoducho nám zavolajte alebo napíšte.
			</p>

			<ul class="menu personal">
				<li><i class="fa fa-phone"></i><a href="tel:+421900111222">+421 900 111 222</a></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:email@mailinator.com">email@mailinator.com</a></li>
			</ul>
		</div>
	</aside>

	<?php include 'footer.php' ?>

	<!-- scripts -->
	<script src="js/lightbox.js"></script>

</body>