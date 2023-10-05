@extends('layouts.exemple3')

@section('content')
<header class="header-area">
    
    <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
		<section class="u-clearfix u-image u-section-11" id="carousel_b390" data-image-width="1236" data-image-height="824">
			<div class="u-clearfix u-sheet u-sheet-1">
				<div class="u-align-left u-container-style u-group u-white u-group-1">
				  <div class="u-container-layout u-container-layout-1">
					<h1 class="u-text u-text-default u-text-palette-1-base u-title u-text-1">Vous cherchez une assurance Sante?  </h1>
					<p class="u-large-text u-text u-text-variant u-text-2"> Les dépenses de santé peuvent peser lourd dans le budget d'un ménage et bien souvent, ces dépenses sont obligatoires.<span style="font-weight: 400;">
						<span style="font-weight: 700;"></span>
						<span style="font-weight: 400;"></span>
					  </span>
					</p>
					<a href="{{URL::route('donnees_personnel')}}" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Comparateur sante</a>
				  </div>
				</div>
				<div class="u-align-center u-container-style u-group u-palette-1-dark-1 u-radius-30 u-shape-round u-group-2">
					<div class="u-align-left  u-form u-white u-form-1" style="border-radius: 20px !important;margin:auto " >
						<form action="{{route('santepage')}}"  method="post"  style="padding: 20px;"  >

							<h5 style="
							text-align: center;
							color: white;
							border-radius: 30px !important;
							">Obtenez votre devis en ligne et gratuitement </h5>

							@csrf

							<div class="u-form-group u-form-name u-label-none">
							   <input type="text" name="name" placeholder="Entrez votre nom" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-1" 
							   style="
							   margin-bottom: 1.5rem !important;
								 "  required=""> 
							</div>


							<div class="u-form-group u-form-name u-label-none">
							   <input type="email" name="email" placeholder="Entrez votre email" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-1" style="
							   margin-bottom: 1.5rem !important;
								 " required="">
							</div>

							<div class="u-form-group u-form-select u-label-none u-form-group-5">
							   <select name="mutuelle" id="mutuellee"  class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-1" style="
							   margin-bottom: 1.5rem !important;
								 " required="required" aria-required="true">
											<option value="Type l'assurance">Type l'assurance</option>
											<option value="Mutuelle Retraite">Mutuelle Retraite</option>
											<option value="Mutuelle Familiale">Mutuelle Familiale</option>
											<option value="Mutuelle TNS">Mutuelle TNS</option>
											<option value="Mutuelle étudiante">Mutuelle étudiante</option>
											<option value="Mutuelle Entreprise">Mutuelle Entreprise</option>
									</select>

							</div>		
		
							<div class="u-form-group u-form-name u-label-none">			
							   <input type="text" name="telephone" placeholder="Entrez votre numéro téléphone" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-1" style="
							   margin-bottom: 1.5rem !important;
								 "  required=""> 
										</div>


										<div class="u-form-group u-form-name u-label-none">
							   <textarea name="message" placeholder="Entrez votre message" class="u-border-3 u-border-grey-25 u-border-hover-grey-70 u-input u-input-rectangle u-radius-7 u-text-grey-70 u-input-1"  style="
							   margin-bottom: 1.5rem !important;
								 "  ></textarea>
										</div>
				
							   <button type="submit"  class="btn btn-lg" style="background: #4f4f51 !important;color: white ;  width:95%;" >Demander Votre Devis</button>
							</form>
					</div>
				</div>
		  </section>

        <div id="particles-1" class="particles"><canvas class="particles-js-canvas-el" width="1898" height="1030" style="width: 100%; height: 100%;"></canvas></div>
    </div> <!-- header hero -->
