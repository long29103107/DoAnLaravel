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
Route::get('tableuser', 'TableUserController@index')->name('TableUser.index');
Route::get('tableban', 'TableBanController@index')->name('TableBan.index');
Route::get('tablechitiethoadon', 'TableChiTietHoaDonController@index')->name('TableChiTietHoaDon.index');
Route::get('tablechitiethoadonnhap', 'TableChiTietHoaDonNhapController@index')->name('TableChiTietHoaDonNhap.index');
Route::get('tablehoadon', 'TableHoaDonController@index')->name('TableHoaDon.index');
Route::get('tablehoaodonnhap', 'TableHoaDonNhapController@index')->name('TableHoaDonNhap.index');
Route::get('tableloaiban', 'TableLoaiBanController@index')->name('TableLoaiBan.index');
Route::get('tableloaimonan', 'TableLoaiMonAnController@index')->name('TableLoaiMonAn.index');
Route::get('tablemonan', 'TableMonAnController@index')->name('TableMonAn.index');
Route::get('tablenguyenlieu', 'TableNguyenLieuController@index')->name('TableNguyenLieu.index');
Route::get('tablenhacungcap', 'TableNhaCungCapController@index')->name('TableNhaCungCap.index');
Route::get('signin', 'SignInController@index')->name('SignIn.index');
Route::get('signup', 'SignUpController@index')->name('SignUp.index');

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
