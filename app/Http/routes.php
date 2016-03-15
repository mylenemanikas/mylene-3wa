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
/*'/' est l'url*/
Route::group(['middleware' => ['web']], function () {
    //

Route::get('/',[
    'as'=>'homepage',
    'uses'=>"HomeController@homepage"
]);

/*
 * Page Contact
 * /contact=>bout de l'URI
 */
/*'/contact'est l'url*/
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
        'as'=>'movies_lister',
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
    Route::get('/creer/', [
        'as'=>'movies_creer',
        'uses' => 'MoviesControllers@creer'
    ]);
    Route::get('/editer/{id}', [
        'as'=>'movies_editer',
        'uses' => 'MoviesControllers@editer'
    ]);
    // route en post
    Route::post('/enregistrer/',[
        'as'=>'movies_enregistrer',
        'uses'=>'MoviesControllers@enregistrer'
    ]);
    Route::get('/visible/{id}',[
        'as'=>'movies_visible',
        'uses'=>'MoviesControllers@visible'
    ]);
    Route::get('/invisible/{id}',[
        'as'=>'movies_invisible',
        'uses'=>'MoviesControllers@invisible'
    ]);
    Route::get('/cover/{id}',[
        'as'=>'movies_cover',
        'uses'=>'MoviesControllers@cover'
    ]);
    Route::get('/uncover/{id}',[
        'as'=>'movies_uncover',
        'uses'=>'MoviesControllers@uncover'
    ]);
    Route::get('/supprimer/{id}',[
        'as'=>'movies_supprimer',
        'uses'=>'MoviesControllers@supprimer'

    ]);


});



Route::group(['prefix'=>'categories'], function() {
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/voir/{id}',[
        'as'=>'categories_voir',
        'uses'=>'CategoriesControllers@voir'
    ]);
    Route::get('/lister/', [
        'as'=>'categories_lister',

        'uses' => 'CategoriesControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer',[
        'as'=>'categories_creer',
        'uses'=>'CategoriesControllers@creer'
    ]);
    Route::get('/editer/',[
        'uses'=>'CategoriesControllers@editer'
    ]);
    // route en post
    Route::post('/enregistrer',[
        'as'=>'categories_enregistrer',
        'uses'=>'CategoriesControllers@enregistrer'

    ]);
    Route::get('/supprimer/{id}',[
        'as'=>'category_supprimer',
        'uses'=>'CategoriesControllers@supprimer'

    ]);

});

Route::group(['prefix'=>'actors'], function() {
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/voir/{id}',[
        'as'=>'actors_voir',
        'uses'=>'ActorsControllers@voir'
    ]);
    Route::get('/lister/', [
        'as'=>'actors_lister',
        'uses' => 'ActorsControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer/',[
        'as'=>'actors_creer',
        'uses'=>'ActorsControllers@creer'
    ]);
    Route::get('/editer/{id}',[
        'uses'=>'ActorsControllers@editer'
    ]);
    // route en post
    Route::post('/enregistrer',[
        'as'=>'actors_enregistrer',
        'uses'=>'ActorsControllers@enregistrer'
    ]);
    Route::get('/supprimer/{id}',[
        'as'=>'actors_supprimer',
        'uses'=>'ActorsControllers@supprimer'

    ]);

});




Route::group(['prefix'=>'directors'], function() {
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */

    //where permet de mettre une restriction au nivo de mon argument en URL
    Route::get('/voir/',[
        'as'=>'directors_voir',
        'uses'=>'DirectorsControllers@voir'

    ]);
   /* ->where('id','[0-9]+');*/

    Route::get('/lister/', [
        'as'=>'directors_lister',
        'uses' => 'DirectorsControllers@lister'
    ]);
    /*
     * uses:Permettant d'appeler un Controller
     * Nom du controler@Action du Controller
     * /voir=> bout de l'URI
     */
    Route::get('/creer/',[
        'as'=>'directors_creer',
        'uses'=>'DirectorsControllers@creer'
    ]);
    Route::get('/editer/{id}',[
        'uses'=>'DirectorsControllers@editer'
    ]);
    // route en post
    Route::post('/enregistrer',[
        'as'=>'directors_enregistrer',
        'uses'=>'DirectorsControllers@enregistrer'
    ]);
    Route::get('/supprimer/{id}',[
        'as'=>'directors_supprimer',
        'uses'=>'DirectorsControllers@supprimer'
    ]);


});
    Route::group(['prefix'=>'user'], function() {


        Route::get('/lister/', [
            'as'=>'user_lister',
            'uses' => 'UserControllers@lister'
        ]);
        /*
         * uses:Permettant d'appeler un Controller
         * Nom du controler@Action du Controller
         * action du Controller c'est une méthode du controller
         * /voir=> bout de l'URI
         */
        Route::get('/voir/{id}', [
            'as'=>'user_voir',
            'uses' => 'UserControllers@voir'
        ]);
        /*
         * uses:Permettant d'appeler un Controller
         * Nom du controler@Action du Controller
         * /voir=> bout de l'URI
         */
        Route::get('/creer/', [
            'as'=>'user_creer',
            'uses' => 'UserControllers@creer'
        ]);
        Route::get('/editer/{id}', [
            'as'=>'user_editer',
            'uses' => 'UserControllers@editer'
        ]);
        // route en post
        Route::post('/enregistrer/',[
            'as'=>'user_enregistrer',
            'uses'=>'UserControllers@enregistrer'
        ]);
    });
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


