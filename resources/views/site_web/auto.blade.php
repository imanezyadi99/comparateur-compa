@extends('layouts.exemple3')

@section('content')
<header class="header-area">
    
    <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
        <section class="u-align-left u-clearfix u-image u-section-1" src="" id="sec-2639" data-image-width="900" data-image-height="600">
            <div class="u-clearfix u-sheet u-sheet-1">
              <div class="u-align-left u-container-style u-group u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-text u-text-default u-text-palette-1-base u-title u-text-1">Vous Cherchez Une Assurance À La Carte ? </h1>
                  <p class="u-large-text u-text u-text-variant u-text-2"> Trouver une assurance auto pas chère peut sembler impossible, mais au contraire, avec quelques recherches,c'est tout  <span style="font-weight: 400;">
                      <span style="font-weight: 700;"></span>
                    </span> à fait envisageable. Chez Comparateur Assurance, nous avons pour mission de trouver le contrat accessible pour chacun !<span style="font-weight: 700;">
                      <span style="font-weight: 400;"></span>
                    </span>
                  </p>
                  <a href="{{URL::route('donnees_personnel')}}" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Comparateur auto</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-group u-palette-1-dark-1 u-radius-30 u-shape-round u-group-2">
                <div class="u-align-left  u-form u-white u-form-1" style="border-radius: 20px !important;" >
               
                        <form action="{{route('indexpage')}}"   method="post"  
                        style="padding: 20px; margin:auto" >
                        <h5 style="
                        text-align: center;
                        color: white;
                        border-radius: 30px !important;
                        ">Obtenez votre devis en ligne et gratuitement </h5>
                          @csrf
                          <select id="inputcivilite"  class="form-control mb-2" data-no-selected="Civilité *" name="civilite"
                            required="required" class="multiple" aria-required="true"  style="
                            margin-bottom: 1.5rem !important;
                             " >
                            <option value="">Civilité *</option>
                            <option value="Mme">Mme</option>
                            <option value="Mlle">Mlle</option>
                            <option value="M.">M.</option>
                          </select>
                         
                          <input placeholder=" Nom *" type="text" name="nom"  class="form-control mb-2" required="required"
                            aria-required="true" style="
                            margin-bottom: 1.5rem !important;
                              ">
                         
                          <input placeholder=" Prénom *" type="text"  class="form-control mb-2" name="prenom"
                            required="required" aria-required="true" style="
                            margin-bottom: 1.5rem !important;
                             ">
                      
                          <select data-no-selected="Ville *" name="ville"  class="form-control mb-2" required="required"
                            aria-required="true"  style="
                            margin-bottom: 1.5rem !important;
                             ">
                            <option value="">Ville *</option>
                            <option value="Casablanca">Casablanca</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Fès">Fès</option>
                            <option value="Meknès">Meknès</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Tanger">Tanger</option>
                            <option value="Tétouan">Tétouan</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Al Hoceïma">Al Hoceïma</option>
                            <option value="Assilah">Assilah</option>
                            <option value="Azemmour">Azemmour</option>
                            <option value="Azrou">Azrou</option>
                            <option value="Ben Slimane">Ben Slimane</option>
                            <option value="Berkane">Berkane</option>
                            <option value="Berrechid">Berrechid</option>
                            <option value="Bouznika">Bouznika</option>
                            <option value="Chefchaouen">Chefchaouen</option>
                            <option value="El Jadida">El Jadida</option>
                            <option value="Errachidia">Errachidia</option>
                            <option value="Essaouira">Essaouira</option>
                            <option value="Ifrane">Ifrane</option>
                            <option value="Kénitra">Kénitra</option>
                            <option value="Khémisset">Khémisset</option>
                            <option value="Khénifra">Khénifra</option>
                            <option value="Khouribga">Khouribga</option>
                            <option value="Ksar El Kébir">Ksar El Kébir</option>
                            <option value="Laayoune">Laayoune</option>
                            <option value="Larache">Larache</option>
                            <option value="Nador">Nador</option>
                            <option value="Oujda">Oujda</option>
                            <option value="Salé">Salé</option>
                            <option value="Skhirate">Skhirate</option>
                            <option value="Taza">Taza</option>
                            <option value="Témara">Témara</option>
                          </select>
                   

                        
                          <input type="email"  class="form-control mb-2" name="email" value="" required="required"
                            placeholder=" Adresse Email *" aria-required="true" style="
                            margin-bottom: 1.5rem !important;
                              ">
                        

                         
                          <input pattern="[0-9]{9,10}" type="number"  class="form-control mb-2" name="telephone"
                            placeholder=" Exemple de téléphone: +212662870105" value="" required="required" aria-required="true" style="
                            margin-bottom: 1.5rem !important;
                            ">
                          

                        
                          <select id="rmaclient_select" data-no-selected="Etes-vous client de RMA ?"  class="form-control mb-2"
                            name="disposition_vehicule" required="required" aria-required="true" style="
                            margin-bottom: 1.5rem !important;
                            ">
                            <option value="">Disposez-vous d'un véhicule ? </option>
                            <option value="Oui">OUI</option>
                            <option value="Non">NON</option>
                          </select>
                      

                          <br />
                      
                    <button type="submit" class="btn btn-lg" style="background: #0f306f !important;color: white ; margin-top:-50px; width:95%;">DEMANDEZ UN DEVIS</button>
                        </form>
                    


                </div>
              </div>
          </section>


        </div> <!-- container -->
        <div id="particles-1" class="particles"><canvas class="particles-js-canvas-el" width="1898" height="1030" style="width: 100%; height: 100%;"></canvas></div>
    </div> <!-- header hero -->
