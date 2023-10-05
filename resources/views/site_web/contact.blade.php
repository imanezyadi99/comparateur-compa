@extends('layouts.exemple3')

@section('content')
<header class="header-area">
    
    <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
        <section class="u-clearfix u-grey-10 u-section-15" id="carousel_9704">
            <img class="u-expanded-width u-image u-image-1" src="images/mnmn-min.jpg" data-image-width="1920" data-image-height="730">
            <div class="u-clearfix u-gutter-16 u-layout-wrap u-layout-wrap-1">
              <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-radius-20 u-size-29 u-white u-layout-cell-1">
                    <div class="u-container-layout u-valign-top u-container-layout-1">
                      <h2 class="u-align-left u-custom-font u-font-montserrat u-text u-text-1"> Prenez Contact</h2>
                      <p class="u-text u-text-2"> Utilisez notre formulaire de contact pour toutes demandes d'information ou contactez-nous directement en utilisant les informations de contact ci-dessous. N'hésitez pas à nous contacter par e-mail ou par téléphone<span style="font-size: 1.25rem;"></span>
                      </p>
                      <div class="u-border-2 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
                      <div class="u-expanded-width u-list u-list-1">
                        <div class="u-repeater u-repeater-1">
                          <div class="u-align-left u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1"><img src="images/3179068-cba1806f.png" alt=""></span>
                              <h6 class="u-text u-text-3">Visitez-nous quotidiennement</h6>
                              <p class="u-text u-text-4">3 RUE DU PRE D'AUBIAT 19200 USSEL</p>
                            </div>
                          </div>
                          <div class="u-align-left u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-2"><img src="images/ce131fa2-9b26-4c33-a9f7-aff3357242a7-6ca09a94.png" alt=""></span>
                              <h6 class="u-text u-text-5"> Avez-vous des questions ?</h6>
                              <p class="u-text u-text-6">+33 5 19 79 97 67</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-palette-1-base u-radius-20 u-size-31 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-4">
                      <h4 class="u-custom-font u-font-montserrat u-text u-text-7">Contactez-Nous</h4>
                      <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                        <form action="{{route('contactpage')}}"  source="email" name="form" style="padding: 0px;">
                          @csrf
                          <div class="u-form-group u-form-name">
                            <input type="text" placeholder="Entrer votre nom"  name="name" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" style="
                            margin-bottom: 1.5rem !important;
                            " required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <input type="email" placeholder="Entrer votre email"  name="email" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" style="
                            margin-bottom: 1.5rem !important;
                            " required="">
                          </div>

                          <div class="u-form-group u-form-name">
                            <input type="text" placeholder="Entrer votre téléphone"  name="telephone" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" style="
                            margin-bottom: 1.5rem !important;
                            " required="">
                          </div> 

                           <div class="u-form-group u-form-name">
                            <input type="text" placeholder="Entrer votre sujet"  name="subject" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" style="
                            margin-bottom: 1.5rem !important;
                            " required="">
                          </div>
                          <div class="u-form-group u-form-message">
                            <textarea placeholder="Entrer votre message" rows="4" cols="50"  name="message" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" style="
                            margin-bottom: 1.5rem !important;
                            " required=""></textarea>
                          </div>
                          <button type="submit" class="btn btn-lg" style="background: white !important;color: black ;  width:100%;" >DEMANDEZ UN DEVIS</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <div id="particles-1" class="particles"><canvas class="particles-js-canvas-el" width="1898" height="1030" style="width: 100%; height: 100%;"></canvas></div>
    </div> <!-- header hero -->
</header>

        <footer id="footer" class="footer-area pt-200">
            <div class="container">
                <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn; display: none;">
            
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe-content mt-45">
                                <h2 class="subscribe-title">Inscrivez-vous à la newsletter
                               </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="subscribe-form mt-50">
                                <form id="subscribe" method="post" >
                                @csrf
                                    <input type="text" name="email" id="email"  placeholder=" Email" required="">
                                    <button class="main-btn"  type="submit">Subscribe</button>
                                    
                                </form>
                            </div>
                        </div>
                     </div> <!-- row -->
                </div> <!-- subscribe area --> 

@endsection