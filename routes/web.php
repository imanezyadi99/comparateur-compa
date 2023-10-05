<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComparateurAutoController;
use App\Http\Controllers\ComparateurSanteController;
use App\Http\Controllers\UserSubscriptionController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view ('welcome');
});
    
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/home', [HomeController::class, 'indexSend'])->name('indexsend');

Route::post('/message-recu', [HomeController::class, 'indexSend'])->name('indexpage');
Route::get('/message-recu', [HomeController::class, 'indexSendd'])->name('indexpagee');

Route::get('/propos', [HomeController::class, 'propos'])->name('propos');
Route::get('/auto', [HomeController::class, 'auto'])->name('auto');

Route::get('/contacter', [HomeController::class, 'contact'])->name('contact');
Route::post('/contacter', [HomeController::class, 'contactEnvoyer'])->name('contactenvoyer');

Route::get('/message_envoyé_avec_succés', [HomeController::class, 'Contactenvoyerr'])->name('contact_remerciement');


Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSend'])->name('contactsend');

Route::post('/merci-pour-message', [HomeController::class, 'contactSend'])->name('contactpage');
Route::get('/merci-pour-message', [HomeController::class, 'contactSendd'])->name('contactpagee');

Route::get('/sante', [HomeController::class, 'sante'])->name('sante');
Route::post('/sante', [HomeController::class, 'santeSend'])->name('santesend');

Route::post('/merci-pour-votre-message', [HomeController::class, 'santeSend'])->name('santepage');
Route::get('/merci-pour-votre-message', [HomeController::class, 'santeSendd'])->name('santepagee');




Route::get('/assurance_auto', [ComparateurAutoController::class, 'donnees_personnel'])->name('donnees_personnel');
Route::post('/assurance_auto', [ComparateurAutoController::class, 'donnees_personnel_create'])->name('donnees_personnel_create');

Route::get('/assurance_auto/coordonnees/{id_client}', [ComparateurAutoController::class, 'infos_personnel'])->name('infos_personnel');
Route::post('/assurance_auto/coordonnees', [ComparateurAutoController::class, 'infos_personnel_create'])->name('infos_personnel_create');

Route::get('/assurance_auto/vehicule/{id_client}', [ComparateurAutoController::class, 'infos_vehicule'])->name('infos_vehicule');
Route::post('/assurance_auto/vehicule', [ComparateurAutoController::class, 'infos_vehicule_create'])->name('infos_vehicule_create');

Route::get('/assurance_auto/antecedents/{id_client}', [ComparateurAutoController::class, 'info_antecedant'])->name('info_antecedant');
Route::post('/assurance_auto/antecedents', [ComparateurAutoController::class, 'info_antecedant_create'])->name('info_antecedant_create');


Route::get('/assurance_auto/remerciement', [ComparateurAutoController::class, 'remerciement'])->name('remerciement');





Route::get('/assurance_sante', [ComparateurSanteController::class, 'coordonnees'])->name('coordonnees');
Route::post('/assurance_sante', [ComparateurSanteController::class, 'coordonnees_create'])->name('coordonnees_create');

Route::get('/assurance_sante/profil/{id_client}', [ComparateurSanteController::class, 'info_profil'])->name('info_profil');
Route::post('/assurance_sante/profil', [ComparateurSanteController::class, 'info_profil_create'])->name('info_profil_create');

Route::get('/assurance_sante/projet/{id_client}', [ComparateurSanteController::class, 'info_sante'])->name('info_sante');
Route::post('/assurance_sante/projet', [ComparateurSanteController::class, 'info_sante_create'])->name('info_sante_create');

Route::get('/assurance_sante/remerciement_sante', [ComparateurSanteController::class, 'remerciement_sante'])->name('remerciement_sante');






Auth::routes([
    'register'=>false,
    'reset'=>false,
    'verify'=>false,

]);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboardindex');


Route::get('/dashboard/comparateur_auto', [DashboardController::class, 'auto'])->name('compauto');
Route::get('/dashboard/view_auto/{id}', [DashboardController::class, 'view_auto'])->name('view_auto');

Route::get('/dashboard/comparateur_sante', [DashboardController::class, 'sante'])->name('compsante');
Route::get('/dashboard/view_sante/{id}', [DashboardController::class, 'view_sante'])->name('view_sante');

Route::delete('/dashboard/view_auto/{id_client}', [DashboardController::class, 'destroy'])->name('destroy');
Route::delete('/dashboard/view_sante/{id_client}', [DashboardController::class, 'delete'])->name('delete');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout1');
Route::get('/test', [HomeController::class, 'test']);

Route::get('/testt', function(){
    Auth::user()->unreadNotifications->markAsRead();
})->name('markRead');

Route::get('/softDelete/{id}',[DashboardController::class, 'Softdelete'])->name('Softdelete');
Route::get('/softeDelete/{id}',[DashboardController::class, 'softedelete'])->name('softedelete');

Route::get('/search',[DashboardController::class, 'search'])->name('search');


Route::get('/exemple3', [HomeController::class, 'exemple3']);


Route::post('/exemple3', [UserSubscriptionController::class, 'postSubscribe'])->name('postSubscribe');
Route::post('/auto', [UserSubscriptionController::class, 'autoSubscribe'])->name('autoSubscribe');
Route::post('/propos', [UserSubscriptionController::class, 'proposSubscribe'])->name('proposSubscribe');
Route::post('/sante', [UserSubscriptionController::class, 'santeSubscribe'])->name('santeSubscribe');

Route::get('/exemple3', [UserSubscriptionController::class, 'getSubscribe'])->name('getSubscribe');
Route::get('/subscribe', [UserSubscriptionController::class, 'subscribe'])->name('subscribe');

Route::post('/message-recue', [HomeController::class, 'indexx'])->name('assurancepage');
Route::get('/message-recue', [HomeController::class, 'indexxSendd'])->name('indexpagee');

Route::get('/politique-de-confidentialite', [HomeController::class,'privacy'])->name('privacy');





