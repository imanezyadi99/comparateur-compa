<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donnees_personnels;
use App\Models\autos_antecedants;
use App\Models\autos_personnels;
use App\Models\autos_vehicules;
use App\Models\User;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Support\Facades\Notification;

class ComparateurAutoController extends Controller
{

    public function donnees_personnel()
    {
      return view('comparateur_auto/donnees_personnel');
    }
    public function donnees_personnel_create(Request $request)
    {
     
    $assurance = new donnees_personnels();
    $assurance->civilitee = request('civilitee');
    $assurance->name = request('name');
    $assurance->prenom = request('prenom');
    $assurance->adresse = request('adresse');
    $assurance->villee = request('villee');
    $assurance->email = request('email');
    $assurance->tel = request('tel');

    $assurance->save();

    $id_client = $assurance->id;

    //$users = User::where('id','=',auth()->user()->id)->get();
    /*$id = auth()->user()->id;**/
    /*$create_post=auth()->user()->name;*/
    //Notification::send($users,new UserRegisteredNotification($assurance->id,$assurance->civilitee,$assurance->name,$assurance->prenom,$assurance->adresse,$assurance->villee,$assurance->email,$assurance->tel));


    return redirect()->route('infos_personnel', [ 'id_client' => encrypt($id_client)]);

 
    }

    public function infos_personnel($id_client)
    {
      $client = decrypt($id_client);
      return view('comparateur_auto/infos_personnel' , compact('client'));
    }

    public function infos_personnel_create(Request $request)
    {
    
    $assurance = new autos_personnels();
    $assurance->Rvoiture = request('Rvoiture');
    $assurance->donnees_personnels_id =  request('donnees_personnels_id');
    $assurance->titulaireCartegrise = request('titulaireCartegrise');
    $assurance->titulaire = request('titulaire');
    $assurance->Conducteursecondaire = request('Conducteursecondaire');
    $assurance->date = request('date');
    $assurance->situationMatrimoniale = request('situationMatrimoniale');
    $assurance->profession = request('profession');
    $assurance->typepermis = request('typepermis');
    $assurance->suspendu_retire = request('suspendu_retire');
    $assurance->dateobtentionpermis = request('dateobtentionpermis');
   
   
    $assurance->save();
    $id_client = encrypt($assurance->donnees_personnels_id);

    $client = donnees_personnels::find(decrypt($id_client));

      if(isset($client->infosvehicule)){
        return redirect()->route('info_antecedant', [ 'id_client' => $id_client]);
      }else{
        return redirect()->route('infos_vehicule', [ 'id_client' => $id_client]);
      }
    }


    public function infos_vehicule($id_client)
    {
      $client = decrypt($id_client);

      return view('comparateur_auto/infos_vehicule',compact('client'));
    }
    public function infos_vehicule_create(Request $request)
    {
     
    $assurance = new autos_vehicules();
  
    $assurance->immatriculation = request('immatriculation');
    $assurance->donnees_personnels_id = request('donnees_personnels_id');
    $assurance->dateachatvehicule = request('dateachatvehicule');
    $assurance->datepremiercirculation = request('datepremiercirculation');
    $assurance->kelometre = request('kelometre');
    $assurance->modefinancement = request('modefinancement');
    $assurance->typelogement = request('typelogement');
    $assurance->nom = request('nom');
    $assurance->temp = request('temp');
    $assurance->usagevehicule = request('usagevehicule');
    $assurance->typeparking = request('typeparking');
    $assurance->ville = request('ville');
   
    $assurance->save();
    $id_client = encrypt($assurance->donnees_personnels_id);
    $client = donnees_personnels::find(decrypt($id_client));

    if(isset($client->infoantecedants)){
      return redirect()->route('remerciement', [ 'id_client' => $id_client]);
    }else{
      return redirect()->route('info_antecedant', [ 'id_client' => $id_client]);
    }
  }

    public function info_antecedant($id_client)
    {
      $client = decrypt($id_client);
      return view('comparateur_auto/info_antecedant',compact('client'));
    }

    public function info_antecedant_create(Request $request)
    {
     
    $assurance = new autos_antecedants();
    $assurance->assure = request('assure');
    $assurance->donnees_personnels_id = request('donnees_personnels_id');
    $assurance->assureinterruption = request('assureinterruption');
    $assurance->bonus = request('bonus');
    $assurance->conducteurprincipal = request('conducteurprincipal');
    $assurance->nombresinistre = request('nombresinistre');
    $assurance->niveaugarantie = request('niveaugarantie');
    $assurance->assurervehiculeEn = request('assurervehiculeEn');
    $assurance->datenouveaucontrat = request('datenouveaucontrat');

    $assurance->save();
    $id_client = encrypt($assurance->donnees_personnels_id);

    return redirect()->route('remerciement', [ 'id_client' => $id_client]);
    }


    public function remerciement()
    {
      return view('site_web/remerciement');
    }

}
