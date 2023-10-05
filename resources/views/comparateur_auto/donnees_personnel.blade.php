@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row d-flex align-items-center">
    <div class="col-md-6">
      <h1> Economisez 340€ en moyenne sur votre assurance auto </h1>
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
        <legend><span class="number">1</span>Mes Coordonnées</legend>
        <form action="{{route('donnees_personnel_create')}}" method="post">
        <h1> Comparateur Assurance Auto </h1>
        <br />
        @csrf

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="civilitee" >Civilité : </label> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box comparateur-check">
              <input class="form-check-input" type="radio" name="civilitee" id="flexRadioDefault58" value="Mlle">
              <label class="form-check-label" for="flexRadioDefault58">
                Mlle

              </label>
            </div>
            <div class="form-check check-box comparateur-check">
              <input class="form-check-input" type="radio" name="civilitee" id="flexRadioDefault59" value="Mme" checked>
              <label class="form-check-label" for="flexRadioDefault59">
                Mme
              </label>
            </div>
            <div class="form-check check-box comparateur-check">
              <input class="form-check-input" type="radio" name="civilitee" id="flexRadioDefault60" value="Mr">
              <label class="form-check-label" for="flexRadioDefault60">
                Mr

              </label>
            </div>
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="text" > Nom :</label> <br />
        </div>
        <div class="col-sm-6">
          <div class="formBox">
            <input type="text" name="name" class="form-control" placeholder="Nom" required=""> <br /><br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="text" >Prénom :</label> <br />
        </div>
        <div class="col-sm-6">
          <div class="formBox">
            <input type="text" name="prenom" class="form-control" placeholder="Prenom" required=""> <br /> <br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="text" >Adresse :</label> <br />
        </div>
        <div class="col-sm-6">
          <div class="formBox">
            <input type="text" name="adresse" class="form-control" placeholder="Adresse" required=""> <br /> <br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="text" >Ville ou code postal :</label> <br />
        </div>
        <div class="col-sm-6">
          <div class="formBox">
            <input type="text" name="villee" class="form-control" placeholder="Ville ou code postal" required=""> <br /> <br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="email" >Email :</label> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <input type="email" name="email" class="form-control" placeholder="Ex : imane@gmail.com" required=""> <br /> <br />
          </div>
        </div>
        </div>

        <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="number" >Télephone :</label> <br />
        </div>
        <div class="col-sm-6">
          <div class="formBox">
            <input type="number" name="tel" class="form-control" placeholder="0662870204" required=""> <br />
          </div>
        </div>
        </div>

		<button type="submit" class="btn-valider mb-5"> VALIDER ET CONTINUER </button>
     </form>
	</div></div></div>

@endsection