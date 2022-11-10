<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\BilanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [Controller::class, 'welcome'])->name('welcome');

Route::get('/contact', function () { return view('contact');
});

// Route::get('/service', function () { return view('service');
// });

Route::get('/intervention', function () {  return view('intervention');
});

Route::get('/formation', [Controller::class, 'formations'])->name('formations');

Route::get('/nouvelle', [Controller::class, 'news'])->name('news');



Route::post('/send-mail',[ContactController::class,'SendMails'])->name('sendMail');

Route::get('create-pdf-file', [PDFController::class, 'index']);

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [Controller::class, 'welcome'])->name('welcome');

    Route::get('/dashbord', [Controller::class, 'index'])->name('index');
    Route::resource('bilans',BilanController::class);
    Route::get('/bilan/delete/{id}', [BilanController::class, 'deleteBilan'])->name('delete');

    Route::resource('news',NewsController::class);
    Route::get('/deleteImage/{id}', [NewsController::class, 'deleteImage'])->name('delete.image');
    Route::get('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('deletenews');

    Route::resource('formations',FormationController::class);
    Route::get('/formation/delete/{id}', [FormationController::class, 'deleteformations'])->name('formations.delete');



});

Route::group(['middleware' => ['auth', 'proposal']], function (){
    Route::post('/submit/{job}',[ProposalController::class,'store'])->name('proposals.store');
});


