
@extends('layouts.app')

@section('content')
<main>
<section class="pt-5 pt-xl-7">
    <div class="container pt-2 pt-sm-5 mt-6">
		<div class="row g-4 g-xxl-5">
			<div class="col-xl-6">
				<h1 class="mb-0 lh-base">NBSC à Votre Service d'exportation réussie
				</h1>
				<p class="mb-0 mt-4 mt-xl-5">NBSC est une structure dans l’exploitation, l’intermédiation des matières premières et une agence digitale et de communication intégrée qui par ses ambitions et visions se projettent à être leader et référent    dans ses secteurs de prédilection et de son champ de mission par un engagement indescriptible à l’égard de ses partenaires, fournisseurs et bailleurs qui font de NBSC est une réalité à être un maillon important dans la chaine d’exploitation et fort potentiels économiques..</p>
				<!-- Buttons -->
				<div class="d-flex gap-1 gap-sm-3 flex-wrap mt-4 mt-xl-5">
					<a class="btn btn-dark" href="https://wa.me/+2250767647792?text=I'Merci%20D'avoir contactez le service %20Commercial%20de%NBSC">Commencer</a>
					<a class="btn btn-outline-dark" href="/contact">Nous Contacter</a>
				</div>
			</div>
			<div class="col-xl-6 text-center">
				<img src="assets/images/elements/hero-finance.svg" alt="hero-img">
			</div>
		</div>
	</div>
</section>

<section class="pt-0">
	<div class="container text-center">
		<!-- Client-Slider START -->
		<p class="heading-color fw-semibold mb-4">Nos partenaires De Transit</p>

		<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
			&quot;loop&quot;: false,
			&quot;slidesPerView&quot;: 2,
			&quot;spaceBetween&quot;: 30,
			&quot;breakpoints&quot;: {
				&quot;576&quot;: {&quot;slidesPerView&quot;: 2},
				&quot;768&quot;: {&quot;slidesPerView&quot;: 3},
				&quot;992&quot;: {&quot;slidesPerView&quot;: 4},
				&quot;1200&quot;: {&quot;slidesPerView&quot;: 6}
			}}">

			<!-- Slider items -->
			<div class="swiper-wrapper align-items-center" id="swiper-wrapper-f630309976f13405" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-240.667px, 0px, 0px);">
				<!-- Image -->
				<div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('ministere-agriculture.jpeg')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('conseil-cafe-cacao.jpg')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('cargillwebsite.jpg')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="4 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('Bollore_transport_logistics_RVB_02.png')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('portabidjan.png')}}" class="grayscale px-sm-4" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="6 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('air-ci.png')}}" class="grayscale px-sm-4" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="7 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('port-sanpedro.png')}}" class="grayscale px-sm-4" alt="client-img">
				</div>
				<!-- Image -->

			</div>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
		<!-- Client-Slider END -->
	</div>
</section>
<div class="inner-container-small text-center mb-4 mb-sm-5">
    <h2 class="mb-4">NOS COLLECTIONS </h2>
    <p class="mb-0">Consulter nos catalogues que nous commercons dans le monde à travers notre marque.</p>
</div>

<section class="bg-parallax position-relative" style="background:url(assets/images/shop/transport.jpeg) no-repeat; background-size:cover; background-position:center;" id="nosproduits">
	<!-- Bg overlay -->
	<div class="bg-overlay bg-dark opacity-6"></div>

	<div class="container position-relative z-index-2">
		<div class="row">
			<div class="col-lg-8 col-xl-5 mb-5 mb-xl-0">
				<span class="text-primary display-4">EN STOCK</span>
				<h3 class="text-white my-4">Liste des produits de commercialisation </h3>
				<p class="text-white">Nos Commercons des produits dans le monde à travers nos partenaires .</p>

				<!-- Slider arrow -->
				<div class="d-flex gap-3 position-relative mt-5 mt-md-6">
					<a href="#" class="btn btn-outline-white btn-icon rounded-circle mb-0 swiper-button-prev"><i class="bi bi-arrow-left"></i></a>
					<a href="#" class="btn btn-outline-white btn-icon rounded-circle mb-0 swiper-button-next"><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>

			<div class="col-xl-7 col-xxl-6 ms-auto">

				<!-- Slider START -->
				<div class="swiper" data-swiper-options='{
					"spaceBetween": 30,
					"grabCursor": true,
					"speed":"1000",
					"navigation":{
						"nextEl":".swiper-button-next",
						"prevEl":".swiper-button-prev"
					},
					"autoplay":{
						"delay": 5000,
						"disableOnInteraction": true,
						"pauseOnMouseEnter": true
					},
					"breakpoints": {
						"576": {"slidesPerView": 1},
						"768": {"slidesPerView": 2},
						"992": {"slidesPerView": 3},
						"1200": {"slidesPerView": 2}
					}}'>

					<div class="swiper-wrapper">
						<!-- Slider items -->
                        @foreach ($allProjets as $projet)
						<div class="swiper-slide">
							<div class="card border overflow-hidden p-0 h-100">


								<!-- Image -->
								<div class="card-header bg-transparent pb-0">
									<img src="{{asset('projets/images/'.$projet->image)}}" alt="">
								</div>

								<!-- Card body -->
								<div class="card-body pt-0">
									<h6 class="card-title"><a href="#" class="stretched-link">{{$projet->title}}</a></h6>
									<p class="mb-0">{{Str::limit($projet->description,50)}} </p>
								</div>

								<!-- Card footer -->
								<div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
									<div class="d-flex align-items-center gap-2 justify-content-center">
										<p class="fw-bold text-success mb-0">12300 FCFA</p>

									</div>
									<a href="#" class="btn btn-dark mb-0 z-index-2">ACHETER</a>
								</div>
							</div>
						</div>
                        @endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<br><br>
