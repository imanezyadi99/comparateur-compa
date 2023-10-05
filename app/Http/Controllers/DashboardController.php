<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donnees_personnels;
use App\Models\santes_coordonnees;



class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
       
            $auto = donnees_personnels::paginate();
            $sante = santes_coordonnees::paginate();

    
        return view('dashboard/index', compact('auto','sante'));
    }
  

     
    public function auto(){

        $auto = donnees_personnels::orderBy('created_at', 'desc')->get();
        return view('dashboard/comparateur_auto',compact('auto'));
    }
  

  

    public function view_auto($id){

        $client = donnees_personnels::findOrfail(decrypt($id));

        return view('dashboard/view_auto',compact('client'));
    }
    
    public function destroy($id_client){
        $auto = donnees_personnels::findOrfail(decrypt($id_client))->delete();
        return redirect('/dashboard')->with('message','Client a été supprimé avec succées');
        
    }
 

    public function sante(){

        $sante = santes_coordonnees::orderBy('created_at', 'desc')->get();
        return view('dashboard/comparateur_sante',compact('sante'));
    }

    public function view_sante($id){

        $client = santes_coordonnees::findOrfail(decrypt($id));
        
        return view('dashboard/view_sante',compact('client'));
    }

    public function delete($id_client){
        $sante = santes_coordonnees::findOrfail(decrypt($id_client))->delete();
        return redirect('/dashboard')->with('message','Client a été supprimé avec succées');
        
    }
    public function Softdelete($id){
        donnees_personnels::findOrfail(decrypt($id))->delete();
        return back();

    }
    public function softedelete($id){
        santes_coordonnees ::findOrfail(decrypt($id))->delete();
        return back();

    }
    public function search(){
        $search_text=$_GET['query'];
        $auto=donnees_personnels::where('name','LIKE','%'.$search_text.'%')->get();
        $sante= santes_coordonnees::where('name','LIKE','%'.$search_text.'%')->get();
        return view('dashboard/search',compact('auto','sante'));
    }

}
