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

Route::get('/', 'IndexController@index')->name('Index.index');
Route::get('useradmin', 'UserAdminController@index')->name('UserAdmin.index');
Route::get('dashboard', 'DashboardController@index')->name('Dashboard.index');

//Table user
Route::get('tableuser', 'TableUserController@index')->name('TableUser.index');
Route::get('tableuser/create', 'TableUserController@create')->name('TableUser.create');
Route::post('tableuser', 'TableUserController@store')->name('TableUser.store');
Route::get('tableuser/{id}/edit', 'TableUserController@edit')->name('TableUser.edit');
Route::put('tableuser/{id}', 'TableUserController@update')->name('TableUser.update');
Route::get('tableuser/{id}/active', 'TableUserController@showactive')->name('TableUser.showactive');
Route::put('tableuser/{id}/active', 'TableUserController@active')->name('TableUser.active');
Route::get('tableuser/{id}', 'TableUserController@show')->name('TableUser.show');
Route::delete('tableuser/{id}', 'TableUserController@destroy')->name('TableUser.destroy');
Route::get('login', 'TableUserController@getLogin')->name('Login.get');
Route::post('login', 'TableUserController@postLogin')->name('Login.post');

//Table bàn
Route::get('tableban', 'TableBanController@index')->name('TableBan.index');
Route::get('tableban/create', 'TableBanController@create')->name('TableBan.create');
Route::post('tableban', 'TableBanController@store')->name('TableBan.store');
Route::get('tableban/{id}/edit', 'TableBanController@edit')->name('TableBan.edit');
Route::put('tableban/{id}', 'TableBanController@update')->name('TableBan.update');
Route::get('tableban/{id}', 'TableBanController@show')->name('TableBan.show');
Route::delete('tableban/{id}', 'TableBanController@destroy')->name('TableBan.destroy');

//Table chi tiết hoá đơn
Route::get('tablechitiethoadon', 'TableChiTietHoaDonController@index')->name('TableChiTietHoaDon.index');

//Table chi tiết hoá đơn nhập
Route::get('tablechitiethoadonnhap', 'TableChiTietHoaDonNhapController@index')->name('TableChiTietHoaDonNhap.index');

//Table hoá đơn
Route::get('tablehoadon', 'TableHoaDonController@index')->name('TableHoaDon.index');
Route::get('tablehoadon/create', 'TableHoaDonController@create')->name('TableHoaDon.create');

//Table hoá đơn nhập
Route::get('tablehoadonnhap', 'TableHoaDonNhapController@index')->name('TableHoaDonNhap.index');
Route::get('tablehoadonnhap/create', 'TableHoaDonNhapController@create')->name('TableHoaDonNhap.create');
Route::post('tablehoadonnhap', 'TableHoaDonNhapController@store')->name('TableHoaDonNhap.store');
Route::get('tablehoadonnhap/{id}/edit', 'TableHoaDonNhapController@edit')->name('TableHoaDonNhap.edit');
Route::put('tablehoadonnhap/{id}', 'TableHoaDonNhapController@update')->name('TableHoaDonNhap.update');
Route::get('tablehoadonnhap/{id}', 'TableHoaDonNhapController@show')->name('TableHoaDonNhap.show');
Route::delete('tablehoadonnhap/{id}', 'TableHoaDonNhapController@destroy')->name('TableHoaDonNhap.destroy');

//Table loại bàn
Route::get('tableloaiban', 'TableLoaiBanController@index')->name('TableLoaiBan.index');
Route::get('tableloaiban/create', 'TableLoaiBanController@create')->name('TableLoaiBan.create');
Route::post('tableloaiban', 'TableLoaiBanController@store')->name('TableLoaiBan.store');
Route::get('tableloaiban/{id}/edit', 'TableLoaiBanController@edit')->name('TableLoaiBan.edit');
Route::put('tableloaiban/{id}', 'TableLoaiBanController@update')->name('TableLoaiBan.update');
Route::get('tableloaiban/{id}', 'TableLoaiBanController@show')->name('TableLoaiBan.show');
Route::delete('tableloaiban/{id}', 'TableLoaiBanController@destroy')->name('TableLoaiBan.destroy');

//Table loại món ăn
Route::get('tableloaimonan', 'TableLoaiMonAnController@index')->name('TableLoaiMonAn.index');
Route::get('tableloaimonan/create', 'TableLoaiMonAnController@create')->name('TableLoaiMonAn.create');
Route::post('tableloaimonan', 'TableLoaiMonAnController@store')->name('TableLoaiMonAn.store');
Route::get('tableloaimonan/{id}/edit', 'TableLoaiMonAnController@edit')->name('TableLoaiMonAn.edit');
Route::put('tableloaimonan/{id}', 'TableLoaiMonAnController@update')->name('TableLoaiMonAn.update');
Route::get('tableloaimonan/{id}', 'TableLoaiMonAnController@show')->name('TableLoaiMonAn.show');
Route::delete('tableloaimonan/{id}', 'TableLoaiMonAnController@destroy')->name('TableLoaiMonAn.destroy');

//Table món ăn
Route::get('tablemonan', 'TableMonAnController@index')->name('TableMonAn.index');
Route::get('tablemonan/create', 'TableMonAnController@create')->name('TableMonAn.create');
Route::post('tablemonan', 'TableMonAnController@store')->name('TableMonAn.store');
Route::get('tablemonan/{id}/edit', 'TableMonAnController@edit')->name('TableMonAn.edit');
Route::put('tablemonan/{id}', 'TableMonAnController@update')->name('TableMonAn.update');
Route::get('tablemonan/{id}', 'TableMonAnController@show')->name('TableMonAn.show');
Route::delete('tablemonan/{id}', 'TableMonAnController@destroy')->name('TableMonAn.destroy');

//Table nguyên liệu
Route::get('tablenguyenlieu', 'TableNguyenLieuController@index')->name('TableNguyenLieu.index');

//Table nhà cung cấp
Route::get('tablenhacungcap', 'TableNhaCungCapController@index')->name('TableNhaCungCap.index');
Route::get('tablenhacungcap/create', 'TableNhaCungCapController@create')->name('TableNhaCungCap.create');
Route::post('tablenhacungcap', 'TableNhaCungCapController@store')->name('TableNhaCungCap.store');
Route::get('tablenhacungcap/{id}/edit', 'TableNhaCungCapController@edit')->name('TableNhaCungCap.edit');
Route::put('tablenhacungcap/{id}', 'TableNhaCungCapController@update')->name('TableNhaCungCap.update');
Route::get('tablenhacungcap/{id}', 'TableNhaCungCapController@show')->name('TableNhaCungCap.show');
Route::delete('tablenhacungcap/{id}', 'TableNhaCungCapController@destroy')->name('TableNhaCungCap.destroy');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

