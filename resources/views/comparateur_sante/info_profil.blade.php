@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row d-flex align-items-center">
    <div class="col-md-6">
      <h1> Votre mutuelle santé au meilleur rapport qualité / prix </h1>
    </div>
    <div class="col-md-6">
      <img src="/images/sante copy.jpg" alt="" class="img-fluid mx-auto" width="500px" >
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
    <div class="card box-shadows">
      <ul>
          <li><img src="/images/coche-orange.png" width="22px" > 9 utilisateurs sur 10 recommandent le service.</li>
          <li><img src="/images/coche-orange.png" width="22px" > 9 millions d’internautes nous font confiance.</li>
         <li><img src="/images/coche-orange.png" width="22px" >  Service gratuit et sans engagement.</li>
      </ul>
    </div>
      </div>
    <div class="col-md-8">
    <legend><span class="number">2</span>Votre profil</legend>
    <form action="{{route('info_profil_create', $client)}}" method="post">
        <h1> Comparateur Assurance santé </h1> 
        <br/>  
       @csrf
    <div class="row box-shadows mb-5">
    <input type="number" value="{{ $client }}" name="coordonnees_id" hidden>

    <div class="col-sm-6">
      <label for="text" style="color:blue;"> Vous êtes : </label> <br/>    
     </div>

     <div class="col-sm-6">
      <div class="formBox">
        
      <div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="profile" id="flexRadioDefault11" value="Homme">
  <label class="form-check-label" for="flexRadioDefault11">
  Homme
  </label>
 
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="profile" id="flexRadioDefault12" value="Femme">
  <label class="form-check-label" for="flexRadioDefault12">
  Femme
  </label>
 
</div>
</div>
     </div>
    </div>



    <div class="row box-shadows mb-5">
        <div class="col-sm-6">
     <label for="date" style="color:blue;">Quelle est votre date de naissance ? </label>
        </div>

        <div class="col-sm-6">
        <div class="formBox">
     <input type="date" class="form-control" name="datenaissance" ><br/><br/>
       </div>
        </div>
    </div>


    <div class="row box-shadows mb-5">
        <div class="col-sm-6">
     <label for="text" style="color:blue;"> Quelle est votre situation matrimoniale ? </label> <br/>  
        </div>   

 <div class="col-sm-6">

<div class="formBox">

<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault13" value="celibataire">
  <label class="form-check-label" for="flexRadioDefault13">
  Célibataire
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault14" value="Marie(e)" checked>
  <label class="form-check-label" for="flexRadioDefault14">
  Marié(e)
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault15" value="Concubin(e)_viemaritale">
  <label class="form-check-label" for="flexRadioDefault15">
  Concubin(e) / vie maritale
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault16" value="Pacse(e)" checked>
  <label class="form-check-label" for="flexRadioDefault16">
  Pacsé(e)
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault17" value="Separe(e)" checked>
  <label class="form-check-label" for="flexRadioDefault17">
  Séparé(e)
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault18" value="Divorce(e)" checked>
  <label class="form-check-label" for="flexRadioDefault18">
  Divorcé(e)
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="situation_matrimoniale" id="flexRadioDefault19" value="veuf(ve)" checked>
  <label class="form-check-label" for="flexRadioDefault19">
  veuf(ve)
  </label>
</div>

</div>
 </div>
    </div>


    <div class="row box-shadows mb-5">

                     <div class="col-sm-6">
                      <label class="title">
                        <span class="required" aria-required="true" style="color:blue;">Quelle est votre profession ? </span>
                      </label>
                      </div>

                 <div class="col-sm-6">
                        <div class="formBox">
                      <div class="item-cont">
                        <div class="large">
                            <div class="element-multiple" title="profession">
                          <select id="profession" data-no-selected="profession *" name="profession" class="form-control" required="required" class="multiple" aria-required="true">
                            <option value="ouvrier">Ouvrier</option>
                            <option value="salarié">Salarié</option>
                            <option value="salarié cadre">Salarié cadre </option>
                            <option value="fonctionnaire territorial">Fontionnaire territorial</option>
                            <option value="fonctionnaire hospitalier">Fontionnaire hospitalier</option>
                            <option value="fonctionnaire autre">Fontionnaire Autre</option>
                            <option value="commercant">Commercant</option>
                            <option value="agriculteur">Agriculteur</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="artisan">Artisan </option>
                            <option value="chef d'entreprise">Chef d'entreprise</option>
                            <option value="profession libérale">Profession libérale</option>
                            <option value="VRP"> VRP </option>
                            <option value="etudiant">Etudiant</option>
                            <option value="retraité">Retraité</option>
                            <option value="recherche d'emploi">Recherche d'emploi</option>
                            <option value="sans profession"> sans profession  </option>
                          </select>
						  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>


                  <div class="row box-shadows mb-5">

                    <div class="col-sm-6">
                      <label class="title">
                        <span class="required" aria-required="true" style="color:blue;">Quel est votre régime social ? </span>
                      </label>
                      </div>
              
                      <div class="col-sm-6">
                      <div class="formBox">
                      <div class="item-cont">
                        <div class="large">
                            <div class="element-multiple" title="regime">
                          <select id="regimesocial" data-no-selected="regimesocial *" name="regimesocial" class="form-control" required="required" class="multiple" aria-required="true">
                            <option value="régime général">Régime Général</option>
                            <option value="régime alsace moselle">Régime Alsace Moselle</option>
                            <option value="travailleurs non salariés">Travailleurs Non salariés </option>
                            <option value="régime agricole">Régime agricole</option>
                            <option value="etudiants">Etudiants</option>
                          </select>
						  
                        </div>
                      </div>
                    </div>
                     </div>
                      </div>
                     </div>


 <div class="row box-shadows mb-5">

  <div class="col-sm-6">
<label for="code" style="color:blue;"> Quel est le code postal de votre domicile ? </label> <br/> <br/>
  </div>

  <div class="col-sm-6">
    <div class="formBox">
    <input type="text" class="form-control" name="codepostal" ><br/><br/>
   </div>
  </div>
 </div>

 <div class="row box-shadows mb-5">
    <div class="col-sm-6">
    <label for="text"style="color:blue;" > Acceptez-vous de recevoir par voie électronique les offres des partenaires d'Assurland ? </label> <br/>     
    </div>

    <div class="col-sm-6">
   <div class="formBox">  
    <div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="recevoir_offrepartenaires" id="flexRadioDefault20" value="Oui">
  <label class="form-check-label" for="flexRadioDefault20">
  Oui
  </label>
   </div>
   <div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="recevoir_offrepartenaires" id="flexRadioDefault21" value="Non" checked>
  <label class="form-check-label" for="flexRadioDefault21">
  Non
  </label>
   </div>

    </div>
    </div>


     </div>
     

     <button type="submit" class="btn-valider mb-5"> VALIDER ET CONTINUER </button>
    </div>
  </div>
</div>

 </form>
@endsection