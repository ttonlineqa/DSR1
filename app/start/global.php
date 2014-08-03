<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	/*return View::make('/error');*/
	Log::error($exception);

});

App::before(function($request, $response)
{
    /**
     * Laravel $code is always 500
     * message format:
     * SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
     * SQLSTATE[HY000] [1049] Unknown database 'blah'
     */
    /*App::error(function(\PDOException $e, $code)
    {
        Log::error( 'FATAL DATABASE ERROR: ' . $code . ' = ' . $e->getMessage() );

        if ( App::Environment('local') )
        {
            $message = explode(' ', $e->getMessage());
            $dbCode = rtrim($message[1], ']');
            $dbCode = trim($dbCode, '[');

            // codes specific to MySQL
            switch ($dbCode) {
                case 1049:
                    $userMessage = 'Unknown database - probably config error:';
                    break;
                case 2002:
                    $userMessage = 'DATABASE IS DOWN:';
                    break;
                default:
                    $userMessage = 'Untrapped Error:';
                    break;
            }

            $userMessage = $userMessage . '<br>' . $e->getMessage();

        } else {
            // be apologetic but never specific ;)
            $userMessage = 'We are experiencing a bad bad problem. We are sorry for the inconvenience!';
        }

        return Response::view('errors.dbexception', ['message' => $userMessage, 'code' => $code]);

    }); */// end of App::error

});
/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::View('Berightback');
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';
