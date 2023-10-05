@extends('layouts.dashboard')

@section('content')


<div class="container card py-5 px-4 my-5">
    <div class="row ">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Voici les éléments de la fiche trio :</h1>
          
          <a href="{{ url('/dashboard/comparateur_sante')}}" class="btn btn-info">retour</a>
        </div>
      </div>

    <div class="col-sm-6">
        <label for="info" >Donnees personnels: </label>
      </div>

    <div class="row p-3">
        
        <div class="col-sm-6">
           <p><b> Civilité: </b> {{ $client->civilite}}</p>
           <p><b> Nom: </b> {{ $client->name}}</p>
           <p><b> Prenom: </b> {{ $client->prenom}}</p>
           <p><b> Ville: </b> {{ $client->ville}}</p>
           <p><b> Code Postale: </b> {{ $client->codepostale}}</p>
           <p><b> Email: </b> {{ $client->email}}</p>
           <p><b> Telephone: </b> {{ $client->telephone}}</p>
           
        </div>
    </div>

    
    <div class="col-sm-6">
        <label for="info">Santes Infos : </label>
      </div>

    <div class="row p-3">

        <div class="col-sm-6">
            @isset($client->infossante) 
           <p><b> Nom Assure: </b> {{ $client->infossante->nameassurer}}</p>
           <p><b> Assurance complementaire: </b> {{ $client->infossante->assurance_complementaire}}</p>
           <p><b> Assureur actuel: </b> {{ $client->infossante->assureuractuel}}</p>
           <p><b> Mois Echeance: </b> {{ $client->infossante->moisecheance}}</p>
           <p><b> Niveau Protection: </b> {{ $client->infossante->niveau_protection}}</p>
           @else
           <p>Merci d'envoyer ce lien pour le client de continuer de saisir les champs</p>
           <a href="{{ route('info_sante', [ 'id_client' =>encrypt($client->id) ])}}" class="btn btn-info">Infos Santes</a>
           @endisset
           {{-- {{ dd('test')}} --}}
        </div>
    </div>
       
    <div class="col-sm-6">
        <label for="info">Santes Profiles : </label>
      </div>

    <div class="row p-3">

        <div class="col-sm-6">
            @isset($client->profile) 
           <p><b> Profile: </b> {{ $client->profile->profile}}</p>
           <p><b> Date Naissance: </b> {{ $client->profile->datenaissance}}</p>
           <p><b> Situation Matrimoniale: </b> {{ $client->profile->situation_matrimoniale}}</p>
           <p><b> Profession: </b> {{ $client->profile->profession}}</p>
           <p><b> Regime Sociale: </b> {{ $client->profile->regimesocial}}</p>
           <p><b> Code postal: </b> {{ $client->profile->codepostal}}</p>
           <p><b> Recevoir offre partenaires : </b> {{ $client->profile->recevoir_offrepartenaires}}</p>
           @else
           <p>Merci d'envoyer ce lien pour le client de continuer de saisir les champs</p>
           <a href="{{ route('info_profil', [ 'id_client' => encrypt($client->id) ])}}" class="btn btn-info">Profiles Santes</a>

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
              <form action="{{ route('delete',  encrypt($client->id) ) }}" method="POST">
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