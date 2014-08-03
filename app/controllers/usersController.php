<?php

class usersController extends \BaseController {
	 

	public function index()

	 {
		
		if (Auth::check())
		{
		 $users = User::all();

		 return View::make ('Users.index')->with ('users',$users);
}
$logintext = 'test';
return  Redirect::to ('/login',['logintext'=>$logintext]);
	}


public function show($username)
	{
		$user = User::whereUsername($username)->first();
		$activity = Activity::where('username','=',$username)->get();
			//$users = DB::select('select * from users where username = $username limit 1 ');
	
			


	//function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) 
	//{
	$email = $user->email;
    $default = "http://cdn1.tnwcdn.com/files/2010/12/winner1.png";
    $size = 50;
    $s = 200;
    $d = 'mm';
    $r = 'g'; 
    $img = false; 
    $atts = array();
    $url = 'http://www.gravatar.com/avatar/';
    $url.= md5( strtolower( trim( $email ) ) );
    $url.= "?s=$s&d=$d&r=$r";
   
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url.= ' ' . $key . '="' . $val . '"';
        $url.= ' />';

	$user ->image = $url ;//update // Update a entry in the table
	$user -> save();

    

  //$url='http://www.gravatar.com/avatar/goli';
    //}


return View::make ('Users.show', ['user'=>$user,'url'=>$url, 'activities'=>$activity]);
	}


	public function create()
	{
		return View::make ('Users.create');
	}

	public function store()
	{
		
	$validation = Validator::make(Input::all(), User::$rules);

if($validation -> fails()) 
	{
		return Redirect::back()->withInput()->withErrors($validation -> messages());

}
	$user = new User;
	$user->username = Input::get ('username') ;
	$user->password = Hash::make (Input::get ('password')); //create a new entry to the table
	$user->Name = Input::get ('name') ;
	$user->Email = Input::get ('email') ;
	$user->save();

	$activity = new Activity;
	$activity->type = 'New User Creation';
	$activity->username = Input::get ('username');
	$activity->save();



	return Redirect::to('/login')->withInput() ;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
		 


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
	public function destroy($id)
	{
		//
	}


}