</header>
<section class="u-align-center u-clearfix u-color-scheme-custom-color-scheme-1 u-color-style-multicolor-1 u-palette-1-base u-section-2" id="sec-8141">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-custom-color-4 u-list-item u-repeater-item u-shape-rectangle u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">
            <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-icon-circle u-text-custom-color-2 u-white u-icon-1"><img src="images/829401-ca734280.png" alt=""></span>
              <h1 class="u-text u-text-default u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">+500</h1>
              <p class="u-text u-text-default u-text-2">DEVIS ENVOYES</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-color-4 u-list-item u-repeater-item u-shape-rectangle u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-text-custom-color-2 u-white u-icon-2"><img src="images/791324-c0d86801.png" alt=""></span>
              <h1 class="u-text u-text-default u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">+200</h1>
              <p class="u-text u-text-default u-text-4">CONTRAT D'ASSURANCE / MOIS</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-color-4 u-list-item u-repeater-item u-shape-rectangle u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-text-custom-color-2 u-white u-icon-3"><img src="images/1786971-89daca5f.png" alt=""></span>
              <h1 class="u-text u-text-default u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">3k</h1>
              <p class="u-text u-text-default u-text-6">&nbsp; CLIENTS SATISFAITS PAR NOS SERVICES</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-left u-clearfix u-grey-5 u-section-3" id="carousel_c7cc">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h6 class="u-custom-font u-font-montserrat u-text u-text-palette-1-base u-text-1">Pourquoi Utiliser Un Comparateur D'assurance ?<br>
        <br>
      </h6>
      <p class="u-align-center u-text u-text-palette-2-base u-text-2">un comparateur d'assurance permet de trouver l'offre qui convient le mieux à ses besoins et à son budget</p>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">Transparence</h5><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1"><img src="images/9756941-b7aa0b00.png" alt=""></span>
              <p class="u-text u-text-grey-40 u-text-4">Frais pour incidents Et coûts de gestion clairement détaillés</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-5">Simplicité</h5><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-2"><img src="images/907717-6d9cbf20.png" alt=""></span>
              <p class="u-text u-text-grey-40 u-text-6">Faites Un Devis En Quelques Clics Sans Engagement<br>
              </p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7">Sécurité</h5><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-3"><img src="images/952797-04ba7515.png" alt=""></span>
              <p class="u-text u-text-grey-40 u-text-8">Conseillers Disponibles Jusqu'à 19h. Paiement Sécurisé</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-4" id="carousel_131f">
    <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
      <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-1">le processus de devis d'assurance </h2>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top-md u-container-layout-1">
              <div class="u-image u-image-circle u-image-1" alt="" data-image-width="720" data-image-height="1080"></div>
              <div class="u-align-center u-container-style u-grey-10 u-group u-shape-circle u-group-1">
                <div class="u-container-layout u-valign-middle">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-palette-1-base u-text-2">01</h3>
                </div>
              </div>
              <p class="u-text u-text-grey-40 u-text-3">Remplissez les informations de votre vrai nom et prénom, date de naissance, et le code postal de votre ville</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top-md u-container-layout-3">
              <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1000" data-image-height="1500"></div>
              <div class="u-align-center u-container-style u-grey-10 u-group u-shape-circle u-group-2">
                <div class="u-container-layout u-valign-middle">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-4">02</h3>
                </div>
              </div>
              <p class="u-text u-text-grey-40 u-text-5">Lorsque vous envoyez votre demande, elle sera traitée par nos agents pour choisir les meilleures offres qui vous conviennent</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top-md u-container-layout-5">
              <div class="u-image u-image-circle u-image-3" alt="" data-image-width="1620" data-image-height="1080"></div>
              <div class="u-align-center u-container-style u-grey-10 u-group u-shape-circle u-group-3">
                <div class="u-container-layout u-valign-middle">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-6">03</h3>
                </div>
              </div>
              <p class="u-text u-text-grey-40 u-text-7">Vous recevrez un appel de notre part vous proposant les meilleures offres qui ont été sélectionnées pour vous</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-5" id="carousel_2bc3">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">faq</h6>
      <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-2">Les questions fréquentes sur l'assurance auto</h2>
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-accordion u-expanded-width u-faq u-spacing-20 u-accordion-1">
                  <div class="u-accordion-item">
                    <a class="active u-accordion-link u-border-1 u-border-grey-25 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-1" id="link-" aria-controls="" aria-selected="true">
                      <span class="u-accordion-link-text">Quelles sont les garanties obligatoires en assurance auto ?</span><span class="u-accordion-link-icon u-file-icon u-icon u-icon-1"><img src="images/254434.png" alt=""></span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-accordion-pane-1" aria-labelledby="link-">
                      <div class="u-container-layout u-container-layout-2">
                        <div class="fr-view u-clearfix u-rich-text u-text u-text-3">
                          <p>Les garanties obligatoires en assurance auto sont la responsabilité civile automobile, la garantie des dommages corporels du conducteur, la garantie des défense et recours. D'autres garanties sont également recommandées en fonction des besoins de chaque conducteur, telles que la garantie incendie, la garantie vol ou la garantie bris de glace.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-border-1 u-border-grey-25 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-2" id="link-" aria-controls="" aria-selected="false">
                      <span class="u-accordion-link-text"> Comment fonctionne la franchise en cas de sinistre auto ?</span><span class="u-accordion-link-icon u-file-icon u-icon u-icon-2"><img src="images/254434.png" alt=""></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-2" aria-labelledby="link-">
                      <div class="u-container-layout u-container-layout-3">
                        <div class="fr-view u-clearfix u-rich-text u-text u-text-4">
                          <p>La franchise est une somme qui reste à la charge de l'assuré en cas de sinistre. Elle peut être fixe ou proportionnelle au montant des dommages. Elle est déduite de l'indemnisation versée par l'assurance.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-border-1 u-border-grey-25 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-3" id="link-" aria-controls="" aria-selected="false">
                      <span class="u-accordion-link-text">Qu'est-ce que la responsabilité civile en assurance auto ?</span><span class="u-accordion-link-icon u-file-icon u-icon u-icon-3"><img src="images/254434.png" alt=""></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-3" aria-labelledby="link-">
                      <div class="u-container-layout u-container-layout-4">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                          <p>La responsabilité civile est une garantie obligatoire en assurance auto. Elle couvre les dommages causés à un tiers par le conducteur assuré lors d'un accident de la route.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
              <div class="u-container-layout u-container-layout-5">
                <div class="u-accordion u-expanded-width u-faq u-spacing-20 u-accordion-2">
                  <div class="u-accordion-item">
                    <a class="active u-accordion-link u-border-1 u-border-grey-25 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-4" id="link-" aria-controls="" aria-selected="true">
                      <span class="u-accordion-link-text">Puis-je résilier mon contrat d'assurance auto à tout moment ?</span><span class="u-accordion-link-icon u-file-icon u-icon u-icon-4"><img src="images/254434.png" alt=""></span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-accordion-pane-4" aria-labelledby="link-">
                      <div class="u-container-layout u-container-layout-6">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                          <p>Selon la loi, un contrat d'assurance auto peut être résilié à l'échéance annuelle ou à tout moment après la première année de souscription, sous certaines conditions.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-border-1 u-border-grey-25 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-5" id="link-" aria-controls="" aria-selected="false">
                      <span class="u-accordion-link-text">Comment est calculé le prix de mon assurance auto ?</span><span class="u-accordion-link-icon u-file-icon u-icon u-icon-5"><img src="images/254434.png" alt=""></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-5" aria-labelledby="link-">
                      <div class="u-container-layout u-container-layout-7">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                          <p>Le prix de l'assurance auto dépend de nombreux facteurs tels que le profil du conducteur, le type de véhicule assuré, le niveau de garanties souscrit, le lieu de stationnement du véhicule, le nombre de kilomètres parcourus, etc.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-border-1 u-border-grey-25 u-button-style u-text-active-palette-1-base u-text-body-color u-accordion-link-6" id="link-" aria-controls="" aria-selected="false">
                      <span class="u-accordion-link-text">Comment fonctionne l'assurance tous risques ?</span><span class="u-accordion-link-icon u-file-icon u-icon u-icon-6"><img src="images/254434.png" alt=""></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-6" aria-labelledby="link-">
                      <div class="u-container-layout u-container-layout-8">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                          <p id="isPasted">L'assurance tous risques est une formule d'assurance auto qui couvre tous les dommages subis par le véhicule assuré, quels que soient les responsables de l'accident.</p>
                          <p>
                            <br>
                          </p>
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
    </div>
  </section>
  <section class="u-clearfix u-palette-1-base u-section-6" id="carousel_82bc">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-custom-color-7 u-layout-cell u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-custom-font u-font-montserrat u-text u-text-1">Comment Souscrire Votre Assurance En Ligne ?</h2>
                <h5 class="u-custom-font u-font-montserrat u-text u-text-2">Simple et rapide, l’assurance en ligne Comparateur Assurance vous permet d’être couvert en quelques clics. Aucun déplacement n’est nécessaire, tout se fait à distance !<br>
                  <br>
                  <br>
                  <br>
                  <br>
                </h5>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
              <div class="u-container-layout u-container-layout-2">
                <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">Réalisez Votre Simulation<i></i>
                </h5><span class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-text-white u-icon-1"><img src="images/5115433-afe81e39.png" alt=""></span>
                <p class="u-text u-text-4">Complétez notre formulaire de simulation d’assurance en ligne et choisissez les garanties qui répondent le mieux à vos besoins, pour obtenir votre tarif en moins de 2 minutes.<b></b>
                  <br>
                  <span style="font-size: 1.125rem;"></span>
                  <br>
                  <br>
                </p>
                <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-5">Souscrivez En Ligne Ou En Agence<i></i>
                </h5><span class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-text-white u-icon-2"><img src="images/825636-0747ff8f.png" alt=""></span>
                <p class="u-text u-text-6">Validez votre devis et réglez votre souscription en ligne (de façon totalement sécurisée) ou par chèque à la livraison de votre contrat, ou encore optez pour une souscription en agence.<b></b>
                  <br>
                  <br>
                  <br>
                </p>
                <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7">Faites-Vous Livrer Votre Attestation<i></i>
                </h5><span class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-text-white u-icon-3"><img src="images/9417991-9d2474d0.png" alt=""></span>
                <p class="u-text u-text-8">Une fois le paiement effectué, vous êtes assurés ! Recevez instantanément une copie de votre attestation d’assurance,qui vous sera également livrée àl’adresse que vous aurez indiquée.<b></b>
                  <br>
                  <br>
                  <br>
                </p><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-4"><img src="images/126486-df0921a9.png" alt=""></span>
                <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-9">Accédez À Votre Espace Client<i></i>
                </h5>
                <p class="u-text u-text-10">Inscrivez-vous sur l’espace client ComparateurAssurance pour consulter tous les détails de votre contrat et accéder à de nombreux services.<b></b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-7" id="carousel_8b12">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div class="u-align-center u-container-style u-group u-palette-1-base u-shape-circle u-group-1">
                <div class="u-container-layout u-valign-middle">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-1">01</h3>
                </div>
              </div>
              <p class="u-align-center u-text u-text-grey-40 u-text-2">« Votre site m'a permis de recevoir plusieurs devis très rapidement, et de renégocier mon contrat, qui m'a fait économiser presque 100 euros par rapport à ce qui m'était réclamé. »<b></b>
              </p>
              <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1000" data-image-height="1500"></div>
              <h6 class="u-align-center u-custom-font u-font-montserrat u-text u-text-3">Josh Larson</h6>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-grey-5 u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <div class="u-align-center u-container-style u-group u-palette-1-base u-shape-circle u-group-2">
                <div class="u-container-layout u-valign-middle">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-4">02</h3>
                </div>
              </div>
              <p class="u-align-center u-text u-text-grey-40 u-text-5">«Bon outil de comparaison d'assurance. J'ai pu mettre en concurrence mon assurance auto actuelle avec des propositions plus adaptées à ma situation. »
              </p>
              <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1620" data-image-height="1080"></div>
              <h6 class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">Anna Parson</h6>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <div class="u-align-center u-container-style u-group u-palette-1-base u-shape-circle u-group-3">
                <div class="u-container-layout u-valign-middle">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7">03</h3>
                </div>
              </div>
              <p class="u-align-center u-text u-text-grey-40 u-text-8">« Site très fiable qui nous permet de comparer les tarifs des différentes compagnies d'assurance et de trouver la meilleure offre au meilleur prix »<b></b>
              </p>
              <div class="u-image u-image-circle u-image-3" alt="" data-image-width="1441" data-image-height="1080"></div>
              <h6 class="u-align-center u-custom-font u-font-montserrat u-text u-text-9">Nick Hudson</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-image u-section-8" id="carousel_26e5" data-image-width="1620" data-image-height="1080">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
              <h3 class="u-text u-text-1">Comment obtenir des devis d'assurances gratuitement en quelques clics?</h3>
              <p class="u-text u-text-2">Une fois le formulaire rempli avec vos informations, vous avez accès à un classement des assurances par ordre de prix. Il suffit ensuite de sélectionner un ou plusieurs assureurs de la liste pour ensuite recevoir les devis d'assurances auto, moto, santé ou encore habitation les moins chers.&nbsp;<br>
                <br><i></i>
              </p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
              <h3 class="u-text u-text-3">Comment Comparer Rapidement Les Tarifs Et Garanties De Plusieurs Contrats D'assurances ?</h3>
              <p class="u-text u-text-4">En seulement quelques minutes, quel que soit le produit dont vous avez besoin, notre comparateur d'assurances vous permet d'accéder à un panel d'assurances du marché.<br>
                <br><i></i>
              </p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
              <h3 class="u-text u-text-5">Comment Obtenir Une Assurance Moins Chère ?</h3>
              <p class="u-text u-text-6">Faire une&nbsp;<b>
                  <span style="font-weight: 400;">comparaison </span>
                  <span style="font-weight: 400;">d'assurances</span>
                  <span style="font-weight: 400;"></span></b>&nbsp;est la manière la plus simple et la plus sûre de ne pas se tromper d'assurance et faire de vraies économies ! Le comparateur d'assurances classe les assurances correspondant à vos besoins par tarif, du moins cher au plus cher, ce qui permet de comparer plus facilement les contrats aux garanties équivalentes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-grey-5 u-section-9" id="carousel_0c27">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
              <div class="u-container-layout u-container-layout-1">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/pic11.jpg" alt="" data-image-width="480" data-image-height="320">
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-shape-rectangle u-size-40 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-direction="">
              <div class="u-container-layout u-valign-middle-xl u-container-layout-2">
                <h2 class="u-custom-font u-font-montserrat u-text u-text-palette-1-base u-text-1">Pourquoi Utiliser Un Comparateur D'assurances En Ligne ?</h2>
                <p class="u-text u-text-2">Certains produits d'assurances sont obligatoires (l'assurance automobile par exemple), d'autres indispensables (l'assurance santé), ou encore conseillés (comme les assurances affinitaires pour téléphone). Quel que soit le type d'assurance, les offres sont très nombreuses sur le marché, et se distinguent toutes par des niveaux de garanties variés et différents tarifs.Un simulateur d'assurances vous permet dans un premier temps de faire le point sur vos besoins en fonction de votre situation personnelle et professionnelle et tient compte de votre historique d'assuré afin de vous proposer les contrats d'assurances les plus adaptés.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-10" id="carousel_885c">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-group u-group-1">
        <div class="u-container-layout">
          <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1000" data-image-height="1500"></div><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-spacing-26 u-text-white u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="images/2934394-db5cebaf.png" alt=""></span>
        </div>
      </div>
      <h4 class="u-custom-font u-font-montserrat u-text u-text-1">Nous sommes conscients que vous menez une vie bien remplie, c'est pourquoi nous vous avons facilité la tâche de déposer votre véhicule 24h/24 et 7j/7.​ Appelez-Nous<font color="#53627f"><b>&nbsp;+33 519 79 97 67</b>
        </font>
      </h4>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-palette-1-base u-section-12" id="carousel_a769">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"> Contact<span style="font-size: 2.25rem;"></span>
      </h2>
      <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
          <div class="u-form u-form-1">
            <form action="{{route('contactenvoyer')}}"  method="post"  style="padding: 10px;">
              @csrf
              <div class="u-form-group u-form-name">
                <label for="name-61fc" class="u-label">Nom</label>
                <input type="text" placeholder="votre nom"  name="nom" class="u-border-grey-10 u-grey-10 u-input u-input-rectangle" required="">
              </div>
              <div class="u-form-group u-form-phone u-form-group-2">
                <label for="phone-0bf6" class="u-label">Phone</label>
                <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder=" votre Téléphone (e.g. 0662870206)"  name="phone" class="u-border-grey-10 u-grey-10 u-input u-input-rectangle" required="">
              </div>
              <div class="u-form-group u-form-message">
                <label for="message-61fc" class="u-label">Message</label>
                <textarea placeholder="votre message" rows="4" cols="50"  name="message" class="u-border-grey-10 u-grey-10 u-input u-input-rectangle" required=""></textarea>
              </div>
             <button type="submit"  class="btn btn-lg" style="background: #4f4f51 !important;color: white ;  width:95%;" > Envoyer </button>             
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


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
                        <form id="subscribe" method="post" >
                        @csrf
                            <input type="text" name="email" id="email"  placeholder=" Email" required="">
                            <button class="main-btn"  type="submit">Subscribe</button>
                            
                        </form>
                    </div>
                </div>
             </div> <!-- row -->
        </div> <!-- subscribe area -->


		<script src="{{URL::asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
		   <script>
			   $('#subscribe').on('submit',function(e){
					  e.preventDefault();
					  var email=$("input[name=email]").val();
					  $.ajax({
						  type:'POST',
						  url:'/auto',
						  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						  data:{
							  email:email
						  },
						  success:function(response){
		   
							   window.location.href= "/subscribe";
						  }
						
					   
					  });
				  });
			  
			  
			  
			  
			  </script>
     
		   @endsection
		   

        