</header>
<section class="u-align-center u-clearfix u-white u-section-21" id="carousel_c9f4">
	<div class="u-clearfix u-sheet u-sheet-1">
	  <div class="u-expanded-width u-list u-list-1">
		<div class="u-repeater u-repeater-1">
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-1">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/asaf-afps.png" alt="" data-image-width="500" data-image-height="200">
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-2">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/aviva.png" alt="" data-image-width="1000" data-image-height="400">
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-3">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="images/axa.png" alt="" data-image-width="500" data-image-height="200">
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-4">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4" src="images/entoria.png" alt="" data-image-width="500" data-image-height="200">
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-5">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-5" src="images/generali.png" alt="" data-image-width="500" data-image-height="200">
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-6">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-6" src="images/logo-alptis1.png" alt="" data-image-width="130" data-image-height="59">
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item">
			<div class="u-container-layout u-similar-container u-container-layout-7">
			  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-7" src="images/neoliane1.png" alt="" data-image-width="148" data-image-height="59">
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="u-align-center u-clearfix u-section-31" id="sec-bd35">
	<div class="u-clearfix u-sheet u-sheet-1">
	  <h1 class="u-text u-text-custom-color-4 u-text-1">3 bonnes raisons&nbsp;de choisir Comparateur Mutuelle&nbsp; Santé</h1>
	  <div class="u-expanded-width u-list u-list-1">
		<div class="u-repeater u-repeater-1">
		  <div class="u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-shape-rectangle u-list-item-1">
			<div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/719675-ab8d22aa.png" alt=""></span>
			  <div class="u-container-style u-group u-group-1">
				<div class="u-container-layout u-container-layout-2">
				  <h5 class="u-text u-text-2">Un accompagnement personnalisé</h5>
				  <p class="u-text u-text-3">pour chaque demande de devis</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="u-container-style u-custom-item u-list-item u-palette-2-base u-repeater-item u-list-item-2">
			<div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-white u-icon-2"><img src="images/3820107-fbeedfd4.png" alt=""></span>
			  <div class="u-container-style u-group u-video-cover u-group-2">
				<div class="u-container-layout u-container-layout-4">
				  <h5 class="u-text u-text-4">Un interlocateur unique</h5>
				  <p class="u-text u-text-default u-text-5">dans tout le processus de souscription</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="u-container-style u-custom-item u-list-item u-palette-3-base u-radius-20 u-repeater-item u-shape-round u-list-item-3">
			<div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-text-white u-icon-3"><img src="images/1152912-89940a97.png" alt=""></span>
			  <div class="u-container-style u-group u-video-cover u-group-3">
				<div class="u-container-layout u-container-layout-6">
				  <h5 class="u-text u-text-6">Des produits récompensés</h5>
				  <p class="u-text u-text-default u-text-7">par le label excellence 2022</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="u-align-center u-clearfix u-valign-middle u-section-41" id="carousel_7648">
	<div class="u-container-align-center u-container-style u-expanded-width u-group u-image u-shading u-image-1" data-image-width="1254" data-image-height="836">
	  <div class="u-container-layout u-valign-top u-container-layout-1">
		<h2 class="u-align-center u-text u-text-default u-text-1">Nos Services</h2>
	  </div>
	</div>
	<div class="u-list u-list-1">
	  <div class="u-repeater u-repeater-1">
		<div class="u-align-center u-border-2 u-border-grey-15 u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
		  <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-1"><img src="images/9631224-347d1b61.png" alt=""></span>
			<h4 class="u-custom-font u-font-roboto-condensed u-text u-text-2">Mutuelle Entreprise</h4>
			<p class="u-text u-text-3">Depuis 2016, chaque entreprise privée doit mettre en place une mutuelle collective pour l’ensemble de ses salariés</p>
		  </div>
		</div>
		<div class="u-align-center u-border-2 u-border-grey-15 u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2">
		  <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-2"><img src="images/547562-dce2879a.png" alt=""></span>
			<h4 class="u-custom-font u-font-roboto-condensed u-text u-text-4"> Mutuelle Familiale</h4>
			<p class="u-text u-text-5">Une mutuelle santé familiale présente des avantages non négligeables pour l’ensemble de la famille. N’hésitez pas à opter pour cette mutuelle et obtenir des tarifs préférentiel</p>
		  </div>
		</div>
		<div class="u-align-center u-border-2 u-border-grey-15 u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3">
		  <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-3"><img src="images/2438078-fd668d08.png" alt=""></span>
			<h4 class="u-custom-font u-font-roboto-condensed u-text u-text-6">Mutuelle TNS</h4>
			<p class="u-text u-text-7">En tant qu’indépendant, le régime obligatoire n’est souvent pas suffisant pour couvrir convenablement vos frais de santé. Une mutuelle adaptée à votre profil est nécessaire pour couvrir vos dépenses de santé.</p>
		  </div>
		</div>
		<div class="u-align-center u-border-2 u-border-grey-15 u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4">
		  <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-4"><img src="images/3398056-afdd58fa.png" alt=""></span>
			<h4 class="u-custom-font u-font-roboto-condensed u-text u-text-8">Mutuelle Retraite</h4>
			<p class="u-text u-text-9">Au moment de prendre leur retraite , de nombreux seniors sont confrontés à l'augmentation de leur budget d'assurance</p>
		  </div>
		</div>
		<div class="u-align-center u-border-2 u-border-grey-15 u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-5">
		  <div class="u-container-layout u-similar-container u-container-layout-6"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-5"><img src="images/2102647-c8b3a790.png" alt=""></span>
			<h4 class="u-custom-font u-font-roboto-condensed u-text u-text-10">Mutuelle etudiante</h4>
			<p class="u-text u-text-11">Au moment de votre inscription administrative à l'Université , soit au début d'année universitaire,vous devez choisir une mutuelle pour étudiant</p>
		  </div>
		</div>
	  </div>
	</div>	
  </section>
  <section class="u-align-center u-clearfix u-container-align-left-lg u-container-align-left-xl u-image u-section-51" id="carousel_e8b1" data-image-width="1566" data-image-height="1044">
	<div class="u-clearfix u-sheet u-sheet-1">
	  <div class="u-list u-list-1">
		<div class="u-repeater u-repeater-1">
		  <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/149049-60a796b9.png" alt=""></span>
			  <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-1">Un devis gratuit en 2 minutes</h4>
			</div>
		  </div>
		  <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-icon-2"><img src="images/148741-41968d7b.png" alt=""></span>
			  <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-2">Comparateur indépendant et impartial</h4>
			</div>
		  </div>
		  <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-3"><img src="images/681443-f766c23f.png" alt=""></span>
			  <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-3">95% d’utilisateurs satisfaits</h4>
			</div>
		  </div>
		  <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-4"><img src="images/1152912-bd4be104.png" alt=""></span>
			  <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-4">La garantie des&nbsp;meilleurs prix&nbsp;avec le plus large panel du marché</h4>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="u-align-center u-clearfix u-section-61" id="carousel_7150">
	<div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
	  <div class="u-clearfix u-gutter-24 u-layout-wrap u-layout-wrap-1">
		<div class="u-layout">
		  <div class="u-layout-row">
			<div class="u-align-left u-container-style u-custom-color-4 u-layout-cell u-shape-rectangle u-size-29 u-layout-cell-1">
			  <div class="u-border-2 u-border-custom-color-2 u-container-layout u-container-layout-1">
				<h3 class="u-text u-text-1">Obtenez des devis personnalisés en 5 minutes,<br>et souscrivez la mutuelle santé
				</h3>
			  </div>
			</div>
			<div class="u-container-style u-layout-cell u-size-31 u-layout-cell-2">
			  <div class="u-container-layout u-container-layout-2">
				<div class="u-list u-list-1">
				  <div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
					  <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-1"><img src="images/1769041-67eae67d.png" alt=""></span>
						<div class="u-container-align-left u-container-style u-group u-group-1">
						  <div class="u-container-layout u-valign-top u-container-layout-4">
							<h5 class="u-align-left u-text u-text-2">L’indépendance</h5>
							<p class="u-align-left u-text u-text-3">En tant que comparateur d'assurance, nous sommes avant tout des conse<span style="font-weight: 700;"></span>illers qui mettrons toujours en avant vos intérêts face aux compagnies d’assurances, avant, pendant et après la signature de votre contrat.
							</p>
						  </div>
						</div>
					  </div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
					  <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-2"><img src="images/883029-1f70e7b7.png" alt=""></span>
						<div class="u-container-align-left u-container-style u-group u-video-cover u-group-2">
						  <div class="u-container-layout u-valign-top u-container-layout-6">
							<h5 class="u-align-left u-text u-text-default u-text-4">À L’écoute</h5>
							<p class="u-align-left u-text u-text-default u-text-5">Écouter vos besoins est la base de notre métier. Tous nos conseillers sont formés pour récolter, comprendre, analyser, prioriser et hiérarchiser les informations que vous nous apportez afin de réaliser un diagnostic précis de vos besoins afin de vous proposer la meilleure solution dans une grille tarifaire en adéquation avec votre budget.</p>
						  </div>
						</div>
					  </div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
					  <div class="u-container-layout u-similar-container u-container-layout-7"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-3"><img src="images/3176271-1ad5e879.png" alt=""></span>
						<div class="u-container-align-left u-container-style u-group u-video-cover u-group-3">
						  <div class="u-container-layout u-valign-top u-container-layout-8">
							<h5 class="u-align-left u-text u-text-default u-text-6">La Confiance</h5>
							<p class="u-align-left u-text u-text-default u-text-7">Carrez conseil comparateur assurance, chez nous la confiance est la pierre angulaire de notre activité, elle n’est pas une option. Elle est au cœur de métier et présente à toutes les étapes de notre travail quotidien.</p>
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
	</div>
  </section>
  <section class="u-align-center -grey-75 u-clearfix u-section-71" id="sec-9f7e" style="
  background-color: #E6F1F8;
    " >
	<div class="u-clearfix u-sheet u-sheet-1">
	  <h1 class="u-text u-text-default u-text-palette-1-base u-text-1">L'avis de nos utilisateurs :&nbsp;</h1>
	  <div class="u-expanded-width u-list u-list-1">
		<div class="u-repeater u-repeater-1">
		  <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
			  <div alt="" class="u-image u-image-circle u-image-1" data-image-width="64" data-image-height="64"></div>
			  <h4 class="u-align-center u-text u-text-default u-text-2">Jeffrey Brown</h4>
			  <p class="u-text u-text-black u-text-default u-text-3">client d'entreprise</p>
			  <p class="u-text u-text-4">Très bon accueil téléphonique, sympathique et explicite dans vos explications. Très bon choix pour ma mutuelle. Un grand merci.</p>
			  <div class="u-social-icons u-spacing-10 u-social-icons-1">
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-1-base u-icon-1">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-7a73"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-7a73" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-1-base u-icon-2">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-3fbc"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-3fbc" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-1-base u-icon-3">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-4bc0"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4bc0" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-1-base u-icon-4">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-1cc8"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-1cc8" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
				</span>
				</a>
			  </div>
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
			  <div alt="" class="u-image u-image-circle u-image-2" data-image-width="64" data-image-height="64"></div>
			  <h4 class="u-align-center u-text u-text-default u-text-5">Ann Richmond</h4>
			  <p class="u-text u-text-black u-text-default u-text-6">cliente d'entreprise</p>
			  <p class="u-text u-text-7">Réactivité de la conseillère qui sera notre contact en cas de besoin. Nous avons aussi apprécié son mode de fonctionnement : très structuré et organisé.</p>
			  <div class="u-social-icons u-spacing-10 u-social-icons-2">
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-1-base u-icon-5">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-7a73"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-7a73" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-1-base u-icon-6">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-3fbc"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-3fbc" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-1-base u-icon-7">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-4bc0"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4bc0" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-1-base u-icon-8">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-1cc8"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-1cc8" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
				</span>
				</a>
			  </div>
			</div>
		  </div>
		  <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
			<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
			  <div alt="" class="u-image u-image-circle u-image-3" data-image-width="100" data-image-height="100"></div>
			  <h4 class="u-align-center u-text u-text-default u-text-8">Alex Greenfield</h4>
			  <p class="u-text u-text-black u-text-default u-text-9">client d'entreprise</p>
			  <p class="u-text u-text-10">Personne très agréable qui s’exprime très bien, elle m’a conseillé et expliqué les démarches pour conclure le dossier merci</p>
			  <div class="u-social-icons u-spacing-10 u-social-icons-3">
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-1-base u-icon-9">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-7a73"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-7a73" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-1-base u-icon-10">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-3fbc"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-3fbc" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-1-base u-icon-11">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-4bc0"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4bc0" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>
				</span>
				</a>
				<a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-1-base u-icon-12">
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-1cc8"></use></svg>
				  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-1cc8" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
				</span>
				</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="u-align-center u-clearfix u-section-81" id="carousel_19e6">
	<div class="u-clearfix u-sheet u-sheet-1">
	  <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
		<div class="u-layout">
		  <div class="u-layout-row">
			<div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
			  <div class="u-container-layout u-container-layout-1">
				<img class="u-expanded-width u-image u-image-default u-image-1" src="images/pic-1.png" alt="" data-image-width="900" data-image-height="1100">
			  </div>
			</div>
			<div class="u-container-align-left u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
			  <div class="u-container-layout u-container-layout-2">
				<div class="u-accordion u-expanded-width u-spacing-2 u-accordion-1">
				  <div class="u-accordion-item u-accordion-item-1">
					<a class="active u-accordion-link u-button-style u-white u-accordion-link-1" id="link-accordion-7c0e" aria-controls="accordion-7c0e" aria-selected="true">
					  <span class="u-accordion-link-text">Quelle est la mutuelle la moins chère&nbsp; en ce moment ?</span><span class="u-accordion-link-icon u-icon u-icon-circle u-palette-3-base u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-347e"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-347e"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
					</a>
					<div class="u-accordion-active u-accordion-pane u-container-style u-white u-accordion-pane-1" id="accordion-7c0e" aria-labelledby="link-accordion-7c0e">
					  <div class="u-container-layout u-container-layout-3">
						<p class="u-text u-text-grey-60 u-text-1">Pour&nbsp;trouver la mutuelle santé la moins chère, il faut souscrire une formu​le économique, qui prendra uniquement en charge vos frais d'hospitalisation. En comparant les devis en ligne, vous pourrez trouver la mutuelle la moins chère répondant à vos besoins&nbsp;!</p>
					  </div>
					</div>
				  </div>
				  <div class="u-accordion-item u-accordion-item-2">
					<a class="u-accordion-link u-button-style u-white u-accordion-link-2" id="link-accordion-05cb" aria-controls="accordion-05cb" aria-selected="false">
					  <span class="u-accordion-link-text">Quel est le prix moyen d'une mutuelle ?&nbsp;</span><span class="u-accordion-link-icon u-icon u-icon-circle u-palette-3-base u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-ae03"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-ae03"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
					</a>
					<div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-05cb" aria-labelledby="link-accordion-05cb">
					  <div class="u-container-layout u-valign-top u-container-layout-4">
						<ul class="u-custom-list u-text u-text-2">
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
							</div>
							<span style="font-weight: 700;" class="u-text-custom-color-10">Le tarif d'une complémentaire santé va dépendre de votre situation familiale. Si vous êtes seul,&nbsp;le prix sera de 50 euros par mois. Une somme qui doublera pour un retraité. Compter&nbsp;100 euros par mois pour une famille&nbsp;avec deux jeunes enfants. Bien évidemment, le prix peut augmenter en fonction du contrat.<span style="font-weight: 700;"></span>
							</span>
							<br>
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="u-accordion-item u-accordion-item-3">
					<a class="u-accordion-link u-button-style u-white u-accordion-link-3" id="link-accordion-a6bb" aria-controls="accordion-a6bb" aria-selected="false">
					  <span class="u-accordion-link-text">Quelle est la meilleure mutuelle santé rapport qualité-prix ?</span><span class="u-accordion-link-icon u-icon u-icon-circle u-palette-3-base u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-a4a8"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-a4a8"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
					</a>
					<div class="u-accordion-pane u-container-style u-white u-accordion-pane-3" id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
					  <div class="u-container-layout u-valign-top u-container-layout-5">
						<ul class="u-custom-list u-text u-text-3">
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
							</div>
							<span style="font-weight: 700;" class="u-text-custom-color-10">La meilleure mutuelle santé rapport qualité-prix selon les assurés d'Opinion Assurances est&nbsp;April.</span>
							<br>
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="u-accordion-item u-accordion-item-4">
					<a class="u-accordion-link u-button-style u-white u-accordion-link-4" id="link-accordion-a6bb" aria-controls="accordion-a6bb" aria-selected="false">
					  <span class="u-accordion-link-text">Quelle est&nbsp; la meilleure mutuelle santé ?</span><span class="u-accordion-link-icon u-icon u-icon-circle u-palette-3-base u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xlink:href="#svg-f384"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-f384"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
					</a>
					<div class="u-accordion-pane u-container-style u-white u-accordion-pane-4" id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
					  <div class="u-container-layout u-valign-top u-container-layout-6">
						<ul class="u-custom-list u-text u-text-custom-color-9 u-text-4">
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
							</div>
							<span style="font-weight: 700;" class="u-text-custom-color-10">Selon le site Opinion Assurances, qui recense les avis des internautes, voici le podium des meilleurs mutuelles santé&nbsp;:&nbsp;MGP, Santiane, April</span>
							<br>
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
                            <input type="text" name="emaill" id="emaill"  placeholder=" Email" required="">
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
					  var email=$("input[name=emaill]").val();
					  $.ajax({
						  type:'POST',
						  url:'/sante',
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
		   