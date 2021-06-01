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

Route::get('/', function () {
    return view('full-calender');
});

Route::get('/siyathahome', function () {
    return view('siyathahome');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/siyatha', function () {
    return view('siyatha');
});

Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/teacher1', function () {
    return view('teacher1');
});

Route::get('/teacher2', function () {
    return view('teacher2');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/calender', function () {
    return view('calender');
});

Route::get('full-calender', [FullCalenderController::class, 'index']);

/* Risini START...................................................................................... */

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/club', function () {
    return view('club');
});

Route::get('/loginclub', function () {
    return view('loginclub');
});

Route::get('/club2', function () {
    return view('club2');
});

Route::get('/club3', function () {
    return view('club3');
});

Route::get('/club4', function () {
    return view('club4');
});

Route::get('/clubpayment', function () {
    return view('clubpayment');
});

/* Risini END...................................................................................... */

/* Harshika Start...................................................................................... */

Route::get('/New', function () {
    return view('New');
});

Route::get('/ETabout', function () {
    return view('ETabout');
});

Route::get('/Exam', function () {
    return view('Exam');
});

Route::get('/ICT10', function () {
    return view('ICT10');
});

Route::get('/ICT11', function () {
    return view('ICT11');
});


Route::get('/ALICT', function () {
    return view('ALICT');
});


Route::get('/BT', function () {
    return view('BT');
});

Route::get('/courses', function () {
    return view('courses1');
});

Route::get('/SFT', function () {
    return view('SFT');
});
/* Harshika END...................................................................................... */

// Navoda start

Route::get('/welcome','WelcomeController@welcome');

Route::post('image-album/store','AlbumCreateController@albumStore');

Route::get('/albumCreate','AlbumCreateController@indexalbumCreate');

Route::get('/addImage/{id}','AddImageController@indexAddImage');

Route::post('gallery-image/store/','AddImageController@ImageStore');

Route::get('/deletealbum/{id}','AlbumCreateController@deletealbum');

Route::get('/imageView', function () {
    return view('imageView');
});

Route::get('/albumView','albumViewController@index');
Route::get('/image/view/{id}','albumViewController@Imageindex');

Route::get('/support','SupportController@indexSupport');

Route::get('/index','IndexController@index');

Route::get('/backImageAlbum','albumViewController@back');


Route::get('/vedioAlbumCreate','vedioAlbumCreateController@index');

Route::post('/video/upload','AddVedioController@upload');



Route::post('album/store','vedioAlbumCreateController@albumStore');

Route::get('/vedioAlbumCreate','vedioAlbumCreateController@indexalbumCreate');

Route::get('/deletealbum/{id}','vedioAlbumCreateController@deletealbum');

Route::get('/video-Add/{id}','AddVedioController@indexAddVedio');

Route::post('gallery-vedio/store/','AddVedioController@VedioStore');

Route::get('/vedioAlbumView','vedioAlbumViewController@index');
Route::get('/vedio/view/{id}','vedioAlbumViewController@Vedioindex');

Route::get('/back','vedioAlbumViewController@back');

Route::post('achivement-album/store','AchivementAlbumCreateController@albumStore');

Route::get('/AchivementAlbumCreate','AchivementAlbumCreateController@indexalbumCreate');

Route::post('achivement-add/store','AchivementAddController@studentStore');

Route::get('/AchivementAdd/{id}','AchivementAddController@indexachivementAdd');

Route::get('/deletealbum/{id}','AchivementAlbumCreateController@deletealbum');

Route::get('/AchivementAlbumView','AchivementAlbumViewController@index');

Route::get('/AchivementImage/view/{id}','AchivementAlbumViewController@Imageindex');

Route::get('/deletealbum/{id}','AchivementAddController@deletealbum');

Route::get('/backImage','AchivementAlbumViewController@back');


//navoda end
