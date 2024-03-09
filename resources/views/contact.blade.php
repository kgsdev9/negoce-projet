@extends('layouts.app')

@section('content')

<section class="pt-xl-8">
	<div class="container">
		<div class="row g-4 g-xxl-5">
			<div class="col-xl-9 mx-auto">
				<!-- Image -->
				<img src="assets/images/bg/02.jpg" class="rounded" alt="contact-bg">

				<!-- Contact form START -->
				<div class="row mt-n5 mt-sm-n7 mt-md-n8">
					<div class="col-11 col-lg-9 mx-auto">
						<div class="card shadow p-4 p-sm-5 p-md-6">
							<!-- Card header -->
							<div class="card-header border-bottom px-0 pt-0 pb-5">
								<!-- Breadcrumb -->
								<nav class="mb-3" aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-dots pt-0">
										<li class="breadcrumb-item"><a href="#">Accueil</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</nav>
								<!-- Title -->
								<h1 class="mb-3 h3">Contactez nous pour commencer votre projet </h1>

							</div>
							<!-- Card body & form -->

                            <form  class="card-body px-0 pb-0 pt-5" method="POST" action="{{ route('contact.poste') }}" novalidate="true">
                                @csrf
								<!-- Name -->
								<div class="input-floating-label form-floating mb-4">
									<input type="text" class="form-control bg-transparent" name="name" id="name" required=""  placeholder="Votre nom"   placeholder="Votre nom">
									<label for="floatingName">Votre nom</label>
								</div>
								<!-- Email -->
								<div class="input-floating-label form-floating mb-4">
                                    <input type="email" class="form-control bg-transparent" name="email" class="form-control" id="email" required=""  placeholder="Your email address" >

									<label for="floatingInput">Adresse email</label>
								</div>

								<!-- Message -->
								<div class="input-floating-label form-floating mb-4">
									<textarea class="form-control bg-transparent" placeholder="Votre projet" name="message"  style="height: 100px"></textarea>
									<label for="floatingTextarea2">Message</label>
								</div>
								<!-- Button -->
								<button class="btn btn-lg btn-primary mb-0" type="submit">Envoyer</button>
							</form>
						</div>
					</div>
				</div>
				<!-- Contact form END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>


<section class="py-0">
	<div class="container">
		<div class="row row-cols-1 row-cols-lg-3 g-4">
			<!-- Address info -->
			<div class="col">
				<div class="card card-body bg-light border p-sm-5">
					<!-- Icon -->
					<div class="mb-4"><i class="bi bi-geo-alt fa-xl text-primary"></i></div>
					<!-- Title -->
					<h6 class="mb-4">Adresse </h6>
					<!-- Office item -->
					<div class="d-flex align-items-center mb-2">
						<!-- Avatar -->
						<div class="avatar avatar-xxs me-2">
							<img class="avatar-img rounded-circle" src="{{asset('LOOGO.png')}}" alt="avatar">
						</div>
						<span class="heading-color fw-semibold mb-0">COCODY ANGRE:</span>
					</div>
					<address class="mb-0">Cocody angré terminus 81 82.</address>
				</div>
			</div>

			<!-- Email info -->
			<div class="col">
				<div class="card card-body bg-light border p-sm-5">
					<!-- Icon -->
					<div class="mb-4"><i class="bi bi-envelope fa-xl text-primary"></i></div>
					<!-- Title -->
					<h6 class="mb-3">Email </h6>
					<p>Contactez-nous pour plus de detail</p>
					<a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">bonyjeanelie@gmail.com</a>
				</div>
			</div>

			<!-- Contact info -->
			<div class="col">
				<div class="card card-body bg-light border p-sm-5">
					<!-- Icon -->
					<div class="mb-4"><i class="bi bi-telephone fa-xl text-primary"></i></div>
					<!-- Title -->
					<h6 class="mb-3">Contact </h6>
					<p>Contact professionel !</p>
					<a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">+225 07 67 64 77 92</a>
				</div>
			</div>

		</div> <!-- Row END -->
	</div>

	<!-- Map -->
	<iframe class="w-100 h-200px h-lg-400px  d-block mt-8" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3971.823027949395!2d-4.020650000000001!3d5.443821700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjYnMzcuOCJOIDTCsDAxJzE0LjMiVw!5e0!3m2!1sfr!2sci!4v1685978579489!5m2!1sfr!2sci" style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>

</section>



@endsection
