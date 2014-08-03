<?php
	
	class pagescontroller extends basecontroller{

	public function home()
	{
	return View::make('hello');
	}


	public function manageprojects()
	{
	return View::make('projects');
	} 


	public function status()
	{
	return View::make('status');
	}


	public function manageusers()
	{

	return View::make('users');
	}


	public function admin()
	{
	return View::make('admin');
	}


	public function help()
	{
	return View::make('help');
	}



	public function error()
	{
	return View::make('error');
	}
	public function log()
	{
			$contents = File::get('C:\wamp\www\Laravel\statusreport\app\storage\logs\laravel.log');
		return $contents;
	}

}
 ?>