<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', array('as' => 'login', 'uses' => 'Auth\AuthController@getLogout'));

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::resource('Post', 'PostController');





/*Funkar inte för tillfället*/
Route::get('/', function () {
    return view('../auth/register');
});





/*från registrera sidan till logga in sidan.*/
Route::get('../auth/register', function () {
    return view('../auth/login');
});


/*registrera, hamna på förstasidan*/
Route::get('../auth/register', function () {
    return view('forstasida');
});

/*vara på förstasida*/
Route::get('forstasida', function () {
    return Redirect::route('Post.index');
});






/*från login sidan till registrera sidan.*/
Route::get('../auth/login', function () {
    return view('../auth/register');
});



/* Forumsvalmöjligheterna nedan */
Route::get('senaste', function () {
       $posts = DB::table('Post')->join('User','Post.user_id', '=', 'User.id')->get();
        return view('senaste', compact('posts'));
});



Route::get('laxhjalp', function () {
    $posts = DB::table('Post')->join('User','Post.user_id', '=', 'User.id')->where('category_id','Läxhjälp')->get();
    return view('laxhjalp', compact('posts'));
});

Route::get('hittaratt', function () {
      $posts = DB::table('Post')->join('User','Post.user_id', '=', 'User.id')->where('category_id','Hitta rätt')->get();
    return view('hittaratt', compact('posts'));
});

Route::get('evenemang', function () {
    $posts = DB::table('Post')->join('User','Post.user_id', '=', 'User.id')->where('category_id','Evenemang')->get();
    return view('evenemang', compact('posts'));
});

Route::get('snack', function () {
       $posts = DB::table('Post')->join('User','Post.user_id', '=', 'User.id')->where('category_id','Snack')->get();
    return view('snack', compact('posts'));
});