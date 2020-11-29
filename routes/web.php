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
use App\LoaiBan;
use App\Ban;
use App\User;

Route::get('/', 'IndexController@index')->name('Indexindex');
Route::get('useradmin', 'UserAdminController@index')->name('UserAdminindex');
Route::get('dashboard', 'DashboardController@index')->name('Dashboardindex');
Route::get('tables', 'TablesController@index')->name('Tablesindex');
Route::get('signin', 'SignInController@index')->name('SignInindex');
Route::get('signup', 'SignUpController@index')->name('SignUpindex');

// Route::get('thu/{id}',function($id){
//     $loaiban = LoaiBan :: find($id);
//     foreach($loaiban->ban as $ban){
//         echo $ban->So."<br>";
//     }
// });
// Route::get('thu1',function(){
//     $ban = User :: find(1);
//     echo $ban->tai_khoan;
// });
