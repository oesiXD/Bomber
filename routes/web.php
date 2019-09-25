<?php
use App\Http\Controllers\FormularioController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::post('/contactar', 'FormularioController@contact')->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

Route::get('noticicias/aprobar/{id}',array('as'=>'aprobarN','uses'=>'Voyager\NoticiaController@aprobar'));
Route::get('galerias/aprobar/{id}',array('as'=>'aprobarG','uses'=>'Voyager\GaleriaController@aprobars'));

});





Route::resource('/Tareas','Eventcontroller');

Route::resource('/galerias','GaleriaController');

Route::get('/Foto/{id}','FotoController@show');

Route::get('/Mural','MuralController@index');

Route::get('/Mural/recargar', ['uses' => 'MuralController@recargar', 'as' => 'mural.recargar']); //ruta que enlazara con el controlador que recargara automaticamente el mural

Route::resource('/noticias','NoticiaController');

Route::get('/FotoNoticia/{id}','GaleriasController@show');

Route::resource('/historia','HistoriaController');

Route::resource('/inicio','IndexController');

Route::get('/postulacion','FormularioController@index')->name('postulacion');
Route::post('postulacion','FormularioController@store');
Route::view('/gracias','gracias');
