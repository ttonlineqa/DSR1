<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'sessionsController@create');
Route::get('/manageusers', 'pagescontroller@manageusers');
Route::get('/admin', 'pagescontroller@admin');
Route::get('/help', 'pagescontroller@help');
Route::get('/error', 'pagescontroller@error');
Route::get('/debugon', 'pagescontroller@log');
//Route::get ('userlist', 'usersController@index');
//Route::get('userlist/{username}','usersController@show');

Route::resource('/users', 'usersController');
Route::resource('/projects', 'projectController');
Route::resource('/manageprojects', 'pagescontroller@manageprojects');
Route::resource('/users', 'usersController');
Route::resource('/status', 'statusController');
Route::get('/login', 'sessionsController@create');
Route::get('/logout', 'sessionsController@destroy');
Route::resource('/sessions', 'sessionsController');

Route::get('/test',function()
{
return View::make ('/test');
	});


Route::get('error', function() {
    try
    {
        $pdo = DB::connection('mysql')->getPdo();
    }
    catch(\PDOException $exception)
    {
        return Response::make('Database error! ' . $exception->getCode());
    }
    return 'all fine';
});

//Route::get('/test',function()
//{
	//$username = 'nivedita';
	//$users = DB::table ('users')->where('username','=',$username)->get(); // Search a user with a specific username
	//dd ($users);

	//$user = new User;
	//$user->username = 'Priya';
	//$user->password = Hash::make ('test'); //create a new entry to the table
	//$user->save();

	/*$user = User::find(3);
	$user -> username = 'lola';//update // Update a entry in the table
	$user -> save();*/

	//$user = User::find (1);
	//$user -> delete() ; //delete user



	
/*


	//return User::all();