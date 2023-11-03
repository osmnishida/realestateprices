<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelectPrefectureController;
use App\Http\Controllers\OPCodeController;
use App\Http\Controllers\TransactionCaseSearchController;
use App\Http\Controllers\LandPostController;
use App\Http\Controllers\AllSaveController;

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

Route::get('/', function () {
    return view('selectprefecture');
}) ->middleware('auth') ;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/selectprefecture',[SelectPrefectureController::class, 'selectprefecture'])->name('selectprefecture');
Route::get('/opcode',[OPCodeController::class, 'opcode']);
Route::get('/tcsearch',[TransactionCaseSearchController::class, 'tcsearch']);
Route::post('/landpost',[LandPostController::class, 'store']);
Route::get('/allsave',[AllSaveController::class, 'citycode']);
// Route::get('/selectprefecture/prefecturecode', function(){
    // $html = <<<EOF
    // <html>
    // <head>
    // <title>PrefectureCode</title>
    // </head>
    // <body>
    // <p>02</p>
    // </body>
    // </html>
    // EOF;
    // return $html;
// }); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
