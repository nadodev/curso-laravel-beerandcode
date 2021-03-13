<?php

use Illuminate\Support\Facades\Route;

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
Route::namespace('\App\Http\Controllers\Site')->group(function(){
    /* rota da pagina inicial */
    Route::get('/', 'HomeController');

    /* rota de produto */
    Route::get('produtos', 'CategoryController@index');

    /* rota de produto/slug */
    Route::get('produtos/{slug}', 'CategoryController@show');

    /* rota de blog */
    Route::get('blog', 'BlogController');

    /* rota de sobre  */
    Route::view('sobre', 'site.about.index');

    /* rota de sobre  */
    Route::get('contato', 'ContactController@index');
    Route::post('contato', 'ContactController@contact');

});

