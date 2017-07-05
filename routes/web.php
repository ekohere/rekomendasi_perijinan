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
    return redirect()->route('home');
});


Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

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
    Route::resource('roles', 'RoleController');

    Route::resource('user_role', 'UserRoleController', ['except' => [
        'create', 'store', 'show', 'destroy',
    ]]);

    Route::resource('permissions', 'PermissionController');

    Route::resource('users', 'UserController');
});

Route::resource('pegawais', 'PegawaiController');