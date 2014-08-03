<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Status extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'status';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

	public static 	$rules = [
'project_id' => 'required',
'scenarios_total'=> 'required', 'int',
'scenarios_comp'=> 'required',
'percentage_comp'=> 'required',
'percentage_actual'=> 'required',
'project_rag'=> 'required'
//'project_startdate' => 'required',
//'email'=> 'required'
	];


}
