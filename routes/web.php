<?php

use App\Http\Controllers\actualiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\offredemploiController;
use App\Http\Controllers\sendMailController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quisommesnous', function () {
    return view('quisommesnous');
})->name('quisommesnous');

Route::get('/certificationsetagrements', function () {
    return view('certificationsetagrements');
})->name('certificationsetagrements');

Route::get('/motdudg', function () {
    return view('motdudg');
})->name('motdudg');

//Route::get('/produits', function () {return view('produits');})->name('produits');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/actualite', function () {
    return view('actualite');
})->name('actualite');

Route::get('/product/{id}', [ProductsController::class,'index']);

Route::get('/produits', [CategoriesController::class,'list',])->name("produits");

/** Send contact email */
Route::get('/sendmail', [sendMailController::class,'sendMail',])->name("sendmail");

/** Newsletter contact subscribe */
Route::post('/newsletterSubscribe', [sendMailController::class,'newsletterSubscribe',])->name("newsletterSubscribe");

/** Carriere -- Offre d'emploi */
Route::get('offredemploi', [offredemploiController::class, 'offreDemploi'])->name('offredemploi');

/** Carriere --- Candidature spontan */
Route::get('candidaturespontane', [offredemploiController::class, 'candidaturespontane'])->name('candidaturespontane');

/** Carriere --- Candidature spontan2 */
Route::get('candidaturespontane2', [offredemploiController::class, 'candidaturespontane2'])->name('candidaturespontane2');

/** Offer job detail */
Route::get('detailoffredemploi', [offredemploiController::class, 'detail_offredemploi'])->name('detailoffredemploi');

/** Apply for the job Offer */
Route::post('sendjoboffer', [offredemploiController::class,'sendJobOffer',])->name("sendjoboffer");

/** Client Send his/her CV and Motivation letter */
Route::post('sendtoanyjoboffer', [offredemploiController::class,'sendtoanyjoboffer',])->name("sendtoanyjoboffer");

/** Carriere */
Route::get('actualite', [actualiteController::class, 'actualite'])->name('actualite');

/** detail evenement */
Route::get('detailevenement', [actualiteController::class, 'detailevenement'])->name('detailevenement');