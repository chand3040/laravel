<?php

Route::group(array('before' => 'auth'), function() {
	//Routes that you have to be loged in to visit
	Route::get('/account/sign-out', array('as' => 'account-sign-out','uses' => 'AccountController@getSignout'));
	Route::get('/', array('as' => 'home','uses' => 'HomeController@home'));


	Route::group(array('before' =>'csrf'), function(){
		Route::post('/profile', array('as' => 'dashboard-profile-post','uses' => 'AccountController@postProfile'));
	});
	
Route::get('/profile', array('as' => 'dashboard-profile','uses'=>'AccountController@getProfile'));
});




Route::group(array('before' => 'guest'), function() {

//Routes that you can visit without having to be logged in
    Route::group(array('before' => 'csrf'), function() {
        Route::post('/account/create', array('as' => 'account-create-post','uses' => 'AccountController@postCreate'));
		Route::post('/account/sign-in', array('as' => 'account-sign-in-post','uses' => 'AccountController@postSignin'));
	});


//Routes are ran before the post ones above (get routes)
Route::get('/account/sign-in', array('as' => 'account-sign-in','uses' => 'AccountController@getSignin'));
Route::get('/account/create', array('as' => 'account-create','uses' => 'AccountController@getCreate'));
Route::get('/account/activate/{code}', array('as' => 'account-activate','uses' => 'AccountController@getActivate'));

});