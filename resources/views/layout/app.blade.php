
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
      
        <title>Negoce Group </title>

        <link rel="icon" type="image/png" href="{{ asset('LOOGO.png') }}">
    </head>
 <body class="startup-it-agency-color-css">

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-area-with-startup-it-agency">
            <div class="dibiz-responsive-nav">
                <div class="container-fluid">
                    <div class="dibiz-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('LOOGO.png') }}" class="main-logo" alt="logo" style="height:40px;">
                                <img src="{{ asset('LOOGO.png') }}" class="white-logo" alt="logo" style="height:40px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dibiz-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('LOOGO.png') }}" class="main-logo" alt="logo" style="height: 60px;">
                            <img src="{{ asset('LOOGO.png') }}" class="white-logo" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link">Accueil</a>
                                   
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Negoce Group <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Obtenir un devis negos </a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Prendre rendez-vous</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">MARKETING<i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Obtenir un devis negos</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Obtenir un rendez-vous</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Mes reservations</a></li>

                                     
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Nos Services</a>
                              
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Collecte De Fond <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Liste de campagne du PAM </i></a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Actualité</a>
                             
                                </li>

                                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="input-search" placeholder="Rechercher">
                                        <button type="submit">
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="option-item">
                                    <a href="#" class="default-btn">Devis</a>
                                </div>
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="input-search" placeholder="Chercher">
                                        <button type="submit">
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="option-item">
                                    <a href="#" class="default-btn">Un Devis</a>
                                </div>
                                <div class="option-item">
                                    <div class="switch-box">
                                        <label id="switch" class="switch">
                                            <input type="checkbox" onchange="toggleTheme()" id="slider">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

         @yield('content')

           <!-- Start Footer Area -->
        <footer class="footer-area it-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <a href="index.html" class="logo">
                                <img src="{{ asset('LOOGO.png') }}" alt="logo">
                            </a>
                            <p>
                                Une équipe
                                Nous travaillons comme une seule équipe mondiale, à la fois les uns avec les autres et avec nos clients, pour diriger notre énergie collective vers la réalisation de l'extraordinaire.</p>
                            <ul class="social-link">
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>Autres pages</h3>

                            <ul class="footer-links-list">
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">A Propos</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Projets</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>Liens utiles</h3>

                            <ul class="footer-links-list">
                                <li><a href="#"> Stratégie de marketing</a></li>
                                <li><a href="#">Design d'intérieur</a></li>
                                <li><a href="#">Services numériques</a></li>
                                <li><a href="#">La conception des produits</a></li>
                                <li><a href="#">Marketing social</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>SUPPORT</h3>

                            <ul class="footer-links-list">
                                <li><a href="#">Politique de confidentialité</a></li>
                                <li><a href="#">Termes et utilisations</a></li>
                                <li><a href="#">Centre de soutien</a></li>
                                <li><a href="#">Communauté</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>CONTACT NEGOCE</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>LocaLISATION:</span>
                                   ABIDJAN COTE D'IVOIRE
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>EMAIL:</span>
                                    <a href="/cdn-cgi/l/email-protection#f79f929b9b98b7939e959e8dd994989a"><span class="__cf_email__" data-cfemail="87efe2ebebe8c7e3eee5eefda9e4e8ea">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>TELEPHONE:</span>
                                    <a href="tell:098765432150">+2250767647792</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <p>Tous droits réservés  <a href="#" target="_blank">NEGOCE GROUP</a></p>
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
       
        
        </script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/fancybox.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/sticky-sidebar.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
        @include('flashy::message')
    </body> 


</html>