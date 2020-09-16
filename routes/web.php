<?php

use Illuminate\Support\Facades\Route;
use App\inscrits;

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

Route::get('/', [
	'as' => 'root_path',
	'uses' => 'WelcomeController@index' 
]);

Route::post('/signup',function(){
	// dd($_POST['name']);
	function vide( string $para){
		if($para == ""){
			return 'Veuillez renseigner ce champ';
		}

		return 'Good';

	}
	vide(request('name'));
	/* inscrits::create([
		'Noms' => request('name'),
		'Prenoms' => request('prename'),
		'Telephone' => request('phone'),
		'Email' => request('email'),
		'Modp' => request('mdp'),
		'Cmodp' => request('cmdp')
	]
	) */
});

Route::get('/signup',[
	'as' => 'signup_path',
	'uses' => 'SignupController@index' 
]);

Route::get('/accueil',[
	'as' => 'accueil_path',
	'uses' => 'AccueilController@index' 
]);
Route::get('/signin',[
	'as' => 'signin_path',
	'uses' => 'SigninController@index' 
]);
Route::get('/formation',[
	'as' => 'formation_path',
	'uses' => 'FormationController@index' 
]);

 