@extends('layouts.exemple3')

@section('content')
<header class="header-area">

    <div id="home" class="header-hero bg_cover"
        style="background-image: url(assets/images/banner-bg.svg); height:100vh">
        <section class="skrollable u-clearfix u-image u-lightbox u-parallax u-shading u-section-13" id="carousel_b512" data-image-width="1920" data-image-height="1080">
            <div class="u-clearfix u-sheet u-sheet-1">
              <div class="u-container-style u-group u-shape-rectangle u-group-1"style="
              margin-top: -55px;
                " >
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-left u-custom-font u-font-roboto-slab u-text u-text-body-alt-color u-text-1">Carrez Conseil <br/> Meilleur Comparateur Assurance</h2>
                  <p class="u-align-left u-text u-text-body-alt-color u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Comparateur Assurance&nbsp;en ligne : Comparez et trouvez en quelques minutes les&nbsp;meilleures assurances santé<span style="font-weight: 700;">
                      <span style="font-weight: 400;">
                        <span style="font-weight: 700;"></span>
                      </span>
                    </span>, Automobile, Habitation et obsèques&nbsp;gratuitement !
                  </p>
                  <a href="{{URL::route('coordonnees')}}" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">Comparateur Sante</a>
                  <a href="{{URL::route('donnees_personnel')}}" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Comparateur auto</a>
                </div>
              </div>
              <div class="u-align-left u-border-1 u-border-white u-form u-white u-form-1" style="border-radius: 20px !important;" >
                <form action="{{route('assurancepage')}}"   method="post"  
                  style="padding: 10px; margin:auto" >
                  <h5 style="
                text-align: center;
                color: white;
                border-radius: 30px !important;
                ">Obtenez votre devis en ligne et gratuitement </h5>
                @csrf
                <div class="u-form-group u-form-name u-label-none">
                  <input type="text" placeholder=" entrer Votre Nom"  name="Nom" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-1" style="
                  margin-bottom: 1.5rem !important;
                  " required="">
                </div>
                <div class="u-form-email u-form-group u-label-none">
                  <input type="text" placeholder=" entrer Votre Prenom"  name="Prenom" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-2" style="
                  margin-bottom: 1.5rem !important;
                  " required="">
                </div>
                <div class="u-form-group u-label-none u-form-group-3">
                  <input type="text"  name="telephone" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-3" placeholder="entrer Votre Téléphone" style="
                  margin-bottom: 1.5rem !important;
                  " required="">
                </div>
                <div class="u-form-group u-label-none u-form-group-4">
                  <input type="text" placeholder="entrer Votre Email"  name="email" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-4" style="
                  margin-bottom: 1.5rem !important;
                  "  required="">
                </div>

                <div class="u-form-group u-label-none u-form-group-6">
                  <input type="text" placeholder="entrer Votre code Postal"  name="codepostale" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-6" style="
                  margin-bottom: 1.5rem !important;
                  ">
                </div>

                <div class="u-form-group u-form-select u-label-none u-form-group-5">
                  <div class="u-form-select-wrapper">
                    <select id="typeassurance" name="assurance" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-white u-input-5" style="
                    margin-bottom: 1.5rem !important;
                    ">
                      <option value="type">Type d'assurance</option>
                      <option value="auto" >Auto</option>
                      <option value="sante" >Santé</option>
                      <option value="habitat">Habitation</option>
                      <option value="deces">Décés</option>
                    </select>
                    <svg class="u-caret u-caret-svg u-text-grey-70" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                  </div>
                </div>
              
                <button type="submit" class="btn btn-lg" style="background: brown !important;color: white ;  width:95%;">DEMANDEZ UN DEVIS</button>
              </form>
              </div>
            </div>
          </section>

        <div id="particles-1" class="particles"><canvas class="particles-js-canvas-el" width="1898" height="1030"
                style="width: 100%; height: 100%;"></canvas></div>
    </div> <!-- header hero -->

