<?php

$s = 'public.';
Route::get('/',['as' => $s . 'home',   'uses' => 'PagesController@getHome']);

// Subject
Route::get('/matematika-dasar/{year}', 'MatematikaDasarController@getPageOnYear');

// Matematika Dasar Per-Tahun
Route::get('/matematikadasar/2009',  ['as' => $s . 'matdas09',   'uses' => 'MatematikaDasarController@getMatdas09']);
Route::get('/matematikadasar/2010',  ['as' => $s . 'matdas10',   'uses' => 'MatematikaDasarController@getMatdas10']);
Route::get('/matematikadasar/2011',  ['as' => $s . 'matdas11',   'uses' => 'MatematikaDasarController@getMatdas11']);
Route::get('/matematikadasar/2012',  ['as' => $s . 'matdas12',   'uses' => 'MatematikaDasarController@getMatdas12']);
Route::get('/matematikadasar/2013',  ['as' => $s . 'matdas13',   'uses' => 'MatematikaDasarController@getMatdas13']);
Route::get('/matematikadasar/2014',  ['as' => $s . 'matdas14',   'uses' => 'MatematikaDasarController@getMatdas14']);
Route::get('/matematikadasar/2015',  ['as' => $s . 'matdas15',   'uses' => 'MatematikaDasarController@getMatdas15']);
// Matematika Dasar Per-Bab
Route::get('/matematikadasar/eksponendanlogaritma',     ['as' => $s . 'eksponendanlogaritma',         'uses'  => 'MatematikaDasarController@getEksponendanlogaritma']);
Route::get('/matematikadasar/persamaankuadrat',         ['as' => $s . 'persamaankuadrat',             'uses'  => 'MatematikaDasarController@getPersamaankuadrat']);
Route::get('/matematikadasar/fungsikuadrat',            ['as' => $s . 'fungsikuadrat',                'uses'  => 'MatematikaDasarController@getFungsikuadrat']);
Route::get('/matematikadasar/pertidaksamaan',           ['as' => $s . 'pertidaksamaan',               'uses'  => 'MatematikaDasarController@getPertidaksamaan']);
Route::get('/matematikadasar/spldanprogramlinear',      ['as' => $s . 'spldanprogramlinear',          'uses'  => 'MatematikaDasarController@getSpldanprogramlinear']);
Route::get('/matematikadasar/logika',                   ['as' => $s . 'logika',                       'uses'  => 'MatematikaDasarController@getLogika']);
Route::get('/matematikadasar/fungsi',                   ['as' => $s . 'fungsi',                       'uses'  => 'MatematikaDasarController@getFungsi']);
Route::get('/matematikadasar/turunan',                  ['as' => $s . 'turunan',                      'uses'  => 'MatematikaDasarController@getTurunan']);
Route::get('/matematikadasar/persamaangaris',           ['as' => $s . 'persamaangaris',               'uses'  => 'MatematikaDasarController@getPersamaangaris']);
Route::get('/matematikadasar/trigonometri',             ['as' => $s . 'trigonometri',                 'uses'  => 'MatematikaDasarController@getTrigonometri']);
Route::get('/matematikadasar/peluang',                  ['as' => $s . 'peluang',                      'uses'  => 'MatematikaDasarController@getPeluang']);
Route::get('/matematikadasar/bidangdatar',              ['as' => $s . 'bidangdatar',                  'uses'  => 'MatematikaDasarController@getBidangdatar']);
Route::get('/matematikadasar/matriks',                  ['as' => $s . 'matriks',                      'uses'  => 'MatematikaDasarController@getMatriks']);
Route::get('/matematikadasar/barisandanderet',          ['as' => $s . 'barisandanderet',              'uses'  => 'MatematikaDasarController@getBarisandanderet']);
Route::get('/matematikadasar/dimensitiga',              ['as' => $s . 'dimensitiga',                  'uses'  => 'MatematikaDasarController@getDimensitiga']);
Route::get('/matematikadasar/statistika',               ['as' => $s . 'statistika',                   'uses'  => 'MatematikaDasarController@getStatistika']);
Route::get('/matematikadasar/materidasar',              ['as' => $s . 'materidasar',                  'uses'  => 'MatematikaDasarController@getMateridasar']);
Route::get('/matematikadasar/pendahuluan',              ['as' => $s . 'pendahuluan',                  'uses'  => 'MatematikaDasarController@getPendahuluan']);

