<?php

$s = 'public.';
Route::get('/',                             ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);
Route::get('/matematika-dasar-bab',         ['as' => $s . 'matematikadasarbab',   'uses' => 'PagesController@getMatematikaDasarBab']);
Route::get('/matematika-ipa-bab',           ['as' => $s . 'matematikaipabab',   'uses' => 'PagesController@getMatematikaIpaBab']);
Route::get('/fisika-bab',                   ['as' => $s . 'fisikabab',   'uses' => 'PagesController@getFisikaBab']);
Route::get('/kimia-bab',                    ['as' => $s . 'kimiabab',   'uses' => 'PagesController@getKimiaBab']);
Route::get('/biologi-bab',                  ['as' => $s . 'biologibab',   'uses' => 'PagesController@getBiologiBab']);
Route::get('/inggris-bab',                  ['as' => $s . 'inggrisbab',   'uses' => 'PagesController@getInggrisBab']);
Route::get('/indonesia-bab',                ['as' => $s . 'indonesiabab',   'uses' => 'PagesController@getIndonesiaBab']);
Route::get('/tpa-bab',                      ['as' => $s . 'tpabab',   'uses' => 'PagesController@getTpaBab']);

Route::get('/matematika-dasar-tahun',         ['as' => $s . 'matematikadasartahun',   'uses' => 'PagesController@getMatematikaDasarTahun']);
Route::get('/matematika-ipa-tahun',           ['as' => $s . 'matematikaipatahun',   'uses' => 'PagesController@getMatematikaIpaTahun']);
Route::get('/fisika-tahun',                   ['as' => $s . 'fisikatahun',   'uses' => 'PagesController@getFisikaTahun']);
Route::get('/kimia-tahun',                    ['as' => $s . 'kimiatahun',   'uses' => 'PagesController@getKimiaTahun']);
Route::get('/biologi-tahun',                  ['as' => $s . 'biologitahun',   'uses' => 'PagesController@getBiologiTahun']);
Route::get('/inggris-tahun',                  ['as' => $s . 'inggristahun',   'uses' => 'PagesController@getInggrisTahun']);
Route::get('/indonesia-tahun',                ['as' => $s . 'indonesiatahun',   'uses' => 'PagesController@getIndonesiaTahun']);
Route::get('/tpa-tahun',                      ['as' => $s . 'tpatahun',   'uses' => 'PagesController@getTpaTahun']);

Route::get('/panduan',                        ['as' => $s . 'panduan',   'uses' => 'PagesController@getPanduan']);
Route::get('/faq',                            ['as' => $s . 'faq',   'uses' => 'PagesController@getFaq']);
Route::get('/tentang-terraversity',           ['as' => $s . 'tentang',   'uses' => 'PagesController@getTentang']);
Route::get('/voucher',                        ['as' => $s . 'voucher',   'uses' => 'PagesController@getVoucher']);
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

Route::get('/user/matematika-dasar-bab',    'UserController@getMatematikaDasarBab');
Route::get('/user/matematika-ipa-bab',      'UserController@getMatematikaIpaBab');
Route::get('/user/fisika-bab',              'UserController@getFisikaBab');
Route::get('/user/kimia-bab',               'UserController@getKimiaBab');
Route::get('/user/biologi-bab',             'UserController@getBiologiBab');
Route::get('/user/inggris-bab',             'UserController@getInggrisBab');
Route::get('/user/indonesia-bab',           'UserController@getIndonesiaBab');
Route::get('/user/tpa-bab',                 'UserController@getTpaBab');

Route::get('/user/matematika-dasar-tahun',  'UserController@getMatematikaDasarTahun');
Route::get('/user/matematika-ipa-tahun',    'UserController@getMatematikaIpaTahun');
Route::get('/user/fisika-tahun',            'UserController@getFisikaTahun');
Route::get('/user/kimia-tahun',             'UserController@getKimiaTahun');
Route::get('/user/biologi-tahun',           'UserController@getBiologiTahun');
Route::get('/user/inggris-tahun',           'UserController@getInggrisTahun');
Route::get('/user/indonesia-tahun',         'UserController@getIndonesiaTahun');
Route::get('/user/tpa-tahun',               'UserController@getTpaTahun');
