@extends('layouts.exemple3')

@section('content')
<header class="header-area">
    
  <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="header-hero-content text-center">
                      <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.5s; animation-name: fadeInUp;"> Merci de Nous rejoindre </h2>
                      <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.8s; animation-name: fadeInUp;">Merci de vous être abonné à notre newsletter! Vous serez informé de toutes les dernières actualités, offres spéciales et mises à jour du site. Nous sommes ravis que vous ayez choisi de faire partie de notre communauté et nous ferons de notre mieux pour vous fournir les informations les plus pertinentes et utiles. Si vous avez des questions ou des commentaires, n'hésitez pas à nous contacter</p>   
                     
              </div> <!-- header hero content -->
              </div>
          </div> <!-- row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 1.4s; animation-name: fadeIn;">
          <img src="/images/subscribe.png" alt="" class= "img-fluid mx-auto" width="500px" >
                  </div> <!-- header hero image -->
              </div>
          </div> <!-- row -->
      </div> <!-- container -->
      <div id="particles-1" class="particles"><canvas class="particles-js-canvas-el" width="1898" height="1030" style="width: 100%; height: 100%;"></canvas></div>
  </div> <!-- header hero -->
</header>



 @endsection
     