<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ReviewController;

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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('users', function () {
    return view('user');
});

Route::get('users/{name}/kids', function ($name = 'default') {
    return 'Page des Utilisateurs';
})->whereAlpha('name');

Route::get('users/{name}/kids/{namekid}', function ($name = 'default',$namekid = 'default') {
    return view('kid',['name'=>$name,'namekid'=>$namekid]);
})->whereAlpha('namekid');

Route::get('sommaire', function () {
    return 'SOMMAIRE';
});
Route::get('plan', function () {
    return redirect('/sommaire');
});

Route::redirect('/plan2', '/', 301);

Route::prefix('admin')->group(function () {

    Route::get('/voyageurs',function ($voyageurs = "voyageursdef"){
        return view('admin.voyageurs',['voyageurs'=>$voyageurs]);
    });
    Route::get('/destinations',function ($destinations = "destinationsdef"){
        return view('admin.destinations',['destinations'=>$destinations]);
    });
});

Route::get('hello', [ TripController::class, 'index']);*/
Route::get('/', [ HomeController::class, 'index']);

Route::get('site',[ HomeController::class, 'homeTravel']);

Route::resource('destinations', DestinationController::class);
Route::resource('reviews', ReviewController::class);


Route::fallback(function () {
    return 'Hm, comment avez-vous atterri ici ?';
});











/*
1- page welcome laravel
2- idem
3- idem
4- idem
5- idem
6- affiche la chaine
7- idem
8- The GET method is not supported for this route. Supported methods: POST.
9- Supported methods: DELETE.
10- Supported methods: PUT.
11- Supported methods: PATCH.
12- page welcome laravel
*/