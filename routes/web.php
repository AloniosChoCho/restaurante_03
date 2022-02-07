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



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'IndexController@index')->name('Index');

/////////////
Route::get('/dashboard','DashboardController@index')->name ('Dashboard');
//email//
Route::get('/inbox','InboxController@index')->name ('Inbox');
Route::get('/email','EmailController@index')->name ('Email');
Route::get('/ecompose','EcomposeController@index')->name ('Compose');
//ui elements//
// Route::get('/alerts','UiAlertsController@index');
// Route::get('/buttons','UiButtonsController@index');
// Route::get('/badge','UiBadgeController@index');
// Route::get('/cards','UiCardsController@index');
// Route::get('/carousel','UiCarouselController@index');
// Route::get('/dropdowns','UiDropdownsController@index');
// Route::get('/grid','UiGridController@index');
// Route::get('/images','UiImagesController@index');
// Route::get('/modals','UiModalsController@index');
// Route::get('/pagination','UiPaginationController@index');
// Route::get('/popover-tollteps','UiPopoverController@index');
// Route::get('/progress','UiProgressController@index');
// Route::get('/tabs','UiTabsController@index');
// Route::get('/typography','UiTypographyController@index');
// Route::get('/video','UiVideoController@index');

// //conponentes
// Route::get('/lightbox','CompLightController@index');
// Route::get('/range','CompRangeController@index');
// Route::get('/session','CompTimeController@index');
// Route::get('/sweet','CompSweetController@index');

//extras//
/*
Route::get('/login','LoginController@index')->name ('Login');
Route::get('/recover','RecoverController@index')->name ('Recover');
Route::get('/register','RegisterController@index')->name ('Register');
*/

Route::get('/start','StarterController@index')->name ('Start');

Route::get('/users','UserController@index')->name('users');
Route::post('/user-store','UserController@store');
Route::post('/user-update','UserController@update');
Route::post('/user-update-state','UserController@updateState');
