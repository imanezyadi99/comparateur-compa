@extends('layouts.dashboard')

@section('content')
<div class="row my-5">
  @if(session('message'))
    <div class="alert alert-success" role="alert">
      <h4 class="text-center">{{session('message')}}</h4>
    </div>
  @endif
    <div class="col-md-6 ">
        <div class="card text-center">
            <div class="card-header">
            Assurance Auto
            </div>
            <div class="card-body">
                <div class="row p-3">
                    <div class="table-responsive">  
                      <table id="auto" class="table table-striped"   >
                          <thead>
                            <tr>
                              <th scope="col">Civilite</th>
                              <th scope="col">Nom Complet</th>
                              <th scope="col">Telephone</th>
                              <th scope="col">pages</th>
                              <th scope="col">created_at</th>
                              <th scope="col">heure</th>
                              <th scope="col">voir</th>
                              <th scope="col">Delete</th>

                            </tr>
                          </thead>
                          <tbody>
                            
                              @foreach($auto as $p)
                            <tr>
                              <td>{{$p->civilitee}}</td>
                              <td>{{$p->name}} {{$p->prenom}}</td>
                              <td>{{$p->tel}}</td>
                      
                             
                              <td>
                                <div class="d-flex justify-content-center">
                
                                  @isset($p->infospersonnel) 
                                   <button class="bg-success text-white me-1">1</button>
                                   @else
                                   <button  class="bg-danger text-white me-1">1</button>
                                   @endisset
                                   @isset($p->infosvehicule) 
                                   <button class="bg-success text-white me-1">2</button>
                                   @else
                                   <button  class="bg-danger text-white me-1">2</button>
                                   @endisset
                                   @isset($p->infoantecedants) 
                                  <button class="bg-success text-white me-1">3</button>
                                  @else
                                  <button  class="bg-danger text-white me-1">3</button>
                                  @endisset
                                </div>
                              </td> 
                               <td>
                                 {{ $p->created_at->format('m-d')}}
                               </td>
                               <td>
                                  {{ $p->created_at->format('h:i')}}
                                </td>
                
                               <td>
                                <a   href="{{ route('view_auto', [ 'id' => encrypt($p->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                               </td>  

                               <td>
                                <a   href="softDelete/{{$p->id}}) "><i class="fa fa-trash" aria-hidden="true"></i></a>

                               </td>
                            </tr>
                            @endforeach
                        
                          </tbody>
                      </table>

              
                    </div>  
                  </div>
           
            </div>
            <div class="card-footer text-muted">
                <a href="{{route('compauto')}}">Voir toute la liste</a>

            </div>
            <button class="btn btn-success" onclick="exportTableToExcel('auto', 'fiche Excel auto')">Exporter en Excel</button>

          </div>
          


    </div>
  

<div class="col-md-6">
    <div class="card text-center">
      
        <div class="card-header">
          Assurance Sante
        </div>
        <div class="card-body">
            <div class="row p-3">
                <div class="table-responsive">
                  <table id="sante"  class="table table-striped"  >
                    <thead>
                      <tr>
                        <th scope="col">Civilite</th>
                        <th scope="col">Nom Complet</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Pages</th>
                        <th scope="col">created_at</th>
                        <th scope="col">heure</th>
                        <th scope="col">voir</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                 
                      @foreach($sante as $s)
                      <tr>
                        <td>{{$s->civilite}}</td>
                        <td>{{$s->name}} {{$s->prenom}}</td>
                        <td>{{$s->telephone}}</td>
                    
            
                        <td>
                          <div class="d-flex justify-content-center">
                          @isset($s->profile)
                          <button class="bg-success text-white me-1">1</button>
                          @else
                          <button  class="bg-danger text-white me-1">1</button>
                          @endisset
                      
                          @isset($s->infossante)
                          <button class="bg-success text-white me-1">2</button>
                          @else
                          <button  class="bg-danger text-white me-1">2</button>
                          @endisset
                          </div>
                        </td>
            
                        
                    
                        <td>
                        {{ $s->created_at->format('m-d')}}
                         </td>
                        <td>
                         {{ $s->created_at->format('h:i')}}
                        </td>
            
            
                        <td>
                          <a href="{{ route('view_sante', [ 'id' =>encrypt( $s->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </td>

                        <td>
                          <a   href="softeDelete/{{$s->id}}) "><i class="fa fa-trash" aria-hidden="true"></i></a>

                         </td>
                      </tr>
                      @endforeach
                   
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
        <div class="card-footer text-muted">
            <a href="{{route('compsante')}}">Voir toute la liste</a>
        </div>

        <button class="btn btn-success" onclick="exportTableToExcel('sante', 'fiche Excel sante')">Exporter en Excel</button>


  
      </div>
</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", type="text/javascript">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>





  <script>
    $(document).ready(function() {
      $('#sante').DataTable({
        "pageLength": 2,
        "language": {
         "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
       }
      });
    });
    </script>
  
  <script>
    $(document).ready(function() {
      $('#auto').DataTable({
        "pageLength": 2,
        "language": {
         "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
       }
      });
    });
  </script>

  <script>
  function exportTableToExcel(tableID, filename = ''){
    const wb = XLSX.utils.table_to_book(document.querySelector(`#${tableID}`), { sheet: filename });
    XLSX.writeFile(wb, `${filename}.xlsx`);
   }
   </script>



  @endsection
  
 
  
  
  

