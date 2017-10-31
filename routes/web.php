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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
})->middleware('api');

Route::get('/zoadilack', function () {
    return view('settings');
})->middleware('api');

Route::post('/zoadilack/notify', function (Request $request) {

	$data = $request->all();
    $rules = [
        'email' => 'required|email',
    ];

    $validator = Validator::make($data, $rules);
    
    if ($validator->fails()) {
        return Redirect::to('/zoadilack')->withErrors($validator);
    }

    $emailTo = $request->input('email');
    Mail::raw(
        'Thanks for signing up!',
        function($message) use ($emailTo) {
            $message->from($emailTo)
            	->to(env('DEFAULT_EMAIL'))
                ->subject('Registration was successful.');
        });

    return Redirect::to('/zoadilack')->with(['registration' => true]);
});