<div class="inner-container-small text-center mb-4 mb-sm-6">
    <h2>Nos Services</h2>
    <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy.</p>
</div>

<section class="pt-0" id="nosservices">
	<div class="container">
		<div class="row g-4 g-lg-5">
			<!-- Service item -->
            @foreach ($allServices as $service)
			<div class="col-md-6">
				<div class="card card-body card-hover-shadow border d-flex flex-row p-4 h-100">
					<!-- Icon -->
					<figure class="text-primary mb-0">
						<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.2402 6.75391C21.2543 9.81065 21.2543 11.8485 20.2402 14.9052" stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M2.25047 12.9739C2.25055 14.0922 3.15715 14.9988 4.27547 14.9988V14.9988L4.25651 19.4911C4.25125 20.7361 5.25945 21.7481 6.50452 21.7474V21.7474C7.74497 21.7468 8.75021 20.741 8.75021 19.5006V15.1105H10V6.55981H6.46978C5.09959 6.55981 4.41449 6.55981 3.87962 6.79848C3.26038 7.07479 2.76505 7.57015 2.48879 8.18941C2.25016 8.72431 2.25021 9.4094 2.25031 10.7796L2.25047 12.9739Z" fill="currentColor"></path>
							<path d="M11.0002 15.8122C13.9211 18.3111 15.3815 19.5606 16.6274 19.37C17.1377 19.2919 17.6157 19.0718 18.0068 18.7348C18.9616 17.912 18.9616 15.99 18.9616 12.146V9.4287C18.9616 5.58267 18.9616 3.65966 18.0199 2.83775C17.6138 2.48322 17.1124 2.2559 16.5781 2.18405C15.3393 2.01748 13.893 3.28476 11.0002 5.81933V5.81933V15.8122V15.8122Z" fill="currentColor" fill-opacity="0.25"></path>
						</svg>
					</figure>

					<!-- Title -->
					<div class="d-flex flex-column ms-4">
						<h5 class="mb-3">{{$service->title}}</h5>
						<p class="mb-3">{{Str::limit($service->description, 200)}}</p>
						<a class="icon-link icon-link-hover stretched-link mt-auto" href="{{route('detail.service', $service->slug)}}">Consulter<i class="bi bi-arrow-right"></i> </a>
					</div>
				</div>
			</div>

            @endforeach


		</div>
	</div>
</section>


