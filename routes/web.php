<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\BookTripController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\HandelController;
//
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

Route::get('/', function () {
    return view('index');
});

Route::get('/info/{id}',  [HandelController::class,'show']);

Route::get('/about_us', function(){
    return view('pages/about_us');
 });
 Route::get('/trips', function(){
   return view('pages/trips');
});
 /*Route::get('/booktrip', function(){
    return view('pages/booktrip');
 });*/


 /*Route::get('/contact-us', function(){
    return view('pages/contact-us');
 });
*/
/*Route::get('/scuba', function(){
   return view('pages/scuba');
});

Route::get('/resort', function(){
   return view('pages/resort');
});
Route::get('/quad', function(){
   return view('pages/quad');
});

Route::get('/parasailing', function(){
   return view('pages/parasailing');
});

Route::get('/paragliding', function(){
   return view('pages/paragliding');
});

Route::get('/horseriding', function(){
   return view('pages/horseriding');
});

Route::get('/hiking', function(){
   return view('pages/hiking');
});
Route::get('/farm', function(){
   return view('pages/farm');
});
Route::get('/falcon', function(){
   return view('pages/falcon');
});
Route::get('/dunes', function(){
   return view('pages/dunes');
});
Route::get('/desertsafari', function(){
   return view('pages/desertsafari');
});
Route::get('/dammam', function(){
   return view('pages/dammam');
});
Route::get('/camelriding', function(){
   return view('pages/camelriding');
});
Route::get('/camel', function(){
   return view('pages/camel');
});
Route::get('/boattrip', function(){
   return view('pages/boattrip');
});
Route::get('/beach', function(){
   return view('pages/beach');
});
Route::get('/archery', function(){
   return view('pages/archery');
});

Route::get('/alquair', function(){
   return view('pages/alquair');
});

Route::get('/algarah', function(){
   return view('pages/algarah');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('missions', App\Http\Controllers\MissionController::class);

Route::resource('visions', App\Http\Controllers\VisionController::class);

Route::resource('abouts', App\Http\Controllers\AboutController::class);



Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::post('/', 'ServiceController@store');

Route::resource('images', App\Http\Controllers\ImageController::class);
Route::post('/', 'ImageController@store');

Route::resource('files', App\Http\Controllers\FileController::class);
Route::post('/', 'FileController@store');

Route::resource('servics', App\Http\Controllers\ServicController::class);


Route::resource('fileuploads', App\Http\Controllers\FileuploadController::class);
//Route::resource('fileupload','FileuploadController');

Route::resource('slides', App\Http\Controllers\SlidesController::class);

Route::resource('sliders', App\Http\Controllers\SliderController::class);
//Route::post('/', 'SliderController@store');

Route::resource('uploaders', App\Http\Controllers\UploaderController::class);
//Route::resource('/', 'UploaderController@store');


Route::resource('posts', App\Http\Controllers\PostController::class);

Route::resource('slids', App\Http\Controllers\SlidController::class);

Route::resource('slider1s', App\Http\Controllers\Slider1Controller::class);

Route::resource('slider2s', App\Http\Controllers\Slider2Controller::class);

//Route::resource('service1s', App\Http\Controllers\Service1Controller::class);

//Route::resource('service2s', App\Http\Controllers\Service2Controller::class);
Route::get('/sendemail', [SendEmailController::class,'index']);
Route::post('/sendemail/send', [SendEmailController::class,'send']); 

Route::get('/booktrip', [BookTripController::class,'index']);
Route::post('/booktrip/send', [BookTripController::class,'send']); 

Route::get('/footer', [SubscribeController::class,'index']);
Route::post('/footer/send', [SubscribeController::class,'send']); 

Route::get('/index', [SubscribeController::class,'index']);
Route::post('/index/send', [SubscribeController::class,'send']); 

/*Route::get('/contact-us', 'SendEmailController@index');
Route::post('/contact-us/send', 'SendEmailController@send'); 
*/
 /*Route::get('/contact-us', function(){
    return view('pages/contact-us');
 });*/
/*
 Route::get('/send-mail', [SendMailController::class, 'index'])->name('send.mail.index');*/

Route::resource('fliers', App\Http\Controllers\FlierController::class);

Route::resource('weeks', App\Http\Controllers\WeekController::class);