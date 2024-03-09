
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Bienvenue sur negoce busnness</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Technology and Corporate Bootstrap Theme">


	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('LOOGO.png')}}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/glightbox/css/glightbox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

</head>

<body>

<!-- Header START -->
<header class="header-sticky header-absolute">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand me-0" href="/">
				<img class="light-mode-item navbar-brand-item" src="{{asset('LOOGO.png')}}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{asset('LOOGO.png')}}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

                    <li class="nav-item">
						<a class="nav-link" href="{{route('apropos')}}" >A PROPOS</a>

					</li>
					<!-- Nav item -->
					<li class="nav-item ">
						<a class="nav-link" href="#nosproduits">NOS PRODUITS</a>

					</li>

					<!-- Nav item -->
					<li class="nav-item">
						<a class="nav-link" href="#nosservices" >NOS SERVICES</a>

					</li>

					<!-- Nav item -->
					<li class="nav-item">
						<a class="nav-link" href="#catalogue">CATALOGUE</a>

					</li>

                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">AGROPASTORAL</a>
						<ul class="dropdown-menu">
							<!-- Dropdown submenu -->
							<li class="dropdown dropend">
								<a class="nav-link dropdown" href="">Production de culture agricole</a>

							</li>

                            <li class="dropdown dropend">
								<a class="nav-link dropdown" href="">Production d'engrais biologique</a>

							</li>

                            <li class="dropdown dropend">
								<a class="nav-link dropdown" href="">Création de ferme</a>

							</li>










						</ul>
					</li>

					<!-- Nav item -->


					<!-- Nav item -->
					<li class="nav-item"> <a class="nav-link" href="/contact">CONTACT</a> </li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Buttons -->
			<ul class="nav align-items-center dropdown-hover ms-sm-2">

				<!-- Sign up button -->
				<li class="nav-item me-2">
					<a href="{{route('login')}}" class="btn btn-sm btn-light mb-0"><i class="bi bi-person-circle me-1"></i>Connexion</a>
				</li>



				<!-- Responsive navbar toggler -->
				<li class="nav-item">
					<button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
				</li>
			</ul>

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

@yield('content')


<footer class="bg-dark position-relative overflow-hidden pt-6" data-bs-theme="dark">

	<!-- SVG decoration -->


	<!-- SVG decoration -->
	<div class="position-absolute top-0 end-0 mt-n3 me-n4">
		<img src="assets/images/elements/decoration-pattern-2.svg" style="opacity:0.05;" alt="">
	</div>

	<div class="container position-relative mt-5">
		<div class="row g-4 justify-content-between">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src="{{asset('LOOGO.png')}}" alt="logo">
					<img class="dark-mode-item h-40px" src="{{asset('LOOGO.png')}}" alt="logo">
				</a>

				<p class="mt-4 mb-2">NBSC est une structure dans l’exploitation, l’intermédiation des matières premières et une agence digitale et de communication intégrée qui par ses ambitions et visions se projettent à être leader et référent dans ses secteurs de prédilection et de son champ de mission par un engagement indescriptible à l’égard de ses partenaires, fournisseurs et bailleurs qui font de NBSC est une réalité à être un maillon important dans la chaine d’exploitation et fort potentiels économiques...</p>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-8 col-xxl-7">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h6 class="mb-2 mb-md-4">Ressources</h6>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">A propos de nous </a></li>
							<li class="nav-item"><a class="nav-link" href="">Contact </a></li>


						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h6 class="mb-2 mb-md-4">Contact</h6>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">+2250767647792</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Supports <i class="bi bi-box-arrow-up-right small ms-1"></i></a></li>
							<li class="nav-item"><a class="nav-link" href="faq.html">Faqs</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Politique de confidentialité</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Terme &amp; condition</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-md-4">

						<h6 class="mb-2 mb-md-4">Suivez-nous</h6>

						<ul class="list-inline mb-0 mt-3">
							<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="https://web.facebook.com/NegoceMarketingFinances?mibextid=ZbWKwL&_rdc=1&_rdr"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
							<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
							<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
							<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-linkedin-in lh-base"></i></a> </li>
							<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-youtube lh-base"></i></a> </li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->
		</div>

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
			<!-- copyright text -->
			<div class="text-body"> Copyrights ©2024 NBSC .  </div>


		</div>
	</div>
</footer>
<!-- =======================
Footer END -->


<!-- Back to top -->
<div class="back-top">

</div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!--Vendors-->
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/jarallax/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/jarallax-video.min.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>

<!-- Theme Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>

