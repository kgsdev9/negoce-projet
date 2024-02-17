@extends('layout.app')
@section('content')
<main>
    <!--hero start-->
    <section class="jarallax py-9 hero-agency" data-jarallax data-speed="0.4">
       <img class="jarallax-img" src="assets/images/landings/agency/agency-hero-img.jpg" alt="agency" />
       <div class="position-absolute start-0 end-0">
          <div class="container">
             <div class="row">
                <div class="col-xl-5 col-lg-7 col-12" data-cue="zoomIn">
                   <div class="text-center text-lg-start">
                      <div class="mb-4 text-white-stable">
                         <small class="text-uppercase ls-lg">Bienvenue sur Negoce Bussness Group</small>
                         <h1 class="mb-3 mt-3 display-3 text-white-stable">La créativité est notre maruqe de fabrice.</h1>
                         <p class="lead mb-0">Démarrer votre projet de vie avec nous , nous vous garantissons le meilleure des prestations.</p>
                      </div>

                      <a href="#section" id="#section" class="btn btn-primary">Commencer maintenant</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--hero end-->

    <!--Project we done start-->
    <section class="my-xl-9 my-5">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 offset-lg-3">
                <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                   <small class="text-uppercase ls-md fw-semibold">Nos Projets</small>

                   <h2 class="my-3">Projets phares</h2>
                   <p class="mb-0">Nous avons conceptualisés des  projets innovants pour nos clients.</p>
                </div>
             </div>
          </div>
          <div class="table-responsive-lg">
             <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                @foreach ($allProjets as $projet)
                <div class="col-lg-4 col-md-6 col-12">
                   <div data-cue="zoomIn">
                      <figure class="lift position-relative btn-arrow mb-4">
                         <a href="#">
                            <img src="{{asset('projets/images/'.$projet->image)}}" alt="portfolio-2" class="img-fluid rounded-3" />
                            <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                               <i class="bi bi-arrow-up-right"></i>
                            </div>
                         </a>
                      </figure>

                      <h2 class="lh-base h4">
                         <a href="#" class="text-reset">{{$projet->title}}</a>
                      </h2>

                   </div>
                </div>
                @endforeach

             </div>
          </div>
          <div class="row">
             <div class="col-lg-12" data-cue="fadeIn">
                <div class="text-center my-5">
                   <a href="{{route('projet.index')}}" class="btn btn-primary">Consulter plus de projets</a>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Project we done end-->

    <!--Our solutions start-->
    <section class="py-xl-9 py-5 bg-light">
       <div class="container">
          <div class="row">
             <div class="col-xl-5 col-md-7" data-cue="fadeIn">
                <div class="mb-xl-7 mb-5">
                   <small class="text-uppercase ls-md fw-semibold">Nos Prestations</small>
                   <h2 class="h1 mb-3 mt-4">Créer un site internet performant</h2>
                   <p class="mb-0 text-body">Vos projets sont confiés a des experts qui se chargeront de développer vos solutions informatiques de qualité .</p>
                </div>
             </div>
          </div>
          <div class="row g-4" data-cue="fadeIn">
             <div class="col-lg-6 col-md-6 col-12">
                <div class="card card-lift h-100" data-cue="zoomIn" data-duration="500">
                   <div class="card-body p-5">
                      <div class="d-lg-flex">
                         <div class="p-3 icon-xl icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-vector-pen text-primary" viewBox="0 0 16 16">
                               <path
                                  fill-rule="evenodd"
                                  d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z" />
                               <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z" />
                            </svg>
                         </div>
                         <div class="ms-lg-5 mt-4 mt-lg-0">
                            <div class="mb-4">
                               <h3>UX/UI Design</h3>
                               <p class="mb-0">Nous concevons les maquettes de vos applications mobile et web pour vous fournir une prestation unique.</p>
                            </div>


                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="card card-lift h-100" data-cue="zoomIn" data-duration="800">
                   <div class="card-body p-5">
                      <div class="d-lg-flex">
                         <div class="p-3 icon-xl icon-shape rounded bg-success bg-opacity-10 border border-success-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-braces-asterisk text-success" viewBox="0 0 16 16">
                               <path
                                  fill-rule="evenodd"
                                  d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                            </svg>
                         </div>
                         <div class="ms-lg-5 mt-4 mt-lg-0">
                            <div class="mb-4">
                               <h3>Web Developement</h3>
                               <p class="mb-0">Nous concevons et créer vos applications web surmesure en rapport à vos projets de vie.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="card card-lift h-100" data-cue="zoomIn" data-duration="800">
                   <div class="card-body p-5">
                      <div class="d-lg-flex">
                         <div class="p-3 icon-xl icon-shape rounded bg-warning bg-opacity-10 border border-warning-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-palette2 text-warning" viewBox="0 0 16 16">
                               <path
                                  d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z" />
                               <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z" />
                            </svg>
                         </div>
                         <div class="ms-lg-5 mt-4 mt-lg-0">
                            <div class="mb-4">
                               <h3>Application mobile</h3>
                               <p class="mb-0">Nous concevons des solutions mobiles de qualité de tracking , de vente et de solution informatique.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="card card-lift h-100" data-cue="zoomIn" data-duration="1000">
                   <div class="card-body p-5">
                      <div class="d-lg-flex">
                         <div class="p-3 icon-xl icon-shape rounded bg-info bg-opacity-10 border border-info-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-window-dock text-info" viewBox="0 0 16 16">
                               <path
                                  d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm4.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                               <path
                                  d="M14 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h12ZM2 14h12a1 1 0 0 0 1-1V5H1v8a1 1 0 0 0 1 1ZM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2Z" />
                            </svg>
                         </div>
                         <div class="ms-lg-5 mt-4 mt-lg-0">
                            <div class="mb-4">
                               <h3>Assurance qualitée</h3>
                               <p class="mb-0">Nous vous garantissons une application de qualité , sans bug , de haute perfomance, stable .</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Our solutions end-->
    <section class="py-5">
       <div class="container my-lg-7">
          <div class="row">
             <div class="col-12">
                <div class="mb-5 text-center" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                   <h2 class="mb-0">Nous proposons d'autres  divers services comme </h2>
                </div>
             </div>

             <div class="row gy-4">
                <div class="col-md-4 col-12" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">


                      <div>
                         <h4 class="mb-2">Systeme CEO </h4>
                         <p>Block is the powerful front-end solution based on Bootstrap 5 —Powerful, extensible, and feature-packed frontend toolkit.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">

                      <div>
                         <h4 class="mb-2">Marketing digitale </h4>
                         <p>Block is built using Sass. Easily change colors, typo, and much more. It is the most mature, stable, and powerful CSS extension language in the world.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="slideInRight" data-show="true" style="animation-name: slideInRight; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">

                      <div>
                         <h4 class="mb-2">Accompagnement d'entreprise</h4>
                         <p>
                            All HTML files are checked via the W3C validator to sssssssssssssssssssssssre.  All HTML files are checked via the W3C validator to sssssssssssssssssssssssre.
                         </p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">
                      <div>
                         <h4 class="mb-2">Comminuty Marketing</h4>
                         <p>Say jQuery to NO! With the block we build a complete vanilla. js code for all the pages.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">
                      <div>
                         <h4 class="mb-2">Placement de produit </h4>
                         <p>Block theme documentation helps developers, It has a theme installation workflow and how to use it for your purpose and easy copy and paste snippets.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="slideInRight" data-show="true" style="animation-name: slideInRight; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">
                      <div>
                         <h4 class="mb-2">Mobile friendly website</h4>
                         <p>Block is Mobile friendly, Designing websites to be mobile friendly ensures that your pages perform well on all devices.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">

                      <div>
                         <h4 class="mb-2">Kick-Start Your Development</h4>
                         <p>Full task automation. Start your development process fast and easy with Node.js and Gulp setup. Configuration files are included.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">
                      <div>
                         <h4 class="mb-2">Light/ Dark Mode</h4>
                         <p>Block theme pages also come with the light / dark mode. All components include a dark variant that lets you style your site differently when dark mode is enabled.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-12" data-cue="slideInRight" data-show="true" style="animation-name: slideInRight; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                   <div class="d-flex flex-column gap-4">
                      <div>
                         <h4 class="mb-2">Active Support</h4>
                         <p>
                            Our support team helps you solve any issues you have in working with Block them. To get help from our team,
                            <a href="#">Contact us.</a>
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>

    <!--Who we are start-->
    <section class="my-xl-9 my-5">
       <div class="container">
          <div class="row g-4">
             <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft">
                <div class="mb-4">
                   <small class="text-uppercase ls-md fw-semibold">Pourquoi nous ?</small>
                   <h2 class="h1 mt-4 mb-3">Nous croyons au pouvoir de la stratégie créative.</h2>
                   <p class="mb-3">Attirer. Convertir. Transformer. Fidéliser. Tels sont les objectifs que vous devez atteindre dans votre stratégie digitale. Nous aidons nos clients à développer leur chiffre d’affaires grâce à la transformation digitale du marketing et des ventes. Délivrer le bon message au bon moment et à la bonne personne. Une combinaison mêlant stratégie efficiente et utilisation de la data...</p>

                </div>

                <a href="#" class="icon-link icon-link-hover">
                   Démarrer votre projet avec nous
                   <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path
                         fill-rule="evenodd"
                         d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                   </svg>
                </a>
             </div>
             <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                <div class="row g-4" data-cues="slideInUp" data-delay="1000">
                   <div class="col-lg-6 col-md-6 col-12">
                      <a href="#!">
                         <div
                            class="rounded-3 card-lift"
                            style="background-image: url(assets/images/about-img/about-grid-img-2.jpg); background-repeat: no-repeat; height: 386px; background-size: cover"></div>
                      </a>
                   </div>
                   <div class="col-lg-6 col-md-6 col-12">
                      <a href="#!">
                         <div
                            class="mb-4 rounded-3 card-lift"
                            style="background-image: url(assets/images/about-img/about-grid-img-1.jpg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                      </a>
                      <a href="#!">
                         <div
                            class="mb-2 rounded-3 card-lift"
                            style="background-image: url(assets/images/about-img/about-grid-img-3.jpg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Who we are end-->

    <!--Expert team start-->
    <section>
       <div class="container" data-cue="fadeIn">
          <div class="row border-top border-bottom">
             <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                <div class="text-center py-lg-5 p-4">
                   <div class="mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                         <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                      </svg>
                   </div>

                   <h4>Une equipe d'expert</h4>
                   <p class="mb-0">Nos équipes sont composés d'expert pour vous acompagner tout le long de vos projets.</p>
                </div>
             </div>
             <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                <div class="text-center py-lg-5 p-4">
                   <div class="mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trophy-fill text-primary" viewBox="0 0 16 16">
                         <path
                            d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
                      </svg>
                   </div>

                   <h4>Meilleure Agence</h4>
                   <p class="mb-0">Meilleure agence de la marketing digitale et de la conception de solution informatique</p>
                </div>
             </div>
             <div class="col-md-4" data-cue="zoomIn">
                <div class="text-center py-lg-5 p-4">
                   <div class="mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-stars text-primary" viewBox="0 0 16 16">
                         <path
                            d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                      </svg>
                   </div>

                   <h4>04 ans  D'experience .</h4>
                   <p class="mb-0">Plus de 04 d'experience à votre service pour vous fournir un service de qualité .</p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Expert team end-->

    <!--Our articles start-->
    <section class="my-xl-9 my-5">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 offset-lg-3" data-cue="fadeIn">
                <div class="text-center mb-xl-7 mb-5">
                   <h2 class="h1 mb-3">
                       Nos articles sur l'agence</h2>
                   <p class="mb-0">Suivez l'actualité de notre groupe et restez informé de notre evolution .</p>
                </div>
             </div>
          </div>
          <!-- Blog Card -->
          <div class="table-responsive-lg">
             <div class="row g-5 flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                @foreach ($allActualites as $actualite)


                <article class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                   <figure class="mb-4 zoom-img">
                      <a href="#">
                         <img src="{{asset('actualites/images/'.$actualite->image)}}" alt="blog" class="img-fluid rounded-3" />
                      </a>
                   </figure>


                   <h3 class="my-3 lh-base h4">
                      <a href="#" class="text-reset">{{$actualite->title}}</a>
                   </h3>

                <p>{{$actualite->description}}</p>
                </article>

                @endforeach
             </div>
          </div>
          <div class="row">
             <div class="col-lg-12" data-cue="zoomIn">
                <div class="mt-lg-8 mt-5">
                   <a href="{{route('home.actualite')}}" class="icon-link icon-link-hover text-dark">
                     Lire plus d'article
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                         <path
                            fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                      </svg>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Our articles end-->

    <!--Hire jamstack start-->
    <section class="pattern-square bg-info bg-opacity-10" id="#section">
       <div class="container position-relative z-1 py-xl-9 py-6">
          <div class="row">
             <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="row align-items-center g-5">
                   <div class="col-lg-6 col-12 order-2" data-cue="slideInLeft">
                      <div class="me-xl-7">
                         <div class="mb-5">
                            <h2 class="h1 mb-4">Pour une experience reussie </h2>
                            <p class="mb-0">Prenez contact avec nos équipes commerciales et discutez des conditions et des modalités de vos projets !</p>
                         </div>
                         <div class="mb-5">
                            <ul class="list-unstyled">
                               <li class="mb-2 d-flex">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                     <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                  </svg>
                                  <span class="ms-1">Discutez avec nos commericiaux?</span>
                               </li>
                               <li class="mb-2 d-flex">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                     <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                  </svg>
                                  <span class="ms-1">Expliquez-les vos besoins?</span>
                               </li>
                               <li class="mb-2 d-flex">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                     <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                  </svg>
                                  <span class="ms-1">Nous executons le projet dans les delai raisonnable?</span>
                               </li>
                            </ul>
                         </div>
                         <div class="d-md-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center mb-3 mb-md-0 small">
                               <div class="d-flex align-items-center">
                                  <img src="{{asset('LOOGO.png')}}" alt="Avatar" class="avatar avatar-lg rounded-circle" />
                                  <div class="ms-3">
                                     <h5 class="mb-0">CEO DE NEGOCE GROUP</h5>
                                     <small class="me-4">Negoce group service</small>
                                     <small>negocegroup@gmail.com</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-12 order-lg-2" data-cue="slideInRight">
                      <div class="card shadow-sm">
                         <div class="card-body">
                            <form  method="POST" action="{{ route('contact.poste') }}" novalidate>
                                @csrf
                               <div class="col-lg-12">
                                  <div class="mb-3">
                                     <h3 class="mb-0">Contactez nous et commencons</h3>
                                  </div>
                               </div>
                               <div class="col-md-12 col-12">
                                  <label for="ScheduleFirstnameInput" class="form-label">
                                     Nom
                                     <span class="text-danger">*</span>
                                  </label>
                                  <input type="text" name="name" class="form-control" id="name" required=""  placeholder="Votre nom" value="Negoce">
                                 *
                               </div>

                               <div class="col-md-12">
                                  <label for="scheduleEmailInput" class="form-label">
                                     Email
                                     <span class="text-danger">*</span>
                                  </label>
                                  <input type="email" name="email" class="form-control" id="email" required=""  placeholder="Your email address" value="email@gmail.com">

                               </div>
                               <div class="col-md-12">
                                  <label for="scheduleTextarea" class="form-label">Message</label>
                                  <textarea class="form-control" name="message" id="message"  placeholder="Votre message" rows="3" required></textarea>
                               </div>
                               <br><br>
                               <div class="d-grid">
                                  <button class="btn btn-primary" type="submit">Debuter votre projet!</button>
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Hire jamstack end-->
 </main>
@endsection
