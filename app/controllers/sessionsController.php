<?php

class sessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	if (Auth::check())

	{ 
		$user = Auth::user('username');	
		$url = Auth::user('image');
		$name = Auth::user()->username;
		$activity = Activity::where('username','=',$user)->get();	
		
		return View::make ('Users.show', ['user'=>$user,'url'=>$url, 'activities'=>$activity]);

	}
		$comming ='test';
		return View::make ('sessions.login',['comming'=>$comming]);
		$comming = '';

	}


	/*
		*
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{



	
if (Auth::attempt(Input::only('username','password')))
{

	$data = array('test','2');
	Mail::send('sessions.logout', $data, function($message)
	{
    $message->to('jobinttoffice@gmail.com', 'John Smith')->subject('Welcome!');
	});

	//'Welcome '.Auth::user()->name.',';
	return Redirect::to ('/status');
}

$validation = Validator::make(Input::only('username','password'), User::$rules);

if($validation -> fails()) 
	{
		return Redirect::back()->withInput()->withErrors($validation -> messages());
	}



}





	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
	Auth::logout();
return Redirect::to ('login');

	}


}