</header>
        
    <section class="u-border-hover-palette-1-base u-clearfix u-custom-color-7 u-section-23" id="sec-2632">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-border-hover-grey-30 u-container-style u-grey-30 u-layout-cell u-left-cell u-shape-rectangle u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1"><img src="images/159832-b1d2d3c4.png" alt=""></span>
                  <h3 class="u-text u-text-body-color u-text-1">Appelez-no​us</h3>
                  <p class="u-text u-text-white u-text-2"><span class="u-icon"></span>&nbsp;standard: +33 5 19 79 97 67<br>auto: +33 5​​ 19​ 79 97 6​9<br>santé : +33 5 19 79 97 81
                  </p>
                </div>
              </div>
              <div class="u-align-center u-border-hover-palette-1-dark-2 u-container-style u-layout-cell u-palette-5-dark-1 u-shape-rectangle u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-3"><img src="images/711628-31b0e31b.png" alt=""></span>
                  <h3 class="u-text u-text-black u-text-3">Horaires de​ t​ravail</h3>
                  <p class="u-text u-text-body-alt-color u-text-4">Lundi- Vendredi : 9h00 -12h30 /14h00-18H30&nbsp;<br>Samedi : 9h-13h
                  </p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-5-dark-2 u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                <div class="u-container-layout u-valign-middle u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-4"><img src="images/1429487-064cd112.png" alt=""></span>
                  <h3 class="u-text u-text-black u-text-5">Rendez-vous</h3>
                  <p class="u-text u-text-6">Notre service de prise de rendez-vous en ligne est di​sponible 24 heures sur 24 et 7 jours sur 7</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="  u-clearfix u-section-33" id="sec-e756">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-palette-1-base u-text-1">Comment ça <span class="u-text-palette-4-base" style="font-weight: 700;">marche ?</span>
            </h2>
            <p class="u-text u-text-2">La solution d'assurance qui vous fait gagner du temps et de <span style="font-weight: 700;">
                <span style="font-weight: 400;">
                  <span style="font-weight: 700;">
                    <span style="font-weight: 400;">
                      <span style="font-weight: 700;">
                        <span style="font-weight: 400;">
                          <span style="font-weight: 700;"></span>
                        </span>
                      </span>
                    </span>
                  </span>
                </span>
              </span> ​l'argent
            </p>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-20 u-layout-cell-1">
                    <div class="u-container-layout"><span class="u-border-2 u-border-custom-color-5 u-file-icon u-icon u-icon-circle u-text-custom-color-5 u-icon-1"><img src="images/2822676-b92fd014.png" alt=""></span>
                      <h2 class="u-text u-text-palette-4-base u-text-3">Trouvez rapidement</h2>
                      <p class="u-text u-text-4">Répondez&nbsp; à quelques informations et choisissez les garanties indispensables pour vous. N​ous vous proposons les meilleures offres en fonction de votre profil !</p>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-20 u-layout-cell-2">
                    <div class="u-container-layout"><span class="u-border-2 u-border-custom-color-5 u-border-hover-palette-4-base u-file-icon u-icon u-icon-circle u-text-custom-color-5 u-icon-2"><img src="images/149213-f5674893.png" alt=""></span>
                      <h2 class="u-text u-text-palette-4-base u-text-5">comparez simplement</h2>
                      <p class="u-text u-text-6">Comparez facilement les prix, les garanties et les avis clients de chaque contrat pour choisir en toute transparence le contrat le plus adapté à votre besoin.<span class="u-text-palette-4-base">
                          <span style="font-weight: 700;">
                            <span style="font-weight: 400;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </span>
                        </span>
                      </p>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                    <div class="u-container-layout"><span class="u-border-2 u-border-custom-color-5 u-file-icon u-icon u-icon-circle u-text-custom-color-5 u-icon-3"><img src="images/1612636-f2b2577a.png" alt=""></span>
                      <h2 class="u-text u-text-palette-4-base u-text-7">recomparez en 1Clic</h2>
                      <p class="u-text u-text-8">Vous déménagez ou vous souhaitez simplement obtenir une meilleure offre ?Recomparez votre contrat en 1 clic à tout moment pour trouver la meilleure offre.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-align-center u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" data-image-width="850" data-image-height="567">
                    <div class="u-container-layout"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-dark-1 u-section-43" id="sec-8c47">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">Nos Engagements</h2>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xs u-container-style u-layout-cell u-left-cell u-size-10 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/615075-cd710a2b.png" alt=""></span>
                  <h3 class="u-text u-text-2">
                    <span style="font-weight: 700;">9 utilisateurs sur 10</span>&nbsp;nous recommandent<br>
                  </h3>
                </div>
              </div>
              <div class="u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-size-10 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-3"><span class="u-file-icon u-icon u-text-white u-icon-2"><img src="images/33308-7fff4411.png" alt=""></span>
                  <h3 class="u-align-center-lg u-align-center-xl u-text u-text-3">
                    <span style="font-weight: 700;">
                      <span style="font-weight: 400;">
                        <span style="font-weight: 700;">
                          <span style="font-weight: 400;"></span>
                        </span>
                      </span>
                    </span>9 millions&nbsp;<br>d'inte<span style="font-size: 1.25rem;"></span>rnautes&nbsp;nous font confiance<br>
                  </h3>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-10 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-text-white u-icon-3"><img src="images/149122-bcd0e86b.png" alt=""></span>
                  <h3 class="u-text u-text-4">Comparateur indépendant et impartial<br>
                    <br>
                    <br><i></i>
                  </h3>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-10 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-container-layout-5"><span class="u-file-icon u-icon u-text-white u-icon-4"><img src="images/149193-c2a24773.png" alt=""></span>
                  <h3 class="u-text u-text-5">100% gratuit et sans<span style="font-weight: 700;">
                      <span style="font-weight: 400;"></span>
                    </span> engagement
                  </h3>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-10 u-size-30-md u-layout-cell-5">
                <div class="u-container-layout u-container-layout-6"><span class="u-file-icon u-icon u-text-white u-icon-5"><img src="images/1836024-271bd520.png" alt=""></span>
                  <h3 class="u-text u-text-6">Protection De Vos Données Et De Votre Vie Privée</h3>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-10 u-size-30-md u-layout-cell-6">
                <div class="u-container-layout u-container-layout-7"><span class="u-file-icon u-icon u-text-white u-icon-6"><img src="images/9025138-41f947b7.png" alt=""></span>
                  <h3 class="u-text u-text-7">La Garantie Des Meilleurs Prix</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-53" id="sec-c98b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="" data-image-width="1200" data-image-height="800">
                    <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                      <h2 class="u-text u-text-1">Trouvez la meilleure assurance auto grâce à notre comparateur !</h2>
                      <p class="u-text u-text-2">Comparer les devis d’assurance automobile vous permet simplement de dépenser moins d’argent. Face au grand nombre d’options disponibles, il peut être difficile de distinguer les offres sur le marché. Tout dépendra de votre véhicule, du niveau de garantie choisi, etc.<span style="font-weight: 700;">
                          <span style="font-weight: 400;">
                            <span style="font-weight: 700;">
                              <span style="font-weight: 400;">
                                <span style="font-size: 1.25rem;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </span>
                            </span>
                          </span>
                        </span>
                      </p>
                      <a href="" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1">Comparateur auto</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <h2 class="u-text u-text-3">Comparez parmi le plus large panel d’assureurs de France et économisez jusqu’à 45% sur votre contrat d’assurance santé.</h2>
                      <p class="u-text u-text-4">Nous avons mis en place de nombreux partenariats avec des mutuelles santé pour vous offrir le choix le plus important possible. April, MGEN, MMA, Mutualia et bien d’autres encore. Comparez simplement les offres de complémentaire santé qu’elles proposent afin de bénéficier du meilleur rapport qualité/prix pour votre couverture.</p>
                      <a href="" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-custom-color-4 u-text-body-alt-color u-text-hover-custom-color-4 u-btn-2">comparateur sante</a>
                    </div>
                  </div>
                  <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2" src="" data-image-width="2560" data-image-height="1860">
                    <div class="u-container-layout u-valign-middle u-container-layout-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-63" id="sec-5901">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-palette-1-base u-text-1">Nos services</h2>
            <p class="u-text u-text-2">Notre comparateur assurance vous permet de comparer facilement les meilleures offres du marché des mutuelles et assurances santé en se basant sur plus de 30 critères.</p>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-white u-layout-cell-1">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-1" src="images/auto.jpg" data-image-width="960" data-image-height="563">
                  <h3 class="u-text u-text-palette-1-base u-text-3">Assurance au​to</h3>
                  <p class="u-text u-text-4">assurance auto est une assurance personnalisable pour votre voiture.&nbsp; Vous pouvez choisir les protections que vous voulez et décider du montant à payer&nbsp;</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-size-20-md u-white u-layout-cell-2">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-2" src="images/mutuelle-sant.jpg" data-image-width="672" data-image-height="357">
                  <h3 class="u-text u-text-palette-1-base u-text-5">assurance Santé</h3>
                  <p class="u-text u-text-6">assurance santé est une assurance pour la santé de votre famille. Elle peut couvrir les frais médicaux en complément ou en remplacement de l'assurance de base&nbsp;</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-white u-layout-cell-3">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-3" src="images/v2_50.png" data-image-width="800" data-image-height="500">
                  <h3 class="u-text u-text-palette-1-base u-text-7">assurance habitation</h3>
                  <p class="u-text u-text-8">assurance habitation protège votre maison ou appartement contre les risques liés à la propriété. Elle peut couvrir les dommages causés à la structure et les pertes financières en cas d'incendie</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-3 u-section-73" id="sec-4cf3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="206" data-image-height="206"></div>
                <p class="u-large-text u-text u-text-variant u-text-1"><i>Votre site m'a permis de recevoir plusieurs devis très rapidement, et de renégocier mon contrat, qui m'a fait économiser presque 100 euros par rapport à ce qui m'était réclamé.</i>
                </p>
                <h4 class="u-text u-text-default u-text-2"><b>MARIE CORINNE V</b>
                  <br>
                </h4>
                <h6 class="u-text u-text-default u-text-3">cliente de l'entreprise</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" data-image-width="206" data-image-height="206"></div>
                <p class="u-large-text u-text u-text-variant u-text-4">“Très bonne gestion par Mr SHELBY de mon dossier qui était très complexe et qui a su trouver un contrat correspondant à mes attentes. Très professionnel et réactif. Très bon contact également avec Mr ACKERMANN. Je conseille ce cabinet de courtage."&nbsp;<br>
                </p>
                <h4 class="u-text u-text-default u-text-5">R. Philips<br>
                </h4>
                <h6 class="u-text u-text-default u-text-6">client de l'entreprise</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-3">
                <div alt="" class="u-image u-image-circle u-image-3" data-image-width="1178" data-image-height="1080"></div>
                <p class="u-large-text u-text u-text-variant u-text-7">J'ai été très satisfait de l'assurance auto . Leur service clientèle était très professionnel et serviable tout au long du processus de souscription, et leurs tarifs étaient très compétitifs par rapport à d'autres compagnies d'assurance. Lorsque j'ai eu un accident, leur équipe d'assistance a été très réactive et a traité ma réclamation rapidement et efficacement</p>
                <h4 class="u-text u-text-default u-text-8"><b>Sarah CORINNE V</b>
                  <br>
                </h4>
                <h6 class="u-text u-text-default u-text-9">cliente de l'entreprise</h6>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-spacing-10 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-spacing-10 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
      <style data-mode="XXL">@media (max-width: 0px) {
   .u-section-73 {
    background-image: none;
  }
  .u-section-73 .u-sheet-1 {
    min-height: 579px;
  }
  .u-section-73 .u-slider-1 {
    min-height: 480px;
    width: 763px;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-73 .u-carousel-indicators-1 {
    position: absolute;
    bottom: 10px;
    width: auto;
    height: auto;
  }
  .u-section-73 .u-container-layout-1 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-section-73 .u-image-1 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-73 .u-text-1 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-73 .u-text-2 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-73 .u-text-3 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-73 .u-container-layout-2 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-section-73 .u-image-2 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-73 .u-text-4 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-73 .u-text-5 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-73 .u-text-6 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-73 .u-carousel-control-1 {
    width: 43px;
    height: 43px;
    background-image: none;
  }
  .u-section-73 .u-carousel-control-2 {
    width: 43px;
    height: 43px;
    background-image: none;
    left: auto;
    position: absolute;
    right: 0;
  }
}</style>
    </section>
    <section class="u-align-center u-clearfix u-section-83" id="carousel_d93b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-expanded-width u-image u-image-default u-image-1" src="images/1153892_medium2000.png" alt="" data-image-width="866" data-image-height="864">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <div class="u-accordion u-expanded-width u-spacing-2 u-accordion-1">
                    <div class="u-accordion-item u-accordion-item-1">
                      <a class="active u-accordion-link u-active-grey-5 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-1" id="link-accordion-7c0e" aria-controls="accordion-7c0e" aria-selected="true">
                        <span class="u-accordion-link-text">Quels sont les différents types d’assurance ?</span><span class="u-accordion-link-icon u-icon u-icon-rounded u-palette-1-base u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-347e"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-347e"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                      </a>
                      <div class="u-accordion-active u-accordion-pane u-align-left u-container-style u-white u-accordion-pane-1" id="accordion-7c0e" aria-labelledby="link-accordion-7c0e">
                        <div class="u-container-layout u-container-layout-3">
                          <p class="u-text u-text-1">Il est possible de souscrire 4 assurances, considérées comme obligatoires en France : l’assurance auto/moto, habitation, responsabilité civile (rattachée la plupart du temps dans un contrat habitation) et la mutuelle santé. Chaque groupe d’assurances dispose de plusieurs types d’assurance. Il vous est donc possible de souscrire une assurance moto et vous couvrir contre un dégât des eaux ou un cambriolage par exemple.</p>
                        </div>
                      </div>
                    </div>
                    <div class="u-accordion-item u-accordion-item-2">
                      <a class="u-accordion-link u-active-grey-5 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-2" id="link-accordion-05cb" aria-controls="accordion-05cb" aria-selected="false">
                        <span class="u-accordion-link-text">Quelle est la meilleure assurance&nbsp; ?</span><span class="u-accordion-link-icon u-icon u-icon-rounded u-palette-1-base u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-ae03"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-ae03"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                      </a>
                      <div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-05cb" aria-labelledby="link-accordion-05cb">
                        <div class="u-container-layout u-valign-top u-container-layout-4">
                          <ul class="u-custom-list u-text u-text-2">
                            <li>
                              <div class="u-list-icon">
                                <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                              </div>
                            </li>
                          </ul>
                          <p class="u-text u-text-3">Celle qui répondra à l’ensemble de vos critères ! Il n’est pas évident de trouver une réponse à une telle question tant les besoins peuvent différer d’un assuré à un autre. Nous pouvons tout de même vous conseiller de souscrire un contrat chez un assureur proposant une couverture adapté à votre profil. Vous pourrez, de ce fait, profiter d’une couverture adaptée, à moindres frais.</p>
                        </div>
                      </div>
                    </div>
                    <div class="u-accordion-item u-accordion-item-3">
                      <a class="u-accordion-link u-active-grey-5 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-3" id="link-accordion-a6bb" aria-controls="accordion-a6bb" aria-selected="false">
                        <span class="u-accordion-link-text">Quels sont les éléments essentiels d'un contrat d'assurance ?</span><span class="u-accordion-link-icon u-icon u-icon-rounded u-palette-1-base u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-a4a8"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-a4a8"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                      </a>
                      <div class="u-accordion-pane u-container-style u-white u-accordion-pane-3" id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
                        <div class="u-container-layout u-valign-top u-container-layout-5">
                          <ul class="u-custom-list u-text u-text-4">
                            <li>
                              <div class="u-list-icon">
                                <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                              </div>
                            </li>
                            <li>
                              <div class="u-list-icon">
                                <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                              </div>
                            </li>
                            <li>
                              <div class="u-list-icon">
                                <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                              </div>
                            </li>
                            <li>
                              <div class="u-list-icon">
                                <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                              </div>On pensera aux :Montant de la prime ;<br>Dommages pris en compte, autrement dit la formule choisie ;<br>Garanties complémentaires, permettant d’être couvert en cas de sinistre caractérisé (vol, vandalisme, incendie, catastrophe naturelle…).<br>C’est notamment pour cette raison que la pertinence des réponses fournies par les utilisateurs du comparateur d’assurance devisassurancesenligne.fr permettent d’affiner le résultat du comparatif !<br>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-section-93" id="sec-59d1">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>        


<!--====== TESTIMONIAL PART ENDS ======-->

<!--====== BLOG PART START ======-->


<footer id="footer" class="footer-area pt-120">
    <div class="container">
        <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-6">
                    <div class="subscribe-content mt-45">
                        <h2 class="subscribe-title">Inscrivez-vous à la newsletter
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form mt-50">
                        <form id="subscribe" method="post">
                            @csrf
                            <input type="text" name="email" id="email" placeholder=" Email" required="">
                            <button class="main-btn" type="submit">Subscribe</button>

                        </form>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- subscribe area -->



        <script src="{{URL::asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"
            integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


          

        <script>
            $('#subscribe').on('submit', function (e) {
                e.preventDefault();
                var email = $("input[name=email]").val();
                $.ajax({
                    type: 'POST',
                    url: '/home',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {
                        email: email
                    },
                    success: function (response) {

                        window.location.href = "/subscribe";
                    }


                });
            });
        </script>

    

     

          
        @endsection