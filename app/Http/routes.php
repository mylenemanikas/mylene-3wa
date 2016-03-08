<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
 * Page Contact
 * /contact=>bout de l'URI
 */
Route::get('/contact', function(){
//Retourne la vue contact
return view('static/contact');

});

/*
 * Page Concept
 * /concept=> bout de l'URI
 */
Route::get('/concept', function(){
//Retourne la vue concept
    return view('static/concept');

});
/*
 * Page A propos
 * /A propos=> bout de l'URI
 */
Route::get('/apropos', function(){
//Retourne la vue a propos
    return view('static/apropos');

});







/*
 * uses:Permettant d'appeler un Controller
 * Nom du controler@Action du Controller
 * /lister=> bout de l'URI
 */
Route::group(['prefix'=>'movies'], function() {


    Route::get('/lister/', [
        'uses' => 'MoviesControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * action du Controller c'est une méthode du controller
     * /voir=> bout de l'URI
     */
    Route::get('/voir/{id}', [
        'as'=>'movies_voir',
        'uses' => 'MoviesControllers@voir'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer/{id}', [
        'uses' => 'MoviesControllers@creer'
    ]);
    Route::get('/editer/{id}', [
        'uses' => 'MoviesControllers@editer'
    ]);

});



Route::group(['prefix'=>'categories'], function() {
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/voir/{id}',[
        'uses'=>'CategoriesControllers@voir'
    ]);
    Route::get('/lister/', [
        'as'=>'movies_lister',
        'uses' => 'CategoriesControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer/{id}',[
        'uses'=>'CategoriesControllers@creer'
    ]);
    Route::get('/editer/',[
        'uses'=>'CategoriesControllers@editer'
    ]);

});

Route::group(['prefix'=>'actors'], function() {
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/voir/{id}',[
        'uses'=>'ActorsControllers@voir'
    ]);
    Route::get('/lister/', [
        'uses' => 'ActorsControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer/{id}',[
        'uses'=>'ActorsControllers@creer'
    ]);
    Route::get('/editer/{id}',[
        'uses'=>'ActorsControllers@editer'
    ]);
});




Route::group(['prefix'=>'directors'], function() {
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */

    //where permet de mettre une restriction au nivo de mon argument en URL
    Route::get('/voir/{id}',[
        'uses'=>'DirectorsControllers@voir'
    ])
    ->where('id','[0-9]+');

    Route::get('/lister/', [

        'uses' => 'DirectorsControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer/{id}',[
        'uses'=>'DirectorsControllers@creer'
    ]);
    Route::get('/editer/{id}',[
        'uses'=>'DirectorsControllers@editer'
    ]);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
