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

use App\User;
use Illuminate\Support\Facades\DB;

Route::get('/', 'WebsiteController@index');
Route::get('/user', 'WebsiteController@user')->name('home');
Route::get('/form', 'WebsiteController@form');
Route::post('/form_insert', 'WebsiteController@formInsert')->name('form.insert');
Route::get('/profile/view', 'WebsiteController@profile')->name('profile.view');
Route::get('/profile/edit', 'WebsiteController@profileEdit')->name('profile.edit');
Route::post('/profile/update', 'WebsiteController@profileUpdate')->name('profile.update');


Route::get('/con', function() {
    $user = User::find(73);
    dd(
        $user->details->maritalStatusR,
        $user->details->citizenshipR,
        $user->details->citizenshipOtherR,
        $user->details->employmentR,
        $user->details->qualificationR,
        $user->details->languageR
    );
});