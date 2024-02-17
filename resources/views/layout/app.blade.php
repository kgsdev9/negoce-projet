
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Favicon icon-->
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('LOOGO.png')}}" />
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('LOOGO.png')}}" />
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('LOOGO.png')}}" />
      <link rel="mask-icon" href="{{asset('LOOGO.png')}}" color="#8b3dff" />
      <link rel="shortcut icon" href="{{asset('LOOGO.png')}}" />

      <!-- Libs CSS -->
      <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
      <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />

      <!-- Scroll Cue -->
      <link rel="stylesheet" href="assets/libs/scrollcue/scrollCue.css" />

      <!-- Box icons -->
      <link rel="stylesheet" href="assets/fonts/css/boxicons.min.css" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="assets/css/theme.min.css" />

      <title>Bienvenue sur negoce bussness</title>
   </head>

   <body>
      <!-- Navbar -->
      <header>
         <nav class="navbar navbar-expand-lg transparent navbar-transparent navbar-dark">
            <div class="container px-3">
               <a class="navbar-brand" href="index.html"><img src="{{asset('LOOGO.png')}}" style="height:30px;" alt /></a>
               <button class="navbar-toggler offcanvas-nav-btn" type="button">
                  <i class="bi bi-list"></i>
               </button>
               <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                  <div class="offcanvas-header">
                     <a href="index.html" class="text-inverse"><img src="{{asset('LOOGO.png')}}" style="height:30px;" alt /></a>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0 align-items-center">
                     <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home')}}" role="button" >Accueil</a>

                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home.service')}}" role="button" >Nos Services</a>

                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home.projets')}}" role="button">Nos Projets</a>

                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home.actualite')}}" role="button">Actualité</a>

                        </li>

                     </ul>

                     @guest
                     <div class="mt-3 mt-lg-0 d-flex align-items-center">
                        <a href="{{route('login')}}" class="btn btn-primary mx-2">Se Connecter</a>

                     </div>
                         @else
                         <div class="mt-3 mt-lg-0 d-flex align-items-center">
                            <a href="{{route('admin')}}" class="btn btn-primary mx-2">Mon espace</a>

                         </div>
                     @endguest

                  </div>
               </div>
            </div>
         </nav>
      </header>

      @yield('content')
      <!-- Footer -->
      <footer class="pt-7">
         <div class="container">
            <!-- Footer 4 column -->
            <div class="row">
               <div class="col-xxl-5 col-lg-5 col-md-7">
                  <div class="mb-7 mb-xl-0">
                     <div class="mb-4">
                        <a href="#">
                           <img src="{{asset('LOOGO.png')}}" alt="logo" style="height: 30px;" class="text-inverse" />
                        </a>
                     </div>
                     <p class="mb-5">Nous sommes une agence créativie qui propose des services de développement de solution informatique et d'accompagnement  .</p>

                     <form class="needs-validation" novalidate>
                        <h5 class="mb-3">S'inscrire aux NewsLetter</h5>
                        <div class="row g-2">
                           <div class="col-lg-9 col-8">
                              <label for="subscribeEmail" class="visually-hidden">Email</label>
                              <input type="email" class="form-control" id="subscribeEmail" placeholder="Email" required />
                              <div class="invalid-feedback">Please enter email.</div>
                           </div>
                           <div class="col-lg-3 col-4">
                              <div>
                                 <button type="submit" class="btn btn-primary">S'inscrire</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                  <div class="row" id="ft-links">
                     <div class="col-lg-4 col-12">
                        <div class="position-relative">
                           <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                              <h5>Nos Ressources</h5>
                              <a
                                 class="d-block d-lg-none stretched-link text-inherit"
                                 data-bs-toggle="collapse"
                                 href="#collapseLanding"
                                 role="button"
                                 aria-expanded="false"
                                 aria-controls="collapseLanding">
                                 <i class="bi bi-chevron-down"></i>
                              </a>
                           </div>
                           <div class="collapse d-lg-block" id="collapseLanding" data-bs-parent="#ft-links">
                              <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                 <li class="mb-2">
                                    <a href="#" class="text-decoration-none text-reset">Accueil</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="#!" class="text-decoration-none text-reset">Nos Services</a>
                                 </li>

                                 <li class="mb-2">
                                    <a href="#!" class="text-decoration-none text-reset">Collecte de fond </a>
                                 </li>

                                 <li class="mb-2">
                                    <a href="#!" class="text-decoration-none text-reset">Actualités </a>
                                 </li>


                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                           <h5>Service</h5>
                           <a
                              class="d-block d-lg-none stretched-link text-inherit"
                              data-bs-toggle="collapse"
                              href="#collapseAccounts"
                              role="button"
                              aria-expanded="false"
                              aria-controls="collapseAccounts">
                              <i class="bi bi-chevron-down"></i>
                           </a>
                        </div>
                        <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
                           <ul class="list-unstyled mb-0 py-3 py-lg-0">
                              <li class="mb-2">
                                 <a href="#" class="text-decoration-none text-reset">Accompagnement</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#" class="text-decoration-none text-reset">Développement informatique</a>
                              </li>
                              <li class="mb-2">
                                 <a href="forget-password.html" class="text-decoration-none text-reset">Marketing digital</a>
                              </li>


                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                           <h5>Contact</h5>
                           <a
                              class="d-block d-lg-none stretched-link text-inherit"
                              data-bs-toggle="collapse"
                              href="#collapseResources"
                              role="button"
                              aria-expanded="false"
                              aria-controls="collapseResources">
                              <i class="bi bi-chevron-down"></i>
                           </a>
                        </div>
                        <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
                           <ul class="list-unstyled mb-0 py-3 py-lg-0">
                              <li class="mb-2">
                                 <a href="docs/index.html" class="text-decoration-none text-reset">negocegroup@gmail.com</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#!" class="text-decoration-none text-reset">+2250767647792</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#" class="text-decoration-none text-reset">FAQ</a>
                              </li>

                              <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">Terme et condition</a>
                             </li>



                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </footer>
      <!-- Scroll top -->
      <div class="btn-scroll-top">
         <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
         </svg>
      </div>
      <!-- Libs JS -->
      <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
      <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>

      <!-- Theme JS -->
      <script src="assets/js/theme.min.js"></script>

      <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
      <script src="assets/js/vendors/jarallax.js"></script>
      <script src="assets/libs/scrollcue/scrollCue.min.js"></script>
      <script src="assets/js/vendors/scrollcue.js"></script>
      @include('sweetalert::alert')
   </body>
</html>