//Matematika IPA Per-Tahun
Route::get('/matematikaipa/2009',  ['as' => $s . 'matipa09',   'uses' => 'MatematikaIPAController@getMatIPA09']);
Route::get('/matematikaipa/2010',  ['as' => $s . 'matipa10',   'uses' => 'MatematikaIPAController@getMatIPA10']);
Route::get('/matematikaipa/2011',  ['as' => $s . 'matipa11',   'uses' => 'MatematikaIPAController@getMatIPA11']);
Route::get('/matematikaipa/2012',  ['as' => $s . 'matipa12',   'uses' => 'MatematikaIPAController@getMatIPA12']);
Route::get('/matematikaipa/2013',  ['as' => $s . 'matipa13',   'uses' => 'MatematikaIPAController@getMatIPA13']);
Route::get('/matematikaipa/2014',  ['as' => $s . 'matipa14',   'uses' => 'MatematikaIPAController@getMatIPA14']);
Route::get('/matematikaipa/2015',  ['as' => $s . 'matipa15',   'uses' => 'MatematikaIPAController@getMatIPA15']);
// Matematika IPA Per-Bab
Route::get('/matematikaipa/pertidaksamaan',         ['as' => $s . 'pertidaksamaan',           'uses' => 'MatematikaIPAController@getPertidaksamaan']);
Route::get('/matematikaipa/vektor',                 ['as' => $s . 'vektor',                   'uses' => 'MatematikaIPAController@getVektor']);
Route::get('/matematikaipa/dimensitiga',            ['as' => $s . 'dimensitiga',              'uses' => 'MatematikaIPAController@getDimensitiga']);
Route::get('/matematikaipa/integral',               ['as' => $s . 'integral',                 'uses' => 'MatematikaIPAController@getIntegral']);
Route::get('/matematikaipa/barisandanderet',        ['as' => $s . 'barisandanderet',          'uses' => 'MatematikaIPAController@getBarisandanderet']);
Route::get('/matematikaipa/turunan',                ['as' => $s . 'turunan',                  'uses' => 'MatematikaIPAController@getTurunan']);
Route::get('/matematikaipa/fungsi',                 ['as' => $s . 'fungsi',                   'uses' => 'MatematikaIPAController@getFungsi']);
Route::get('/matematikaipa/bangundatar',            ['as' => $s . 'bangundatar',              'uses' => 'MatematikaIPAController@getBangundatar']);
Route::get('/matematikaipa/trigonometri',           ['as' => $s . 'trigonometri',             'uses' => 'MatematikaIPAController@getTrigonometri']);
Route::get('/matematikaipa/sukubanyak',             ['as' => $s . 'sukubanyak',               'uses' => 'MatematikaIPAController@getSukubanyak']);
Route::get('/matematikaipa/matematikaipa',          ['as' => $s . 'matematikaipa',            'uses' => 'MatematikaIPAController@getMatematikaipa']);
Route::get('/matematikaipa/limit',                  ['as' => $s . 'limit',                    'uses' => 'MatematikaIPAController@getLimit']);
Route::get('/matematikaipa/lingkaran',              ['as' => $s . 'lingkaran',                'uses' => 'MatematikaIPAController@getLingkaran']);
Route::get('/matematikaipa/peluang',                ['as' => $s . 'peluang',                  'uses' => 'MatematikaIPAController@getPeluang']);
Route::get('/matematikaipa/transformasi',           ['as' => $s . 'transformasi',             'uses' => 'MatematikaIPAController@getTransformasi']);
Route::get('/matematikaipa/persamaankuadrat',       ['as' => $s . 'persamaankuadrat',         'uses' => 'MatematikaIPAController@getPersamaankuadrat']);
Route::get('/matematikaipa/fungsikuadrat',          ['as' => $s . 'fungsikuadrat',            'uses' => 'MatematikaIPAController@getFungsikuadrat']);
Route::get('/matematikaipa/eksponendanlogaritma',   ['as' => $s . 'eksponendanlogaritma',     'uses' => 'MatematikaIPAController@getEksponendanlogaritma']);
Route::get('/matematikaipa/matriks',                ['as' => $s . 'matriks',                  'uses' => 'MatematikaIPAController@getMatriks']);


