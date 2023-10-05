<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\santes_coordonnees;
use App\Models\santes_infos;
use App\Models\santes_profiles;
use App\Models\User;
use App\Notifications\Sante;
use Illuminate\Support\Facades\Notification;



class ComparateurSanteController extends Controller
{
    public function coordonnees()
    {
      return view('comparateur_sante/coordonnees');
    }
    public function coordonnees_create(Request $request)
    {
     
    $sante = new santes_coordonnees();
    $sante->civilite = request('civilite');
    $sante->name = request('name');
    $sante->prenom = request('prenom');
    $sante->ville = request('ville');
    $sante->codepostale = request('codepostale');
    $sante->email = request('email');
    $sante->telephone = request('telephone');
    
    $sante->save();

    $id_client = $sante->id;

    //$users = User::where('id','=',auth()->user()->id)->get();
    /*$id = auth()->user()->id;**/
    /*$create_post=auth()->user()->name;*/
    //Notification::send($users,new Sante($sante->id,$sante->civilite,$sante->name,$sante->prenom,$sante->ville,$sante->codepostale,$sante->email,$sante->telephone));


    return redirect()->route('info_profil', [ 'id_client' => $id_client]);
    }

    public function info_profil($id_client)
    {
      $client = $id_client;
      return view('comparateur_sante/info_profil' , compact('client'));
    }

    public function info_profil_create(Request $request)
    {
    
    $sante = new santes_profiles();
    $sante->coordonnees_id = request('coordonnees_id');
    $sante->profile =  request('profile');
    $sante->datenaissance = request('datenaissance');
    $sante->situation_matrimoniale = request('situation_matrimoniale');
    $sante->profession = request('profession');
    $sante->regimesocial = request('regimesocial');
    $sante->codepostal = request('codepostal');
    $sante->recevoir_offrepartenaires = request('recevoir_offrepartenaires');
   
    $sante->save();
    $id_client = $sante->coordonnees_id;

    $client = santes_coordonnees::find($id_client);

    if(isset($client->infossante)){
      return redirect()->route('info_profil', [ 'id_client' => $id_client]);
    }else{
      return redirect()->route('info_sante', [ 'id_client' => $id_client]);
    }
  }


    public function info_sante($id_client)
    {
      $client = $id_client;
      return view('comparateur_sante/info_sante',compact('client'));
    }
    public function info_sante_create(Request $request)
    {
     
    $sante = new santes_infos();
    $sante->coordonnees_id = request('coordonnees_id');
    $sante->nameassurer = request('nameassurer');
    $sante->assurance_complementaire = request('assurance_complementaire');
    $sante->assureuractuel = request('assureuractuel');
    $sante->moisecheance = request('moisecheance');
    $sante->niveau_protection = request('niveau_protection');

    $sante->save();
    $id_client = $sante->coordonnees_id;

    return redirect()->route('remerciement_sante', [ 'id_client' => $id_client]);
    }

    public function remerciement_sante()
    {
      return view('site_web/remerciement_sante');
    }


   
}
