<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AssureController;
use App\Http\Controllers\BeneficiaireController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ActeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PiecejointeController;





use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListeassuresController;
use App\Models\Article;
use App\Models\Assure;
use App\Models\Dossier;

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

Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('assure', AssureController::class)->middleware('auth');

Route::post('/dossier/store', [DossierController::class, 'store'])->name('dossier.store');
Route::get('/dossier', [DossierController::class, 'index'])->name('dossier.index');
Route::post('/dossier/{id}', [DossierController::class, 'destroy'])->name('dossier.destroy');
Route::get('/dossier/create', [DossierController::class, 'create'])->name('dossier.create');
Route::patch('/dossier/rejet/{id}', [DossierController::class, 'rejet'])->name('dossier.rejet');
Route::patch('/dossier/indemnise/{id}', [DossierController::class, 'indemnise'])->name('dossier.indemnise');
Route::patch('/dossier/incomplet/{id}', [DossierController::class, 'incomplet'])->name('dossier.incomplet');
Route::get('/dossier/{dossier}', [DossierController::class, 'show'])->name('dossier.show');
Route::get('/bordeuro/last', [DossierController::class, 'last_bordeuro'])->name('dordeuro.last');



Route::get('/beneficiaire/{id}', [beneficiaireController::class, 'index'])->name('beneficiaire');
Route::get('/beneficiaire/count', [beneficiaireController::class, 'count']);
Route::get('/add/{id}', [beneficiaireController::class, 'create'])->name('beneficiaire.add');
Route::get('/beneficiaire/top', [beneficiaireController::class, 'topbeneficiaires']);
Route::get('/beneficiaire/{beneficiaire}', [beneficiaireController::class, 'show'])->name('beneficiaire.show');
Route::post('/beneficiaire', [beneficiaireController::class, 'store'])->name('beneficiaire.store');
Route::patch('/beneficiaire/edit/{id}', [beneficiaireController::class, 'update'])->name('beneficiaire.edit');
Route::delete('/beneficiaire/delete/{id}', [beneficiaireController::class, 'delete'])->name('beneficiaire.destroy');
//   dossierform Routes
Route::resource('dossierform', DossierformController::class)->middleware('auth');

Route::middleware(['auth', 'role:superadmin'])->get('/r_user', [RoleController::class, 'index'])->name('role.index');
Route::middleware(['auth', 'role:superadmin'])->get('/r_user/{id}', [RoleController::class, 'show'])->name('user.show');
Route::middleware(['auth', 'role:superadmin'])->get('/statistique', [RoleController::class, 'index'])->name('role.index');
Route::get('/r_add', [RoleController::class, 'create'])->name('role.create');;
Route::post('/r_store', [RoleController::class, 'store'])->name('role.store');;
Route::delete('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.destroy');
Route::get('/role/{role}', [RoleController::class, 'show'])->name('role.show');
// Route::get('/r_user', [RoleController::class, 'index'])->name('role.index');

Route::get('/acte/{id}', [ActeController::class, 'index'])->name('acte');
Route::get('/acte/{id}/delete', [ActeController::class, 'delete'])->name('acte.delete');
Route::get('/add_acte/{id}', [ActeController::class, 'create'])->name('acte.add');
Route::post('/acte', [ActeController::class, 'store'])->name('acte.store');



Route::get('/statistique', [GoogleController::class, 'index'])->name('statistique');

Route::get('/dossierform', function () {
    return view('dossierform');
});
Route::get('/piece-jointe/{id}', [PiecejointeController::class, 'index'])->name('pj');
Route::get('/piece-jointe/{id}/add', [PiecejointeController::class, 'create'])->name('pj.add');
Route::post('/piece-jointe/{id}/store', [PiecejointeController::class, 'store'])->name('pj.store');
Route::get('/piece-jointe/{id}/download', [PiecejointeController::class, 'download'])->name('pj.download');
//dossierform fin Routes

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/private', function () {
        return 'Bonjour Admin';
    });
});
Route::get('/form', function () {
    return view('form');
});
// Route::get('/create_b', function(){
//     return view('assure/created_b');
// });


Route::post('/form', function () {
    $article = new Article();
    $article->title = request('title');
    $article->body = request('body');
    $article->save();

    return redirect('/form');
});


// Routes pour /assureform
