@extends('layouts.dashboard')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

@section('content')

<div class="container box-shadows my-5">
  <div class="row ">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Assurance Sante</h1>

      <a href="{{ url('/dashboard')}}" class="btn btn-info">retour</a>
    </div>
  </div>
  <div class="row p-3">
    <div class="table-responsive">
      <table id="sante" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Civilite</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Ville</th>
            <th scope="col">Code postale</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Pages</th>
            <th scope="col">created at</th>
            <th scope="col">voir</th>
          </tr>
        </thead>
        <tbody>
          @foreach($sante as $s)
          <tr>
            <td>{{$s->civilite}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->prenom}}</td>
            <td>{{$s->ville}}</td>
            <td>{{$s->codepostale}}</td>
            <td>{{$s->email}}</td>
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
              {{ $s->created_at}}
            </td> 
          

            <td>
              <a href="{{ route('view_sante', [ 'id' =>encrypt($s->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
      $('#sante').DataTable({
        "pageLength": 1,
        "language": {
         "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
       }
      });
    });
  </script>



@endsection