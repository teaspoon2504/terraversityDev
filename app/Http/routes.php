<?php

$s = 'public.';
Route::get('/',                             ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);

Route::get('/panduan',                        ['as' => $s . 'panduan',   'uses' => 'PagesController@getPanduan']);
Route::get('/faq',                            ['as' => $s . 'faq',   'uses' => 'PagesController@getFaq']);
Route::get('/tentang-terraversity',           ['as' => $s . 'tentang',   'uses' => 'PagesController@getTentang']);
Route::get('/voucher-input',                        ['as' => $s . 'voucher',   'uses' => 'PagesController@getVoucher']);
Route::get('/info-dvd',                       ['as' => $s . 'infodvd',   'uses' => 'PagesController@getInfodvd']);

$a = 'auth.';
Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
    $a = 'admin.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
    $a = 'user.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);
});

Route::group(['middleware' => 'auth:all'], function()
{
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});


Route::get('admin/home',                    'AdminController@getHome');
Route::get('admin/kupon/buat',              'KuponController@create');
Route::get('admin/subscribe/delete',        'KuponController@backToGuest');


Route::post('user/kupon/subscribe',         'KuponController@subscribe');
Route::get('user/materi',                   'UserController@getHome');
Route::get('user/voucher',                  'UserController@getVoucher');

Route::get('user/matematika-dasar-bab',    'UserController@getMatematikaDasarBab');
Route::get('user/matematika-ipa-bab',      'UserController@getMatematikaIpaBab');
Route::get('user/fisika-bab', 'UserController@getFisikaBab');
Route::get('user/kimia-bab', 'UserController@getKimiaBab');
Route::get('user/biologi-bab',             'UserController@getBiologiBab');
Route::get('user/inggris-bab',             'UserController@getInggrisBab');
Route::get('user/indonesia-bab',           'UserController@getIndonesiaBab');
Route::get('user/tpa-bab',                 'UserController@getTpaBab');

Route::get('user/matematika-dasar-tahun',  'UserController@getMatematikaDasarTahun');
Route::get('user/matematika-ipa-tahun',    'UserController@getMatematikaIpaTahun');
Route::get('user/fisika-tahun',            'UserController@getFisikaTahun');
Route::get('user/kimia-tahun',             'UserController@getKimiaTahun');
Route::get('user/biologi-tahun',           'UserController@getBiologiTahun');
Route::get('user/inggris-tahun',           'UserController@getInggrisTahun');
Route::get('user/indonesia-tahun',         'UserController@getIndonesiaTahun');
Route::get('user/tpa-tahun',               'UserController@getTpaTahun');
