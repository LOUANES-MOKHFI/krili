<?php

/*admin route*/
use App\Agence;
use App\Cars;
Route::group(['middleware' => ['web' , 'admin']], function(){
	Route::get('/admin','AdminController@index')->middleware('auth')->middleware('verified');;
    Route::get('/profil','AdminController@profil')->middleware('auth')->middleware('verified');;
    Route::put('/profil/{id}','AgenceController@update_profil');
	/*Contact*/
	Route::get('/admin/contact','ContactController@index');
    Route::get('/admin/contact/message_lu','ContactController@message_lu');
    Route::get('/admin/contact/message_non_lu','ContactController@message_non_lu');
	Route::get('/admin/contact/corbeille','ContactController@message_deleted');
    Route::get('/admin/contact/{id}','ContactController@show');
	Route::get('/admin/contact/{id}/delete','ContactController@destroy');
    Route::get('/admin/contact/{id}/supprimer','ContactController@delete');
    Route::get('/admin/search-message','ContactController@search_message');
    
    /*RESERVATION*/
    Route::get('/admin/reservation','ReservationController@all_reservation');
    Route::get('/admin/reservation/{id}','ReservationController@show_reservation');
    Route::get('/admin/reservation/{id}/effectuer','ReservationController@effectuer');


    /*demande*/

    Route::get('/admin/demande','AgenceController@demande');
    Route::get('/admin/demande/{id}','AgenceController@show_demande');
    Route::get('/admin/demande/{id}/confirmer','AdminController@confirmer');
    Route::get('/admin/demande/{id}/rejeter','AdminController@rejeter');

    /*Category*/

    Route::resource('admin/category','CategoryController');
    Route::get('admin/category/{id}/delete', 'CategoryController@destroy');
    Route::get('admin/search_category', 'CategoryController@search_category_admin');
    
    /*wilaya*/

    Route::resource('admin/wilaya','WilayaController');
    Route::get('admin/wilaya/{id}/delete', 'WilayaController@destroy');
    Route::get('admin/search_wilaya', 'WilayaController@search_wilaya_admin');
     /*agence*/

    Route::resource('admin/agence','AgenceController');
    Route::get('admin/agence/{id}/delete', 'AgenceController@destroy');
    Route::get('admin/search_agence', 'AgenceController@search_agence_admin');

        /*cars*/

    Route::resource('admin/cars','CarsController');
    Route::get('admin/cars/{id}/delete', 'CarsController@destroy');
    Route::get('admin/search_cars', 'CarsController@search_cars_admin');

    /*appartement*/

    Route::resource('admin/appartements','AppartementsController');
    Route::get('admin/appartements/{id}/delete', 'AppartementsController@destroy');
    Route::get('admin/search_appartements', 'AppartementsController@search_appartements_admin');

        /*Profil*/
    Route::get('/admin/profil', 'AdminController@profil');
	Route::get('/admin/modifier_profil', 'AdminController@edit_p');
	Route::put('/admin/modifier_profil/{id}', 'AdminController@update_profil');

	/*Membre*/

	 Route::resource('/admin/membre', 'MembreController');
    Route::get('/admin/membre/{id}/delete', 'MembreController@destroy');


    /* parametre de site */
    Route::get('/admin/sitesetting', 'SiteSettingController@index');
    Route::post('/admin/sitesetting', 'SiteSettingController@store');
    Route::post('/admin/sitesetting/{id}', 'SiteSettingController@update');
    /* parametre des images*/

     /* Service*/
    Route::get('/admin/sitesetting/service', 'ServiceController@index');
    Route::post('/admin/sitesetting/service', 'ServiceController@store_Service');
    Route::post('/admin/sitesetting/service/{id}', 'ServiceController@update');

    /*Gallerier*/
    Route::get('/admin/sitesetting/gallerie', 'GallerieController@index');
    Route::post('/admin/sitesetting/gallerie', 'GallerieController@store');
    Route::post('/admin/sitesetting/gallerie/{id}', 'GallerieController@update');
});


/*users route*/


Route::group(['middleware' => 'web'], function(){
Route::auth();
Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('/services', 'HomeController@services');
Route::get('/agences-des-vehicules', 'AgenceController@Agence_vehicules');
Route::get('/agences-des-vehicules/{id}/{name}', 'AgenceController@show_Agence_vehicules');
Route::get('/agences-des-appartements', 'AgenceController@Agence_appartements');
Route::get('/agences-des-appartements/{id}/{name}', 'AgenceController@show_Agence_appartements');
Route::get('/tout-les-vehicules', 'CarsController@all_cars');
Route::get('/tout-les-appartements', 'AppartementsController@all_appartements');
Route::get('/agences-des-vehicule/vehicule/{id}/{name}', 'CarsController@show_car');
Route::get('/agences-des-appartement/appartement/{id}/{name}', 'AppartementsController@show_appartement');

Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');

Route::get('/register-agence', 'AgenceController@register');
Route::post('/agence-register', 'AgenceController@register_store');
Route::get('/login-agence', 'AgenceController@login');
Route::post('/agence-login', 'AgenceController@login1');
/*page Contact nous*/
Route::post('/contact','ContactController@store');

/*location*/
Route::post('/vehicule/louer', 'ReservationController@reserver');
Route::post('/appartement/louer', 'ReservationController@reserver');

/*Filtre agence */
Route::get('/agences-des-vehicules/{wilaya}','AgenceController@filtre_agence_vheicule_by_wilaya');
Route::get('/agences-des-appartements/{wilaya}','AgenceController@filtre_agence_appartement_by_wilaya');

/*filtre Cars*/
Route::get('/tout-les-vehicules/{marque}','CarsController@filtre_by_marque');

/*filtre appartements*/
Route::get('/tout-les-appartements/{type}','AppartementsController@filtre_by_type');
Route::get('/tout-les-appartement/{wilaya}','AppartementsController@filtre_by_wilaya');


Route::get('/ajax-agence',function(){
$wilaya = $_GET['wilaya'];
 // dd($wilaya);
  $agence = Agence::where('wilaya','=',$wilaya)->get();

  return Response::json($agence);
});

Route::get('/ajax-cars',function(){
$agence = $_GET['agence'];
$agences = Agence::where('name',$agence)->first();
 if($agences === null){

 }else{
  $cars = Cars::where('id_agence','=',$agences->id)->get();
    return Response::json($cars);

}
});
});