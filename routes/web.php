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
// Route::get('tables', 'TablesController@index')->name('Tables.index');

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


//Table bàn
Route::get('tableban', 'TableBanController@index')->name('TableBan.index');

//Table chi tiết hoá đơn
Route::get('tablechitiethoadon', 'TableChiTietHoaDonController@index')->name('TableChiTietHoaDon.index');

//Table chi tiết hoá đơn nhập
Route::get('tablechitiethoadonnhap', 'TableChiTietHoaDonNhapController@index')->name('TableChiTietHoaDonNhap.index');

//Table hoá đơn
Route::get('tablehoadon', 'TableHoaDonController@index')->name('TableHoaDon.index');

//Table hoá đơn nhập
Route::get('tablehoadonnhap', 'TableHoaDonNhapController@index')->name('TableHoaDonNhap.index');

//Table loại bàn
Route::get('tableloaiban', 'TableLoaiBanController@index')->name('TableLoaiBan.index');

//Table loại món ăn
Route::get('tableloaimonan', 'TableLoaiMonAnController@index')->name('TableLoaiMonAn.index');
Route::get('tableloaimonan/create', 'TableLoaiMonAnController@create')->name('TableLoaiMonAn.create');
Route::post('tableloaimonan', 'TableLoaiMonAnController@store')->name('TableLoaiMonAn.store');

//Table món ăn
Route::get('tablemonan', 'TableMonAnController@index')->name('TableMonAn.index');

//Table nguyên liệu
Route::get('tablenguyenlieu', 'TableNguyenLieuController@index')->name('TableNguyenLieu.index');

//Table nhà cung cấp
Route::get('tablenhacungcap', 'TableNhaCungCapController@index')->name('TableNhaCungCap.index');


Route::get('signin', 'SignInController@index')->name('SignIn.index');
Route::get('signup', 'SignUpController@index')->name('SignUp.index');
