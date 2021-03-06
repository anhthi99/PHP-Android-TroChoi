<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('guimail/{email}','SendMailController@basic_email');
Route::get('linh-vuc','API\LinhVucController@index');
Route::get('cau-hoi','API\CauHoiController@layDSCauHoi');
Route::get('cau-hoi/{id}','API\CauHoiController@show');
Route::get('cau-hoi','API\CauHoiController@layDSCauHoiTheoLV');
Route::get('cau-hinh-app','API\CauHinhController@layCauHinhApp');
Route::get('cau-hinh-diem','API\CauHinhController@layCauHinhDiem');
Route::get('cau-hinh-tro-giup','API\CauHinhController@layCauHinhTroGiup');
Route::post('cap-nhat-thong-tin','API\NguoiChoiController@capNhatThongTin');
Route::post('cap-nhat-game','API\NguoiChoiController@capNhatSauKhiChoi');
Route::get('updateAvatar','API\NguoiChoiController@taiAnhLen');
Route::get('diem-cao','API\NguoiChoiController@top10');
Route::get('credit','API\GoiCreditController@layCredit');
Route::post('mua-credit','API\NguoiChoiController@muaCredit');
Route::get('luot-choi','API\NguoiChoiController@lichSuChoi');
Route::post('cap-nhat-lich-su','API\NguoiChoiController@capNhatLichSu');
Route::get('nguoi-choi','API\NguoiChoiController@layBangXepHang');
Route::post('dang-nhap', 'API\NguoiChoiLoginController@login');
Route::post('dang-ky','API\NguoiChoiController@dangKy');
Route::group(['assign.guard:api','jwt.auth'], function () {
    Route::get('lay-thong-tin','API\NguoiChoiLoginController@getUser');
});
