@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row d-flex align-items-center">
    <div class="col-md-6">
      <h1>Economisez 340€ en moyenne sur votre assurance auto </h1>
    </div>
    <div class="col-md-6">
      <img src="/images/contrat-assurance-auto.jpg" alt="" class="img-fluid mx-auto" width="500px">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card box-shadows">
        <ul>
          <li><img src="/images/coche-orange.png" width="22px"> <b>Près de 200 formules</b> à comparer</li>
          <li><img src="/images/coche-orange.png" width="22px"> 9 millions d’internautes nous font confiance.</li>
          <li><img src="/images/coche-orange.png" width="22px"> Service gratuit et sans engagement.</li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">


<legend><span class="number">3</span>Mon véhicule</legend>
<form action="{{route('infos_vehicule_create', $client)}}" method="post">
        <h1> Comparateur Assurance Auto </h1>
        <br />
        @csrf

        <div class="row box-shadows mb-5">
        <input type="number" value="{{ $client }}" name="donnees_personnels_id" hidden>
        <div class="col-sm-6">
          <label for="text" >Immatriculation du véhicule :</label> <br /> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <input type="text" class="form-control" name="immatriculation" placeholder="Ex:AB-123-CD" required=""> <br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="date" >Date d’achat de mon véhicule:</label> <br /> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <input type="date" class="form-control" name="dateachatvehicule"><br /><br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="date" >Date de 1ère mise en circulation de mon véhicule: </label> <br /> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <input type="date" class="form-control" name="datepremiercirculation"><br /><br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label class="title">
            <span class="required" aria-required="true" >Nombre de kilomètres annuels:</span>
          </label>
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div  title="kelometres">
              <div class="item-cont">
                <div class="large">
                  <select id="kelometre" data-no-selected="Kelometre *" name="kelometre" required="required"
                    class="form-control" aria-required="true">
                    <option value="selectionner">Sélectionner</option>
                    <option value="1000-10000">1000-10000</option>
                    <option value="10000-20000">10000-20000</option>
                    <option value="20000-30000">20000-30000</option>
                    <option value="30000-40000">30000-40000</option>
                    <option value="Plus de 40000">Plus de 40000</option>
                  </select>

                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="financement" >Mode de financement de mon véhicule: </label><br /><br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="modefinancement" id="flexRadioDefault25" value="Comptant">
              <label class="form-check-label" for="flexRadioDefault25">
                Comptant

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="modefinancement" id="flexRadioDefault26" value="Crédit" checked>
              <label class="form-check-label" for="flexRadioDefault26">
                Crédit


              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="modefinancement" id="flexRadioDefault27" value="Don">
              <label class="form-check-label" for="flexRadioDefault27">
                Don

              </label>
            </div>
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="logement" >Type de logement: </label><br /><br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typelogement" id="flexRadioDefault28" value="maison">
              <label class="form-check-label" for="flexRadioDefault28">
                une maison

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typelogement" id="flexRadioDefault29" value="appartement" checked>
              <label class="form-check-label" for="flexRadioDefault29">
                une appartement

              </label>
            </div>
          </div>
        </div>
        </div>
        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="sexe" >je suis: </label><br /><br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="nom" id="flexRadioDefault30" value="propriétaire">
              <label class="form-check-label" for="flexRadioDefault30">
                Propriétaire

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="nom" id="flexRadioDefault31" value="Locataire/Colocataire" checked>
              <label class="form-check-label" for="flexRadioDefault31">
                Locataire/Colocataire
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="nom" id="flexRadioDefault32" value="Autre">
              <label class="form-check-label" for="flexRadioDefault32">
                Autre

              </label>
            </div>
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">

          <label for="temp" >Depuis: </label><br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="temp" id="flexRadioDefault33" value="plus_de_8ans">
              <label class="form-check-label" for="flexRadioDefault33">
                Plus de 8 ans

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="temp" id="flexRadioDefault34"value="moins_de_8ans" checked>
              <label class="form-check-label" for="flexRadioDefault34">
                Moins de 8 ans
              </label>
            </div>

          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="usage" >Usage prévu de mon véhicule : </label> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="usagevehicule" id="flexRadioDefault35" value="usage_prive_trajet_travail">
              <label class="form-check-label" for="flexRadioDefault35">
                Usage privé et trajet travail

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="usagevehicule" id="flexRadioDefault36" value="usage_privé" checked>
              <label class="form-check-label" for="flexRadioDefault36">
                Usage privé


              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="usagevehicule" id="flexRadioDefault37" value="Autre_usage">
              <label class="form-check-label" for="flexRadioDefault37">
                Autre usage

              </label>
            </div>
          </div>
        </div>
        </div>


        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="parking" >Type de parking la nuit : </label> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typeparking" id="flexRadioDefault38" value="Garage_individuel_fermé">
              <label class="form-check-label" for="flexRadioDefault38">
                Garage individuel fermé

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typeparking" id="flexRadioDefault39" value="Parking_collectif_fermé" checked>
              <label class="form-check-label" for="flexRadioDefault39">
                Parking collectif fermé


              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typeparking" id="flexRadioDefault40" value="Voie_public">
              <label class="form-check-label" for="flexRadioDefault40">
                Voie publique

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typeparking" id="flexRadioDefault41" value="Autre_type_parking">
              <label class="form-check-label" for="flexRadioDefault41">
                Autre type de parking
              </label>
            </div>
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="text" >Ville ou code postal du lieu de travail :</label> <br /> <br />
        </div>
        <div class="col-sm-6">
          <div class="formBox">
            <input type="text" name="ville" placeholder="Ex : 59000 ou Lille" required="">
          </div>
        </div>
        </div>
		<button type="submit" class="btn-valider mb-5"> VALIDER ET CONTINUER </button>
     </form>
	</div>
  </div>
</div>

@endsection