<section class="pt-0" >
	<div class="container">
		<!-- Title -->
		<div class="inner-container-small text-center mb-4 mb-sm-6">
			<h2>Notre équipe </h2>
			<p class="mb-0">Notre équipe à nos services pour une meilleure prise en charge de vos projets.</p>
		</div>

		<!-- Team list START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-4 justify-content-center">
			<!-- Team item -->
			<div class="col">
				<div class="card card-body card-hover-shadow bg-transparent text-center p-4">
					<!-- Image -->
					<div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
					</div>

					<!-- Content -->
					<h6 class="mb-1"><a href="#">Samuel Bishop</a></h6>
					<small>UI/UX Designer</small>

					<!-- Social button -->
					<ul class="list-inline mb-0 mt-3">
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Team item -->
			<div class="col">
				<div class="card card-body card-hover-shadow bg-transparent text-center p-4">
					<!-- Image -->
					<div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
					</div>

					<!-- Content -->
					<h6 class="mb-1"><a href="#">Judy Nguyen</a></h6>
					<small>Web Designer</small>

					<!-- Social button -->
					<ul class="list-inline mb-0 mt-3">
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Team item -->
			<div class="col">
				<div class="card card-body card-hover-shadow bg-transparent text-center p-4">
					<!-- Image -->
					<div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
					</div>

					<!-- Content -->
					<h6 class="mb-1"><a href="#">Louis Ferguson</a></h6>
					<small>Web Developer</small>

					<!-- Social button -->
					<ul class="list-inline mb-0 mt-3">
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Team item -->
			<div class="col">
				<div class="card card-body card-hover-shadow bg-transparent text-center p-4">
					<!-- Image -->
					<div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
					</div>

					<!-- Content -->
					<h6 class="mb-1"><a href="#">Dennis Barrett</a></h6>
					<small>CEO &amp; Founder</small>

					<!-- Social button -->
					<ul class="list-inline mb-0 mt-3">
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Team item -->
			<div class="col">
				<div class="card card-body card-hover-shadow bg-transparent text-center p-4">
					<!-- Image -->
					<div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
					</div>

					<!-- Content -->
					<h6 class="mb-1"><a href="#">Bryan Knight</a></h6>
					<small>Product Designer</small>

					<!-- Social button -->
					<ul class="list-inline mb-0 mt-3">
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Team list END -->
	</div>
</section>