// Fisika Per-Tahun
Route::get('/fisika/2005',  ['as' => $s . 'fisika05',   'uses' => 'FisikaController@getFisika05']);
Route::get('/fisika/2006',  ['as' => $s . 'fisika06',   'uses' => 'FisikaController@getFisika06']);
Route::get('/fisika/2007',  ['as' => $s . 'fisika07',   'uses' => 'FisikaController@getFisika07']);
Route::get('/fisika/2008',  ['as' => $s . 'fisika08',   'uses' => 'FisikaController@getFisika08']);
Route::get('/fisika/2009',  ['as' => $s . 'fisika09',   'uses' => 'FisikaController@getFisika09']);
Route::get('/fisika/2010',  ['as' => $s . 'fisika10',   'uses' => 'FisikaController@getFisika10']);
Route::get('/fisika/2011',  ['as' => $s . 'fisika11',   'uses' => 'FisikaController@getFisika11']);
Route::get('/fisika/2012',  ['as' => $s . 'fisika12',   'uses' => 'FisikaController@getFisika12']);
Route::get('/fisika/2013',  ['as' => $s . 'fisika13',   'uses' => 'FisikaController@getFisika13']);
Route::get('/fisika/2014',  ['as' => $s . 'fisika14',   'uses' => 'FisikaController@getFisika14']);
Route::get('/fisika/2015',  ['as' => $s . 'fisika15',   'uses' => 'FisikaController@getFisika15']);
// Fisika Per-Bab
Route::get('/fisika/pendahuluan',                                 ['as' => $s . 'fisikapendahuluan',                          'uses' => 'FisikaController@getPendahuluan']);
Route::get('/fisika/besarandansatuan',                            ['as' => $s . 'besarandansatuan',                           'uses' => 'FisikaController@getBesarandansatuan']);
Route::get('/fisika/dinamikageraklurus',                          ['as' => $s . 'dinamikageraklurus',                         'uses' => 'FisikaController@getDinamikageraklurus']);
Route::get('/fisika/dinamikarotasi',                              ['as' => $s . 'dinamikarotasi',                             'uses' => 'FisikaController@getDinamikarotasi']);
Route::get('/fisika/fisikamodern',                                ['as' => $s . 'fisikamodern',                               'uses' => 'FisikaController@getFisikamodern']);
Route::get('/fisika/getarangelombangdanbunyi',                    ['as' => $s . 'getarangelombangdanbunyi',                   'uses' => 'FisikaController@getGetarangelombangdanbunyi']);
Route::get('/fisika/fluida',                                      ['as' => $s . 'fluida',                                     'uses' => 'FisikaController@getFluida']);
Route::get('/fisika/induksimagnetikdanarusteganganbolakbalik',    ['as' => $s . 'induksimagnetikdanarusteganganbolakbalik',   'uses' => 'FisikaController@getInduksimagnetikdanarusteganganbolakbalik']);
Route::get('/fisika/kinematikageraklurus',                        ['as' => $s . 'kinematikageraklurus',                       'uses' => 'FisikaController@getKinematikageraklurus']);
Route::get('/fisika/listrik',                                     ['as' => $s . 'listrik',                                    'uses' => 'FisikaController@getListrik']);
Route::get('/fisika/momentumdanimpuls',                           ['as' => $s . 'momentumdanimpuls',                          'uses' => 'FisikaController@getMomentumdanimpuls']);
Route::get('/fisika/optik',                                       ['as' => $s . 'optik',                                      'uses' => 'FisikaController@getOptik']);
Route::get('/fisika/suhudankalor',                                ['as' => $s . 'suhudankalor',                               'uses' => 'FisikaController@getSuhudankalor']);
Route::get('/fisika/usahadanenergi',                              ['as' => $s . 'usahadanenergi',                             'uses' => 'FisikaController@getUsahadanenergi']);


