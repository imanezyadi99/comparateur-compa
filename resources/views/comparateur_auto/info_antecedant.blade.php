@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row d-flex align-items-center">
    <div class="col-md-6">
      <h1> Economisez 340€ en moyenne sur votre assurance auto</h1>
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
    <legend><span class="number">4</span>Mes antécédants</legend>
    <form action="{{route('info_antecedant_create', $client)}}" method="post">
        <h1> Comparateur Assurance Auto </h1>
        <br />
        @csrf
<div class="row box-shadows mb-5">
<input type="number" value="{{ $client }}" name="donnees_personnels_id" hidden>
<div class="col-sm-6">
  <label for="assure" >Je suis actuellement assuré : </label> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assure" id="flexRadioDefault42" value ="conducteurprincipal" >
      <label class="form-check-label" for="flexRadioDefault42">
        Oui, comme conducteur principal

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assure" id="flexRadioDefault43" value="conducteursecondaire" checked>
      <label class="form-check-label" for="flexRadioDefault43">
        Oui, comme conducteur secondaire
      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assure" id="flexRadioDefault44" value="Non">
      <label class="form-check-label" for="flexRadioDefault44">
        Non

      </label>
    </div>
  </div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">

  <label for="text" >Je suis assuré sans interruption depuis :</label> <br /> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    
  <select class="form-control"  name="assureinterruption" >
    <option value="1">1 an</option>
    <option value="2">2 ans</option>
    <option value="3">3 ans</option>
    <option value="4">4 ans</option>
    <option value="5">5 ans</option>
    <option value="plus de 5 ans ">>5ans</option>
  </select>
</div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">
  <label for="text" >Mon bonus/malus actuel :</label> <br /> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    <input type="text" class="form-control" name="bonus" required=""> <br /> <br />
  </div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">
  <label for="conducteur" >Je suis assuré en tant que conducteur principal pour un autre véhicule : </label> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="conducteurprincipal" id="flexRadioDefault45" value="Oui">
      <label class="form-check-label" for="flexRadioDefault45">
        Oui

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="conducteurprincipal" id="flexRadioDefault46" value="Non" checked>
      <label class="form-check-label" for="flexRadioDefault46">
        Non
      </label>
    </div>
  </div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">
  <label for="text" >Nombre de sinistres déclarés :</label> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    <input type="text" name="nombresinistre" class="form-control" required=""> <br /> <br />
  </div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">
  <label for="garanties" >Niveau de garanties de mon contrat actuel : </label> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="niveaugarantie" id="flexRadioDefault47" value="Nonassuré">
      <label class="form-check-label" for="flexRadioDefault47">
        Non assuré

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="niveaugarantie" id="flexRadioDefault48" value="Assuréautiers" checked>
      <label class="form-check-label" for="flexRadioDefault48">
        Assuré au tiers

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="niveaugarantie" id="flexRadioDefault49" value="Assurétousrisques">
      <label class="form-check-label" for="flexRadioDefault49">
        Assuré tous risques

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="niveaugarantie" id="flexRadioDefault50" value="Assuréautreniveau" checked>
      <label class="form-check-label" for="flexRadioDefault50">
        Assuré à un autre niveau de garantie

      </label>
    </div>

  </div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">
  <label for="text" > Je souhaite assurer mon véhicule en : </label> <br />
</div>
<div class="col-sm-6">
  <div class="formBox">
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assurervehiculeEn" id="flexRadioDefault51" value="Tiers">
      <label class="form-check-label" for="flexRadioDefault51">
        Tiers

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assurervehiculeEn" id="flexRadioDefault52" value="deux" checked>
      <label class="form-check-label" for="flexRadioDefault52">
        Tiers + Vol et Incendie


      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assurervehiculeEn" id="flexRadioDefault53" value="tousrisques">
      <label class="form-check-label" for="flexRadioDefault53">
        Tous Risques

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="assurervehiculeEn" id="flexRadioDefault54" value="tousrisquesRenforcé" checked>
      <label class="form-check-label" for="flexRadioDefault54">
        Tous Risques Renforcé

      </label>
    </div>
  </div>
</div>
</div>

<div class="row box-shadows mb-5">
<div class="col-sm-6">
  <label for="text">Je souhaite mon nouveau contrat débute :</label> <br />
</div>

<div class="col-sm-6">
  <div class="formBox">
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="datenouveaucontrat" id="flexRadioDefault55" value="Aujourd'hui">
      <label class="form-check-label" for="flexRadioDefault55">
        Aujourd'hui

      </label>
    </div>



    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="datenouveaucontrat" id="flexRadioDefault56" value="Demain" checked>
      <label class="form-check-label" for="flexRadioDefault56">
        Demain

      </label>
    </div>
    <div class="form-check check-box  comparateur-check">
      <input class="form-check-input" type="radio" name="datenouveaucontrat" id="flexRadioDefault57" value="Dans 1mois">
      <label class="form-check-label" for="flexRadioDefault57">
        Dans 1 mois

      </label>
    </div>
  </div>
</div>
</div>



		<button type="submit" class="btn-valider mb-5"> VALIDER  </button>
     </form>
	</div>
  </div>
</div>

@endsection