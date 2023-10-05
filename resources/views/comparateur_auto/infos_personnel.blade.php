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
      
      <legend><span class="number">2</span>Mon besoin</legend>

      <form action="{{route('infos_personnel_create' , $client)}}" method="post">
        <h1> Comparateur Assurance Auto </h1>
        <br />
        @csrf

        <div class="row box-shadows mb-5">
          <input type="number" value="{{$client }}" name="donnees_personnels_id" hidden>
          <div class="col-md-6">
            <label class="control-label" for="Rvoiture" >Ma recherche concerne</label>
          </div>
          
          <div class="col-md-6">
            <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input " type="radio" name="Rvoiture" id="flexRadioDefault1" value="voiture_déja_possedé">
              <label class="form-check-label " for="flexRadioDefault1">
                Une voiture que je possède déjà
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Rvoiture" id="flexRadioDefault2" value="prochain_achat_première_voiture" >
              <label class="form-check-label" for="flexRadioDefault2">
                Le prochain achat d'une première voiture
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Rvoiture" id="flexRadioDefault3" value="prochain_achat_voiture_supplémentaire">
              <label class="form-check-label" for="flexRadioDefault3">
                Le prochain achat d'une voiture supplémentaire
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Rvoiture" id="flexRadioDefault4" value="prochain_achat_voiture_remplacement" >
              <label class="form-check-label" for="flexRadioDefault4">
                Le prochain achat d'une voiture de remplacement
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Rvoiture" id="flexRadioDefault5" value="voiture_sans_permis" >
              <label class="form-check-label" for="flexRadioDefault5">
                Une voiture sans permis
              </label>
            </div>
            
          </div>
        </div>
        </div>
    
    
      
        <div class="row box-shadows mb-5">
          <div class="btnn" >
            <img src="/images/info.svg" alt="">
          <div class="tooltip">
            <label for="titulaire" >Qui est le titulaire de la carte grise: </label> <hr>
            <div class="meduim">
            Il faut distinguer "conducteur" et "propriétaire".
             Le propriétaire du véhicule est le titulaire de la carte grise,
              même s'il ne le conduit jamais. Ainsi, dans le cas d'un leasing,
               le propriétaire de la carte grise est la société de leasing et non le conducteur du véhicule.
               </div>
          </div>
          </div>
        <div class="col-md-6">
      
          <label for="titulaire" >Qui est le titulaire de la carte grise ? : </label>
      
        </div>
        
        
        <div class="col-md-6">
      
          <div class="formBox">
          
            <div class="form-check check-box  comparateur-check">
            
              <input class="form-check-input" type="radio" name="titulaireCartegrise" id="flexRadioDefault6" value="Moi">
              <label class="form-check-label" for="flexRadioDefault6" >
                Moi(le conducteur principal)
              </label>
           
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="titulaireCartegrise" id="flexRadioDefault7" value="conjoint" checked>
              <label class="form-check-label" for="flexRadioDefault7">
                Mon conjoint ou concubin

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="titulaireCartegrise" id="flexRadioDefault8" value="deux">
              <label class="form-check-label" for="flexRadioDefault8">
                Moi et mon conjoint ou concubin

              </label>
            </div>
           
            
          </div>
      
      
          </div>
       
          
      
        
        </div>
      
     
      
        
     
     
    
    
    
      <div class="row box-shadows mb-5">
        <div class="col-md-6">
          <label class="title">
            <span class="required" aria-required="true" >Titulaire</span>
        </div>


        <div class="col-md-6">
          <div class="formBox">
            <div class="item-cont">
              <div class="large">
                <div title="Titulaire">
                  <select id="titulaire" data-no-selected="Titulaire *" name="titulaire" required="required"
                  class="form-control" aria-required="true">
                    <option value="autre titulaire">Autre titulaire</option>
                    <option value="mon enfant">mon enfant</option>
                    <option value="mon pere ou ma mere">mon pére ou ma mére</option>
                    <option value="societe de leasing">une société de leasing</option>
                    <option value="ma societe">Ma société</option>
                    <option value="autre cas">Autre cas</option>
                  </select>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-md-6">
          <div class="btnn" >
            <img src="/images/info.svg" alt="">
          <div class="tooltip">
            <label for="titulaire" >conducteur secondaire : </label> <hr>
            <div class="meduim">
              Un conducteur secondaire conduit le véhicule de manière régulière.
               Si la conduite est occasionnelle, il n'y a pas de conducteur secondaire.
               </div>
          </div>
          </div>
          <label for="recherche" >Conducteur secondaire: </label>
        </div>
       
        <div class="col-md-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Conducteursecondaire" id="flexRadioDefault9" value="Non">
              <label class="form-check-label" for="flexRadioDefault9">
                Non
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Conducteursecondaire" id="flexRadioDefault10" value="conjoint">
              <label class="form-check-label" for="flexRadioDefault10">
                Oui,mon conjoint ou concubin
              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="Conducteursecondaire" id="flexRadioDefault11" value="enfant">
              <label class="form-check-label" for="flexRadioDefault11">
                Oui, mon enfant
              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-md-6">
          <label for="date" >Date de Naissance: </label>
        </div>

        <div class="col-md-6">
          <div class="formBox">
            <input type="date" class="form-control" name="date" id="date">
          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-md-6">
          <label for="situation" >Situation matrimoniale: </label><br />
        </div>

        <div class="col-md-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="situationMatrimoniale" id="flexRadioDefault12" value="Marié(e)">
              <label class="form-check-label" for="flexRadioDefault12">
                Marié(e)

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="situationMatrimoniale" id="flexRadioDefault13" value="Pacsé(e)" checked>
              <label class="form-check-label" for="flexRadioDefault13">
                Pacsé(e)

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="situationMatrimoniale" id="flexRadioDefault14" value="concubinage">
              <label class="form-check-label" for="flexRadioDefault14">
                En concubinage
              </label>
            </div>

          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="profession" >Profession: </label><br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="profession" id="flexRadioDefault15" value="Employé_secteur_privé">
              <label class="form-check-label" for="flexRadioDefault15">
                Employé du secteur privé

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="profession" id="flexRadioDefault16" value="Employé_secteur_public" checked>
              <label class="form-check-label" for="flexRadioDefault16">
                Employé du secteur public


              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="profession" id="flexRadioDefault17" value="Etudiant">
              <label class="form-check-label" for="flexRadioDefault17">
                Etudiant

              </label>
            </div>

            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="profession" id="flexRadioDefault18" value="Retraité">
              <label class="form-check-label" for="flexRadioDefault18">
                Retraité


              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="profession" id="flexRadioDefault19" value="recherche_Emploi" checked>
              <label class="form-check-label" for="flexRadioDefault19">
                En recherche d'emploi
              </label>
            </div>

          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="permis" >Type de permis de conduire: </label><br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typepermis" id="flexRadioDefault20" value="Permis_B_Francais">
              <label class="form-check-label" for="flexRadioDefault20">
                Permis B Français


              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typepermis" id="flexRadioDefault21" value="Permis_étranger_dans_Union_Européenne" checked>
              <label class="form-check-label" for="flexRadioDefault21">
                Permis étranger dans l'Union Européenne

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="typepermis" id="flexRadioDefault22" value="Permis_étranger_hors_Union_Européenne">
              <label class="form-check-label" for="flexRadioDefault22">
                Permis étranger hors Union Européenne

              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-sm-6">

          <label for="question"> A-t-il déjà été suspendu, retiré ou annulé ? </label> <br />
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="suspendu_retire" id="flexRadioDefault23" value="Non" checked>
              <label class="form-check-label" for="flexRadioDefault23">
                Non,jamais

              </label>
            </div>
            <div class="form-check check-box  comparateur-check">
              <input class="form-check-input" type="radio" name="suspendu_retire" id="flexRadioDefault24" value="Oui" >
              <label class="form-check-label" for="flexRadioDefault24">
                Oui

              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="row box-shadows mb-5">
        <div class="col-sm-6">
          <label for="dateobtention" > Date d'obtention du permis actuel </label>
        </div>

        <div class="col-sm-6">
          <div class="formBox">
            <input type="date" class="form-control" name="dateobtentionpermis"><br />
          </div>
        </div>
      </div>
      <button type="submit" class="btn-valider mb-5"> VALIDER ET CONTINUER </button>
      </form>
    </div>
  </div>
</div>
 
@endsection