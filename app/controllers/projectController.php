<?php

class projectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Projects::all();

		 return View::make('projects.index')->with ('projects',$projects);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
return View::make('projects.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validation = Validator::make(Input::all(), Projects::$rules);

if($validation -> fails()) 
	{
		return Redirect::back()->withInput()->withErrors($validation -> messages());

}
	$project = new Projects;
	$project->project_name = Input::get ('project_name') ;
	$project->project_cat = Input::get ('project_cat');
	$project->project_sub_cat = Input::get ('project_sub_cat') ;
	$project->project_rag = Input::get ('project_rag') ;
	$project->project_owner = Input::get ('project_owner') ;
	$project->project_startdate = Input::get ('project_startdate') ;
	$project->project_enddate = Input::get ('project_enddate') ;
	$project->save();

	return Redirect::to('/projects');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)

	{
		$project=Projects::whereId($id)->first();
		return View::make('projects.show')->with ('project', $project);
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
