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

    Route::get('/', [
        'as' => 'static_welcome',
        'uses' => "HomeController@homepage"
    ]);

    /*
     * Page Contact
     * /contact=>bout de l'URI
     */
    /*'/contact'est l'url*/
    Route::get('/contact', [
        'as' => 'static_contact',
        'uses' => "StaticControllers@static"
    ]);

    /*
     * Page Concept
     * /concept=> bout de l'URI
     */
    Route::get('/concept', [
        'as' => 'static_concept',
        'uses' => "StaticControllers@static"
    ]);
    /*
     * Page A propos
     * /A propos=> bout de l'URI
     */
    Route::get('/apropos', [
        'as' => 'static_apropos',
        'uses' => "StaticControllers@static"
    ]);

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

    Route::post('/modifier/{id}', [
        'as'=>'movies_modifier',
        'uses' => 'MoviesControllers@modifier'
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

    // route panier
    Route::get('/panier/{id}',[
        'as'=>'movies_panier',
        'uses'=>'MoviesControllers@panier'
    ]);
    Route::get('/actualise',[
        'as'=>'movies_actualise',
        'uses'=>'MoviesControllers@actualise'
    ]);
    Route::get('/actualiserelement/{id}',[
        'as'=>'movies_actualiserelement',
        'uses'=>'MoviesControllers@actualiserelement'
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
        'as'=>'categories_editer',
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
        'as'=>'actors_editer',
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
    // route panier
    Route::get('/favoris/{id}',[
        'as'=>'actors_favoris',
        'uses'=>'ActorsControllers@favoris'
    ]);
    Route::get('/actualise',[
        'as'=>'actors_actualise',
        'uses'=>'ActorsControllers@actualise'
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
        'as'=>'directors_editer',
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
        Route::get('/supprimer/{id}',[
            'as'=>'user_supprimer',
            'uses'=>'UserControllers@supprimer'
        ]);

    });

    Route::group(['prefix'=>'comments'], function() {

        Route::get('/lister/', [
            'as'=>'comments_lister',
            'uses' => 'CommentsControllers@lister'
        ]);
        /*
         * uses:Permettant d'appeler un Controller
         * Nom du controler@Action du Controller
         * action du Controller c'est une méthode du controller
         * /voir=> bout de l'URI
         */
        Route::get('/voir/{id}', [
            'as'=>'comments_voir',
            'uses' => 'CommentsControllers@voir'
        ]);
        /*
         * uses:Permettant d'appeler un Controller
         * Nom du controler@Action du Controller
         * /voir=> bout de l'URI
         */
        Route::get('/creer/', [
            'as'=>'comments_creer',
            'uses' => 'CommentsControllers@creer'
        ]);
        Route::get('/editer/{id}', [
            'as'=>'comments_editer',
            'uses' => 'CommentsControllers@editer'
        ]);
        // route en post
        Route::post('/enregistrer/',[
            'as'=>'comments_enregistrer',
            'uses'=>'CommentsControllers@enregistrer'
        ]);
        Route::get('/supprimer/{id}',[
            'as'=>'comments_supprimer',
            'uses'=>'CommentsControllers@supprimer'
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

});