// Biologi Per-Tahun
Route::get('/biologi/2005',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio05']);
Route::get('/biologi/2006',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio06']);
Route::get('/biologi/2007',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio07']);
Route::get('/biologi/2008',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio08']);
Route::get('/biologi/2009',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio09']);
Route::get('/biologi/2010',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio10']);
Route::get('/biologi/2011',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio11']);
Route::get('/biologi/2012',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio12']);
Route::get('/biologi/2013',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio13']);
Route::get('/biologi/2014',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio14']);
Route::get('/biologi/2015',  ['as' => $s . 'biologi',   'uses' => 'BiologiController@getBio15']);
// Biologi Per-Bab
Route::get('/biolgi/sel',                                    ['as' => $s . 'sel',                                     'uses' => 'BiologiController@getSel']);
Route::get('/biolgi/strukturtumbuhan',                       ['as' => $s . 'strukturtumbuhan',                        'uses' => 'BiologiController@getStrukturtumbuhan']);
Route::get('/biolgi/reproduksisel',                          ['as' => $s . 'reproduksisel',                           'uses' => 'BiologiController@getReproduksisel']);
Route::get('/biolgi/strukturdanfungsitubuhhewandanmanusia',  ['as' => $s . 'strukturdanfungsitubuhhewandanmanusia',   'uses' => 'BiologiController@getStrukturdanfungsitubuhhewandanmanusia']);
Route::get('/biolgi/genetikadanevolusi',                     ['as' => $s . 'genetikadanevolusi',                      'uses' => 'BiologiController@getGenetikadanevolusi']);
Route::get('/biolgi/biologilingkungan',                      ['as' => $s . 'biologilingkungan',                       'uses' => 'BiologiController@getBiologilingkungan']);
Route::get('/biolgi/metabolisme',                            ['as' => $s . 'metabolisme',                             'uses' => 'BiologiController@getMetabolisme']);
Route::get('/biolgi/mikroorganisme',                         ['as' => $s . 'mikroorganisme',                          'uses' => 'BiologiController@getMikroorganisme']);
Route::get('/biolgi/bioteknologi',                           ['as' => $s . 'bioteknologi',                            'uses' => 'BiologiController@getBioteknologi']);
Route::get('/biolgi/invertebrata',                           ['as' => $s . 'invertebrata',                            'uses' => 'BiologiController@getInvertebrata']);
Route::get('/biolgi/klasifikasimahlukhidup',                 ['as' => $s . 'klasifikasimahlukhidup',                  'uses' => 'BiologiController@getKlasifikasimahlukhidup']);






Route::get('/panduan',                        ['as' => $s . 'panduan',   'uses' => 'PagesController@getPanduan']);
Route::get('/faq',                            ['as' => $s . 'faq',   'uses' => 'PagesController@getFaq']);
Route::get('/tentang-terraversity',           ['as' => $s . 'tentang',   'uses' => 'PagesController@getTentang']);
Route::get('/voucher-input',                  ['as' => $s . 'voucher',   'uses' => 'PagesController@getVoucher']);
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
Route::get('admin/kupon/approve/{code}',    'KuponController@approve');
Route::get('admin/subscribe/delete',        'KuponController@backToGuest');


Route::post('user/kupon/request',           'KuponController@request');
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
