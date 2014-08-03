<?php

class statusController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Projects::lists('project_name','project_name');
		$status = Status::all();
		//$d = array($status->updated_at);
		$today = date('d  M',time());

	
		return View::make ('status.index', ['projects' => $projects,'status'=>$status,'today'=>$today]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		

$validation = Validator::make(Input::all(), Status::$rules);

if($validation -> fails()) 
	{
		return Redirect::back()->withInput()->withErrors($validation -> messages());

}
	$status = new Status;

	//$id = Input::get('project_id');
	//$project= Projects::find($id);

	//$project_name = $project;
	//$status->project_name = $project_name->project_name;

	$status->project_name =Input::get('project_id');

	//$status->project_id = Input::get ('project_id');
	//$status->project_name = Input::get (Project::whereID('project_name')) ;
	$status->scenarios_total = Input::get ('scenarios_total');
	$status->scenarios_comp = Input::get ('scenarios_comp') ;
	$status->scenarios_pending = Input::get ('scenarios_pending') ;
	$status->defects = Input::get ('defects') ;
	$status->percentage_comp = Input::get ('percentage_comp') ;
	$status->percentage_actual = Input::get ('percentage_actual') ;
	$status->project_rag = Input::get ('project_rag');
	$status->comments = Input::get ('comments');
	$status->save();

	return Redirect::to('/status');

	Auth::user()->username;

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
	public function destroy($id)
	{
		//
	}


}
