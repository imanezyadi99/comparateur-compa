@extends('layouts.dashboard')

@section('content')


<div class="container card py-5 px-4 my-5 ">
    <div class="row ">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Voici les éléments de la fiche trio :</h1>
          
          <a href="{{ url('/dashboard/comparateur_auto')}}" class="btn btn-info">retour</a>
        </div>
      </div>
    <div class="col-sm-6">
        <label for="info" >Donnees personnels: </label>
      </div>

    <div class="row p-3">

        <div class="col-sm-6">
           <p><b> Civilité: </b> {{ $client->civilitee}}</p>
           <p><b> Nom: </b> {{ $client->name}}</p>
           <p><b> Prenom: </b> {{ $client->prenom}}</p>
           <p><b> Adresse: </b> {{ $client->adresse}}</p>
           <p><b> Ville: </b> {{ $client->villee}}</p>
           <p><b> Prenom: </b> {{ $client->prenom}}</p>
           <p><b> Email: </b> {{ $client->email}}</p>
           <p><b> Telephone : </b> {{ $client->tel}}</p>

        </div>
    </div>


    <div class="col-sm-6">
      <label for="info" >Infos personnels: </label>
    </div>

  <div class="row p-3">

      <div class="col-sm-6">
        @isset($client->infospersonnel)
         <p><b> Recherche Voiture: </b> {{ $client->infospersonnel->Rvoiture}}</p>
         <p><b> Titulaire Carte grise: </b> {{ $client->infospersonnel->titulaireCartegrise}}</p>
         <p><b> Titulaire: </b> {{ $client->infospersonnel->titulaire}}</p>
         <p><b> Conducteur Secondaire: </b> {{ $client->infospersonnel->Conducteursecondaire}}</p>
         <p><b> Date: </b> {{ $client->infospersonnel->date}}</p>
         <p><b> Situation Matrimoniale: </b> {{ $client->infospersonnel->situationMatrimoniale}}</p>
         <p><b> Profession: </b> {{ $client->infospersonnel->profession}}</p>
         <p><b> Type permis : </b> {{ $client->infospersonnel->typepermis}}</p>
         <p><b> Suspendu_Retire: </b> {{ $client->infospersonnel->suspendu_retire}}</p>
         <p><b> Date obtention permis: </b> {{ $client->infospersonnel->dateobtentionpermis}}</p>
         @else
         <p>Merci d'envoyer ce lien pour le client de continuer de saisir les champs</p>
         <a href="{{ route('infos_personnel', [ 'id_client' => encrypt($client->id) ])}}" class="btn btn-info">Infos Personnels</a>

          @endisset
      </div>
  </div>


       
    <div class="col-sm-6">
        <label for="info">Infos vehicules : </label>
      </div>

    <div class="row p-3">

        <div class="col-sm-6">
          @isset($client->infosvehicule)
           <p><b> Immatriculation: </b> {{ $client->infosvehicule->immatriculation}}</p>
           <p><b> Date achat vehicule: </b> {{ $client->infosvehicule->dateachatvehicule}}</p>
           <p><b> Date premier circulation: </b> {{ $client->infosvehicule->datepremiercirculation}}</p>
           <p><b> kelometre: </b> {{ $client->infosvehicule->kelometre}}</p>
           <p><b> Mode financement: </b> {{ $client->infosvehicule->modefinancement}}</p>
           <p><b> Type logement: </b> {{ $client->infosvehicule->typelogement}}</p>
           <p><b> Nom : </b> {{ $client->infosvehicule->nom}}</p>
           <p><b> Temp : </b> {{ $client->infosvehicule->temp}}</p>
           <p><b> Usage vehicule: </b> {{ $client->infosvehicule->usagevehicule}}</p>
           <p><b> Type parking : </b> {{ $client->infosvehicule->typeparking}}</p>
           <p><b> Ville : </b> {{ $client->infosvehicule->ville}}</p>
           @else
           <p>Merci d'envoyer ce lien pour le client de continuer de saisir les champs</p>
           <a href="{{ route('infos_vehicule', [ 'id_client' => encrypt($client->id) ])}}" class="btn btn-info">Infos Vehicules</a>
            @endisset
        </div>
    </div>

  
    <div class="col-sm-6">
      <label for="info">Infos antecedants : </label>
    </div>
    <div class="row p-3">
      
      <div class="col-sm-6">
        @isset($client->infoantecedants) 
         <p><b> Assure: </b> {{ $client->infoantecedants->assure}}</p>
         <p><b> Asuure Interruption: </b> {{ $client->infoantecedants->assureinterruption}}</p>
         <p><b> Bonus: </b> {{ $client->infoantecedants->bonus}}</p>
         <p><b> Conducteur Principal: </b> {{ $client->infoantecedants->conducteurprincipal}}</p>
         <p><b> Nombre Sinistre: </b> {{ $client->infoantecedants->nombresinistre}}</p>
         <p><b> Niveau Garantie: </b> {{ $client->infoantecedants->niveaugarantie}}</p>
         <p><b> Assure Vehicule : </b> {{ $client->infoantecedants->assurervehiculeEn}}</p>
         <p><b> Date nouveau contrat : </b> {{ $client->infoantecedants->datenouveaucontrat}}</p>
        @else
        <p>Merci d'envoyer ce lien pour le client de continuer de saisir les champs</p>
        <a href="{{ route('info_antecedant', [ 'id_client' => encrypt($client->id) ])}}" class="btn btn-info">Infos Antecedants</a>
         @endisset
      </div>
  </div>
  
     
    <div class=" m-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Supprimer
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation suppression</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Voulez-vous supprimer cette fiche de <b> {{ $client->name}} {{ $client->prenom}} </b> definitivment ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">NON</button>
              <form action="{{ route('destroy',  encrypt($client->id) ) }}" method="POST">
                @csrf
                @method('DELETE')   
                <button type="submit" class="btn btn-danger" >OUI</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>   
</div>



@endsection