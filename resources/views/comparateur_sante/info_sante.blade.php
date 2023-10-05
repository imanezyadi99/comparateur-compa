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

    <legend><span class="number">3</span>Votre projet </legend>

    <form action="{{route('info_sante_create', $client)}}" method="post">
        <h1> Comparateur Assurance santé </h1> 
        <br/>
        @csrf
        <div class="row box-shadows mb-5">
        <input type="number" value="{{ $client }}" name="coordonnees_id" hidden>

       <div class="col-sm-6">
       <label for="text" style="color:blue;"> Qui souhaitez-vous assurer ? </label> <br/>   
       </div>

 <div class="col-sm-6">
 <div class="formBox">
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="nameassurer" id="flexRadioDefault1" value="Vous">
  <label class="form-check-label" for="flexRadioDefault1">
  Vous
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="nameassurer" id="flexRadioDefault2"  value="Vous_et_votre_conjoint" checked>
  <label class="form-check-label" for="flexRadioDefault2">
  Vous et votre conjoint
  </label>
</div>
<div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="nameassurer" id="flexRadioDefault3" value="Vous_et_votre_enfant(s)">
  <label class="form-check-label" for="flexRadioDefault3">
  Vous et votre (ou vos) enfant(s)
  </label>
</div>
<div class="form-check check-box comparateur-check">
  <input class="form-check-input" type="radio" name="nameassurer" id="flexRadioDefault4" value="Vous_votreconjoint_et_enfant(s)" checked>
  <label class="form-check-label" for="flexRadioDefault4">
  Vous, votre conjoint et votre (ou vos) enfant(s) 
  </label>
</div>

</div>
</div>
</div>


     <div class="row box-shadows mb-5">
      <div class="col-sm-6">        
      <label for="text" style="color:blue;"> Etes-vous actuellement pris(e) en charge par une assurance complémentaire santé ? </label> <br/> 
      </div>

       <div class="col-sm-6">   

       <div class="formBox">

        <div class="form-check check-box  comparateur-check ">
  <input class="form-check-input" type="radio" name="assurance_complementaire" id="flexRadioDefault5" value="Oui">
  <label class="form-check-label" for="flexRadioDefault5">
      Oui
  </label>
        </div>
      <div class="form-check check-box  comparateur-check">
  <input class="form-check-input" type="radio" name="assurance_complementaire" id="flexRadioDefault6" value="Non " checked>
  <label class="form-check-label" for="flexRadioDefault6">
      Non
   </label>
      </div>
 </div>      
</div> 
</div> 


          <div class="row box-shadows mb-5">

                     <div class="col-sm-6">   
                      <label class="title">
                        <span class="required" aria-required="true" style="color:blue;">Quel est votre assureur actuel ? </span>
                      </div>

                      <div class="col-sm-6">  
                      <div class="formBox">  
                      <div class="item-cont">
                        <div class="large">
                        <div class="element-multiple" title="assureuractuel">
                          <select id="assureuractuel" data-no-selected="assureuractuel *" name="assureuractuel" class="form-control" required="required" class="multiple" aria-required="true">
                            <option value="selectionner">Selectionner</option>
                            <option value="abeille assurances">ABEILLE ASSURANCES</option>
                            <option value="axa assurances">AXA ASSURANCES</option>
                            <option value="ager">AGER</option>
                            <option value="allianz">ALLIANZ</option>
                            <option value="alptis">ALPTIS</option>
                            <option value="Amf assurances">AMF ASSURANCES</option>
                            <option value="april">APRIL</option>
                            <option value="areas">AREAS</option>
                            <option value="assu 2000">ASSU 2000</option>
                            <option value="axa courtage">AXA COURTAGE</option>
                            <option value="cardif">CARDIF</option>
                            <option value="cic">CIC</option>
                            <option value="credit mutuel">CREDIT MUTUEL</option>
                            <option value="direct assurance">DIRECT ASSURANCE</option>
                            <option value="euro assurance">EURO ASSURANCE</option>
                            <option value="autre mutuelle">Autre Mutuelle</option>
                            <option value="je ne sais pas">Je ne sais pas </option>
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
                     <span class="required" aria-required="true" style="color:blue;"> Quel est le mois d'échéance de votre contrat actuel ?  </span>
                       </div>

                       <div class="col-sm-6">  
                        <div class="formBox">
                      <div class="item-cont">
                        <div class="large">
                        <div class="element-multiple" title="moisecheance">
                          <select id="moisecheance" data-no-selected="moisecheance *" name="moisecheance" class="form-control" required="required" class="multiple" aria-required="true">
                            <option value="selectionner">selectionner</option>
                            <option value="janvier">Janvier</option>
                            <option value="fevrier">FEVRIER</option>
                            <option value="mars">MARS</option>
                            <option value="avril">AVRIL</option>
                            <option value="mai">MAI</option>
                            <option value="juin">JUIN</option>
                            <option value="juillet">JUILLET</option>
                            <option value="aout">AOUT</option>
                            <option value="septembre">SEPTEMBRE</option>
                            <option value="octobre">OCTOBRE</option>
                            <option value="novembre">NOVEMBRE</option>
                            <option value="decembre">DECEMBRE</option>
                          </select>
						  
                        </div>
                      </div>
                </div>
              </div>
            </div>
      </div>
      
            <div class="row box-shadows mb-5">

            <div class="col-sm-6">  
        <label for="text" style="color:blue;"> Quel niveau de protection recherchez-vous ? </label> <br/>  
            </div>   

          <div class="col-sm-6">  
          <div class="formBox">

          <div class="form-check check-box  comparateur-check">
         <input class="form-check-input" type="radio" name="niveau_protection" id="flexRadioDefault7" value="formule economique">
         <label class="form-check-label" for="flexRadioDefault7">
          La formule économique
          </label>
         </div>

         <div class="form-check check-box  comparateur-check">
       <input class="form-check-input" type="radio" name="niveau_protection" id="flexRadioDefault8" value="formule budget" checked>
       <label class="form-check-label" for="flexRadioDefault8">
         La formule budget
       </label>
        </div>

        <div class="form-check check-box  comparateur-check">
         <input class="form-check-input" type="radio" name="niveau_protection" id="flexRadioDefault9" value="formule confort" >
         <label class="form-check-label" for="flexRadioDefault9">
          La formule confort
         </label>
        </div>

        <div class="form-check check-box  comparateur-check">
         <input class="form-check-input" type="radio" name="niveau_protection" id="flexRadioDefault10" value="formule serenite" checked>
        <label class="form-check-label" for="flexRadioDefault10">
           La formule sérénité
         </label>
        </div>


       </div>
       </div>
       </div>

     <button type="submit" class="btn-valider mb-5"> VALIDER  </button>
      </div>
  </div>
</div>

 </form>
@endsection