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
})->middleware('api');

Route::get('/zoadilack', function () {
    return view('settings');
})->middleware('api');

Route::post('/zoadilack/notify', function () {

	$data= Input::all();
    $rules = [
        'email' => 'required|email',
    ];

    $validator = Validator::make($data, $rules);
    
    if ($validator->fails()) {
        return Redirect::to('/zoadilack')->withErrors($validator);
    }

    return redirect()->route('/zoadilack')->with(['registration' => true]);
})->middleware('api');
