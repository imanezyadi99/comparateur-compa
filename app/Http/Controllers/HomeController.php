<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Messagee;
use App\Models\Contact;
use App\Models\donnees_personnels;
use App\Models\santes_coordonnees;
use App\Models\Home;
use App\Models\contacter;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
     //    $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
      $cities = Cities::all();
        return view('site_web/home', ['cities' => $cities]);
    }
    public function propos()
    {
      return view('site_web/propos');
    }
   
    public function santee()
    {
      return view('site_web/santee');
    }
    public function auto()
    {
      return view('site_web/auto');
    }
    public function contact()
    {
      return view('site_web/contact');
    }
    public function sante()
    {
      return view('site_web/sante');
    }
    
    public function indexSend(Request $request)
    {
     
    $message = new Message();
    $message->civilite = request('civilite');
    $message->nom = request('nom');
    $message->prenom = request('prenom');
    $message->ville = request('ville');
    $message->email = request('email');
    $message->telephone = request('telephone');
    $message->disposition_vehicule = request('disposition_vehicule');
    $message->save();

    return redirect()->route('indexpage');
    }
    public function indexSendd()
    {
      return view('site_web/indexpagee');
    }
    public function santeSend(Request $request)
    {
     
    $messages = new Messagee();
    $messages->name = request('name');
    $messages->email = request('email');
    $messages->mutuelle = request('mutuelle');
    $messages->telephone = request('telephone');
    $messages->message = request('message');
   
    $messages->save();

    return redirect()->route('santepage');
    }
    public function santeSendd()
    {
      return view('site_web/santepagee');
    }
    public function contactSend(Request $request)
    {
     
    $contacts = new Contact();
    $contacts->name = request('name');
    $contacts->email = request('email');
    $contacts->subject = request('subject');
    $contacts->telephone = request('telephone');
    $contacts->message = request('message');
   
    $contacts->save();

    return redirect()->route('contactpage');
    }
    public function contactSendd()
    {
      return view('site_web/contactpagee');
    }

    public function test(){

      $auto = donnees_personnels::orderBy('created_at', 'desc')->get();
      $sante = santes_coordonnees::orderBy('created_at', 'desc')->get();

      return view('site_web/test', compact('auto', 'sante'));
    }
   
    public function exemple3(){

      
      return view('site_web/exemple3');
    }



    public function indexx(Request $request)
    {
     
    $home = new Home();
    $home->Nom = request('Nom');
    $home->Prenom = request('Prenom');
    $home->telephone = request('telephone');
    $home->email = request('email');
    $home->codepostale = request('codepostale');
    $home->assurance = request('assurance');
    $home->save();

    return redirect()->route('assurancepage');
    }

    public function indexxSendd()
    {
      return view('site_web/indexpagee');
    }


    public function contactenvoyer(Request $request)
    {
     
    $contacter = new contacter();
    $contacter->nom = request('nom');
    $contacter->phone = request('phone');
    $contacter->message = request('message');
    $contacter->save();

    return redirect()->route('contactpage');
    }
    public function Contactenvoyerr()
    {
      return view('site_web/contact_remerciement');
    }

    public function privacy()
    {
    return view('site_web/privacy');
    }

   
}