<section id="catalogue">
	<div class="container">
		<div class="inner-container-small text-center">
			<!-- SVG -->
			<figure class="mb-4">
				<svg width="223.6px" height="87.2px" viewBox="0 0 223.6 87.2" style="enable-background:new 0 0 223.6 87.2;" xml:space="preserve">
					<path class="fill-mode" d="M222.9,53.8c-13.2-3-28-3-41,0.9c-5.5,1.7-11,4.3-14.9,8.7c-1.3-0.1-2.6-0.2-3.8-0.1 c-5.8,0.1-11.6,1.5-16.9,3.7c-2.9,1.2-5.7,2.9-8.5,4.4c-3.7,1.9-7.4,3.8-11.3,5.3c-7.3,2.9-16,5-23.5,1.7c-1.5-0.6-2.9-1.5-4.1-2.6 c6.5-2.6,12.2-7.9,13.2-15c0.8-6.6-5.1-12.1-11.6-11.4c-5,0.6-7.5,5.6-8.3,10.1c-0.9,4.9-0.3,10.8,2.7,14.9 c0.2,0.2,0.4,0.5,0.5,0.7c-0.4,0.1-0.8,0.2-1.3,0.3c-6.6,1.5-14.3,0.3-20.3-2.9c-6.1-3.3-10.3-9.1-12.3-15.6 c-0.2-0.7-1.2-0.4-1,0.3c2.1,7.3,6.7,13.4,13.4,17.1c6.8,3.7,15.4,4.5,22.7,2.4c0,0,0.1,0,0.1,0c4.5,4.4,11.2,5.9,17.3,5.4 c8-0.6,15.6-4.1,22.7-7.7c5.6-2.9,10.8-6,17-7.6c3.8-0.9,7.8-1.5,11.8-1.3c-3.3,4.8-4.6,11.1-2.3,16.5c2.8,6.4,11.3,6.7,16.3,2.8 c5.1-4,2.8-12.4-1-16.4c-2.4-2.5-5.7-3.9-9.1-4.5c0.2-0.2,0.3-0.3,0.5-0.4c4.3-4,10.2-6.2,15.9-7.5c11.8-2.8,24.9-2.7,36.7,0 C223.6,56,224.1,54,222.9,53.8z M95.5,71.6c-1.2-2.4-1.7-5.1-1.8-7.8c-0.1-4.5,1.1-11.2,6.1-12.6c2.4-0.7,5.2,0.4,7.2,1.7 c2.9,1.9,3.5,5.5,2.9,8.7c-1.2,6.2-6.8,10.5-12.6,12.6C96.7,73.4,96,72.5,95.5,71.6z M171.5,66.3c5.7,1.8,10.3,7.8,8.5,14 c-1.1,3.9-6.1,5.2-9.6,4.8c-3.5-0.4-5.5-3.4-6.2-6.5c-1.1-4.7,0.6-9.5,3.5-13.1C169,65.7,170.2,65.9,171.5,66.3z"></path>
					<polygon class="fill-primary" points="65.3,39 61,56.8 0.7,0.7"></polygon>
					<path class="fill-mode" d="M60.6,57.3L0.2,1.1C0,0.9-0.1,0.5,0.1,0.3C0.3,0,0.7-0.1,1,0.1l64.7,38.3c0.2,0.1,0.4,0.4,0.3,0.7l-4.3,17.8 c-0.1,0.2-0.2,0.4-0.4,0.5c-0.1,0-0.1,0-0.2,0C60.9,57.4,60.7,57.4,60.6,57.3z M5.6,4.3l55.1,51.2l3.9-16.3L5.6,4.3z"></path>
					<polygon class="fill-primary" points="56.5,42.4 61,56.8 0.7,0.8"></polygon>
					<path class="fill-mode" d="M60.6,57.3L0.2,1.3C0,1.1-0.1,0.7,0.2,0.4c0.2-0.3,0.6-0.3,0.9-0.1l55.8,41.5c0.1,0.1,0.2,0.2,0.2,0.3 l4.6,14.4c0.1,0.3,0,0.6-0.3,0.8c-0.1,0.1-0.2,0.1-0.4,0.1C60.9,57.4,60.7,57.4,60.6,57.3z M10.1,8.7l49.6,45.9l-3.8-11.8 L10.1,8.7z"></path>
					<polygon class="fill-primary" points="0.7,0.7 91.5,28.5 65.2,38.8 			"></polygon>
					<path class="fill-mode" d="M64.9,39.4L0.3,1.2C0,1.1-0.1,0.7,0.1,0.4C0.2,0.1,0.5-0.1,0.9,0l90.9,27.8c0.3,0.1,0.5,0.3,0.5,0.6 c0,0.3-0.2,0.5-0.4,0.6L65.4,39.4c-0.1,0-0.2,0-0.2,0C65.1,39.4,65,39.4,64.9,39.4z M5.8,2.9l59.5,35.2l24.3-9.5L5.8,2.9z"></path>
					<polygon class="fill-primary" points="56.3,42.4 26.5,57.6 0.7,0.7 			"></polygon>
					<path class="fill-mode" d="M26.3,58.3c-0.2-0.1-0.3-0.2-0.4-0.3L0.1,0.9c-0.1-0.3,0-0.6,0.2-0.8C0.5,0,0.8,0,1.1,0.1l55.7,41.8 c0.2,0.1,0.3,0.4,0.3,0.6c0,0.2-0.2,0.4-0.4,0.5L26.8,58.2c-0.1,0-0.2,0.1-0.3,0.1C26.5,58.3,26.4,58.3,26.3,58.3z M2.3,2.7 l24.5,54l28.2-14.4L2.3,2.7z"></path>
				</svg>
			</figure>

			<!-- Title -->
			<h2>NOTRE CATALOGUE </h2>
			<p>Entrer votre email pour recevoir nos catalogue</p>

			<div class="position-relative mt-5">
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle d-none d-lg-block">
					<svg class="opacity-1" width="148" height="140" viewBox="0 0 148 140" xmlns="http://www.w3.org/2000/svg">
						<path class="fill-primary" d="m9.95 131.41c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<circle class="fill-primary" cx="25.86" cy="131.41" r="2.95"></circle>
						<circle class="fill-primary" cx="44.71" cy="131.41" r="2.95"></circle>
						<circle class="fill-primary" cx="63.57" cy="131.41" r="2.95"></circle>
						<circle class="fill-primary" cx="82.43" cy="131.41" r="2.95"></circle>
						<circle class="fill-primary" cx="101.29" cy="131.41" r="2.95"></circle>
						<circle class="fill-primary" cx="120.14" cy="131.41" r="2.95"></circle>
						<path class="fill-primary" d="m141.95 131.41c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 113.61c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<circle class="fill-primary" cx="25.86" cy="113.61" r="2.95"></circle>
						<circle class="fill-primary" cx="44.71" cy="113.61" r="2.95"></circle>
						<circle class="fill-primary" cx="63.57" cy="113.61" r="2.95"></circle>
						<circle class="fill-primary" cx="82.43" cy="113.61" r="2.95"></circle>
						<circle class="fill-primary" cx="101.29" cy="113.61" r="2.95"></circle>
						<circle class="fill-primary" cx="120.14" cy="113.61" r="2.95"></circle>
						<path class="fill-primary" d="m141.95 113.61c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 95.81c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<circle class="fill-primary" cx="25.86" cy="95.81" r="2.95"></circle>
						<circle class="fill-primary" cx="44.71" cy="95.81" r="2.95"></circle>
						<circle class="fill-primary" cx="63.57" cy="95.81" r="2.95"></circle>
						<circle class="fill-primary" cx="82.43" cy="95.81" r="2.95"></circle>
						<circle class="fill-primary" cx="101.29" cy="95.81" r="2.95"></circle>
						<circle class="fill-primary" cx="120.14" cy="95.81" r="2.95"></circle>
						<path class="fill-primary" d="m141.95 95.81c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m28.8 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m47.66 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m66.52 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m85.37 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.64 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m104.23 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m123.09 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m141.95 78.01c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m28.8 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m47.66 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m66.52 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m85.37 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.64 0 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m104.23 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m123.09 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m141.95 60.22c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m28.8 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m47.66 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m66.52 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m85.37 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.64 0 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m104.23 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m123.09 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m141.95 42.42c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 24.62c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<circle class="fill-primary" cx="25.86" cy="24.62" r="2.95"></circle>
						<circle class="fill-primary" cx="44.71" cy="24.62" r="2.95"></circle>
						<circle class="fill-primary" cx="63.57" cy="24.62" r="2.95"></circle>
						<circle class="fill-primary" cx="82.43" cy="24.62" r="2.95"></circle>
						<circle class="fill-primary" cx="101.29" cy="24.62" r="2.95"></circle>
						<circle class="fill-primary" cx="120.14" cy="24.62" r="2.95"></circle>
						<path class="fill-primary" d="m141.95 24.62c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95 2.95 1.32 2.95 2.95z"></path>
						<path class="fill-primary" d="m9.95 6.82c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95c0-1.62 1.32-2.94 2.95-2.94s2.95 1.32 2.95 2.94z"></path>
						<circle class="fill-primary" cx="25.86" cy="6.82" r="2.95"></circle>
						<circle class="fill-primary" cx="44.71" cy="6.82" r="2.95"></circle>
						<circle class="fill-primary" cx="63.57" cy="6.82" r="2.95"></circle>
						<circle class="fill-primary" cx="82.43" cy="6.82" r="2.95"></circle>
						<circle class="fill-primary" cx="101.29" cy="6.82" r="2.95"></circle>
						<circle class="fill-primary" cx="120.14" cy="6.82" r="2.95"></circle>
						<path class="fill-primary" d="m141.95 6.82c0 1.63-1.32 2.95-2.95 2.95s-2.95-1.32-2.95-2.95 1.32-2.95 2.95-2.95c1.63 0.01 2.95 1.33 2.95 2.95z"></path>
					</svg>
				</figure>

				<!-- Input -->
				<div class="bg-light border rounded-2 position-relative z-index-2 p-2 mb-2">
					<form class="input-group">
						<input class="form-control form-control-lg focus-shadow-none bg-light border-0 me-1" type="email" placeholder="Enter your email address">
						<button type="button" class="btn btn-lg btn-dark rounded-2 mb-0">ENVOYER!</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="pt-0">
	<div class="container text-center">
		<!-- Client-Slider START -->
		<p class="heading-color fw-semibold mb-4">Ceux qui nous font confiance</p>

		<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
			&quot;loop&quot;: false,
			&quot;slidesPerView&quot;: 2,
			&quot;spaceBetween&quot;: 30,
			&quot;breakpoints&quot;: {
				&quot;576&quot;: {&quot;slidesPerView&quot;: 2},
				&quot;768&quot;: {&quot;slidesPerView&quot;: 3},
				&quot;992&quot;: {&quot;slidesPerView&quot;: 4},
				&quot;1200&quot;: {&quot;slidesPerView&quot;: 6}
			}}">

			<!-- Slider items -->
			<div class="swiper-wrapper align-items-center" id="swiper-wrapper-f630309976f13405" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-240.667px, 0px, 0px);">
				<!-- Image -->
				<div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('ministere-agriculture.jpeg')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('conseil-cafe-cacao.jpg')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('cargillwebsite.jpg')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="4 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('Bollore_transport_logistics_RVB_02.png')}}" class="grayscale px-sm-4 ps-0" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('portabidjan.png')}}" class="grayscale px-sm-4" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="6 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('air-ci.png')}}" class="grayscale px-sm-4" alt="client-img">
				</div>
				<!-- Image -->
				<div class="swiper-slide" role="group" aria-label="7 / 8" style="width: 210.667px; margin-right: 30px;">
					<img src="{{asset('port-sanpedro.png')}}" class="grayscale px-sm-4" alt="client-img">
				</div>
				<!-- Image -->

			</div>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
		<!-- Client-Slider END -->
	</div>
</section>

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection
