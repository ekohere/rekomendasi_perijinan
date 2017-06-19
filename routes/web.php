<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('jenisInstitusis', 'JenisInstitusiController');

Route::resource('jenjangPendidikans', 'JenjangPendidikanController');

Route::resource('agamas', 'AgamaController');

Route::resource('statusRekomendasis', 'StatusRekomendasiController');

Route::resource('institusis', 'InstitusiController');

Route::resource('rekomReklameHasStatusRekomendasis', 'RekomReklameHasStatusRekomendasiController');

Route::resource('rekomendasiReklames', 'RekomendasiReklameController');

Route::resource('rekomendasis', 'RekomendasiController');

Route::resource('dataUsahas', 'DataUsahaController');

Route::resource('biodatas', 'BiodataController');

//zizaco entrust
Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');

    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

});

Route::resource('users', 'UserController');