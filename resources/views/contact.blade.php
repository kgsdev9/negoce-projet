@extends('layout.app')

@section('content')
<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class="bx bx-map"></i>
                    </div>
                    <div class="icon">
                        <i class="bx bx-map"></i>
                    </div>
                    <h3>Notre adresse</h3>
                    <p>Abidjan Cote d'ivoire</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class="bx bx-phone-call"></i>
                    </div>
                    <div class="icon">
                        <i class="bx bx-phone-call"></i>
                    </div>
                    <h3>Contact</h3>
                    <p>Mobile: <a href="tel:+225054755500">(+225) - 45789 - 5789</a></p>
                    <p>E-mail: <a href="mailto:negocegroup@.com">negocegroup@.com</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class="bx bx-time-five"></i>
                    </div>
                    <div class="icon">
                        <i class="bx bx-time-five"></i>
                    </div>
                    <h3>Lundi - Vendredi : 09:00 - 20:00</h3>
                    <p>Monday - Friday: 09:00 - 20:00</p>
                    <p>Dimanche & Samedi &amp;  : 10h30 - 22h00</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">ENTRER EN CONTACT</span>
            <h2>Prêt à commencer??<span class="overlay"></span></h2>
            <p>Votre adresse email ne sera pas publiée.</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-image" data-tilt="">
                    <img data-cfsrc="{{asset('assets/img/contact.png')}}" alt="image" src="{{asset('assets/img/contact.png')}}">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <form  method="POST" action="{{ route('contact.poste') }}" novalidate="true">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group has-error">
                                    <input type="text" name="name" class="form-control" id="name" required=""  placeholder="Votre nom" value="Negoce">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group has-error">
                                    <input type="email" name="email" class="form-control" id="email" required=""  placeholder="Your email address" value="email@gmail.com">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                       

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group has-error">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder="Ecrivez votre message..."></textarea>
                                 
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;">Envoyer</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- Start Map Area -->
 <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3971.823027949395!2d-4.020650000000001!3d5.443821700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjYnMzcuOCJOIDTCsDAxJzE0LjMiVw!5e0!3m2!1sfr!2sci!4v1685978579489!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection