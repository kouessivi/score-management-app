<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ManageTeamControlleur;
use App\Http\Controllers\ManageMatchControlleur;


use App\Http\Controllers\ManageScoreControlleur;
use App\Http\Controllers\ManageTourControlleur;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 
Route::get('/', [ManageTourControlleur::class, 'index']) ;
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //team
    Route::get('/addteam', [ManageTeamControlleur::class, 'index'])->name('teamlist');
    Route::post('/teamsadd', [ManageTeamControlleur::class, 'store'])->name('teams.store');

    //Match
    Route::get('/listematch', [ManageMatchControlleur::class, 'create'])->name('matchlist');
    Route::post('/matchadd', [ManageMatchControlleur::class, 'store'])->name('matches.store');


        //score
        Route::get('/listescore', [ManageScoreControlleur::class, 'create'])->name('scorelist');
        Route::post('/scoreadd', [ManageScoreControlleur::class, 'store'])->name('scores.store');
        Route::get('/scorehome', [ManageScoreControlleur::class, 'index'])->name('scores.index');
});

require __DIR__.'/auth.php';
