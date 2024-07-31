<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SelectPrefectureController;
use App\Http\Controllers\OPCodeController;
use App\Http\Controllers\TransactionCaseSearchController;
use App\Http\Controllers\LandPostController;
use App\Http\Controllers\AllSaveController;
use App\Http\Controllers\ListDisplayController;
use App\Http\Controllers\PrefectureListDisplayController;
use App\Http\Controllers\CityCodePostController;
use App\Http\Controllers\ListDisplayCityController;
use App\Http\Controllers\ListDisplayCityResultController;
use App\Http\Controllers\PrefectureBarChartController;
use App\Http\Controllers\CityplanningBarChartController;
use App\Http\Controllers\SelectCityplanningController;
use App\Http\Controllers\SelectFloorAreaRatioController;
use App\Http\Controllers\FloorAreaRatioBarChartController;
use App\Http\Controllers\TestController;
use App\Service\SelectValue;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\CityCodeController;

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

// Route::get('/', function () {
    // return view('selectprefecture');
// }) ->middleware('auth') ;

Route::get('/',[IndexController::class, 'index'])->name('index');
// Route::get('/', function() {
    // return view('index');
// });

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/selectprefecture',[SelectPrefectureController::class, 'selectprefecture'])->name('selectprefecture');
Route::get('/opcode',[OPCodeController::class, 'opcode']);
Route::get('/tcsearch',[TransactionCaseSearchController::class, 'tcsearch']);
Route::post('/landpost',[LandPostController::class, 'store']);
Route::get('/allsave',[AllSaveController::class, 'citycode'])->name('allsave')->middleware('admin');
Route::get('/listdisplay',[ListDisplayController::class, 'listdisplay'])->name('listdisplay')->middleware('auth');
Route::get('/prefecturelistdisplay',[PrefectureListDisplayController::class, 'prefecture'])->name('prefecturelistdisplay');
Route::get('/citycodepost',[CityCodePostController::class, 'store'])->name('citycodepost');
Route::get('/listdisplaycity',[ListDisplayCityController::class, 'listdisplaycity'])->name('listdisplaycity')->middleware('auth');
Route::get('/listdisplaycityresult',[ListDisplayCityResultController::class, 'listdisplaycityresult'])->name('listdisplaycityresult');
Route::get('/selectprefecture',[SelectPrefectureController::class, 'selectprefecture'])->name('selectprefecture');
Route::get('/prefecturebarchart',[PrefectureBarChartController::class, 'prefecturebarchart'])->name('prefecturebarchart');
Route::get('/cityplanningbarchart',[CityplanningBarChartController::class, 'cityplanningbarchart'])->name('cityplanningbarchart');
Route::get('/selectcityplanning',[SelectCityplanningController::class, 'selectcityplanning'])->name('selectcityplanning');
Route::get('/selectfloorarearatio',[SelectFloorAreaRatioController::class, 'selectfloorarearatio'])->name('selectfloorarearatio');
Route::get('/floorarearatiobarchart',[FloorAreaRatioBarChartController::class, 'floorarearatiobarchart'])->name('floorarearatiobarchart');
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

Route::get('/test',[TestController::class, 'test'])->name('test');

Route::get('/municipality/{prefectureNumber}',[MunicipalityController::class, 'municipality'])->name('municipality');

require __DIR__.'/auth.php';
