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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/petunjuk', function () {
    return view('petunjuk');
});
Route::get('/print', function () {
    return view('print.kartu');
});
Route::get('/pdf/{id}', 'ParticipantController@getPdf' );

Auth::routes();

Route::get('/home', 'HomeController@index');


//kekirim email
Route::get('/email', function()
{
    $data = ['prize' => 'Peke', 'total' => 3 ];
    Mail::send('emails.hello', $data, function ($mail)
    {
      $mail->from('no-reply@line-lcc.com','PANITIA');
      $mail->to('ccpwkatoniq13@gmail.com');
      $mail->subject('Helo!');
    });
 
});



Route::group(['prefix' => 'order'], function(){
  Route::get('/', function () {
      return view('order.home');
  });
  
  Route::get('view','Order@view');
  Route::post('viewpost','Order@viewpost');
  
  Route::get('confirm/{id}','Order@confirm');
  Route::post('confirmpost/{id}','Order@confirmpost');

  Route::resource('buyer','BuyerController');
  Route::get('participant/{id}','ParticipantController@baru');
  Route::post('participantsave/{id}','ParticipantController@simpan');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function(){
  Route::get('/', function () {
      return view('admin.home');
  });
  Route::get('/pembeli','Admin@daftarPembeli');
  Route::get('/peserta','Admin@daftarPeserta');
  Route::post('/gantistatus/{id}','Admin@gantiStatus');
  Route::post('/gantistatusbayar/{id}','Admin@gantiStatusBayar');
});