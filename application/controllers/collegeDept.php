<?php

class CollegeDept_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the college dept records
	}

	public function get_add()
	{
		return View::make('collegeDept.add');
	}

	public function post_add()
	{
		$collegeDept = New CollegeDept;
		$collegeDept->collegedeptname = Input::get('name');
		
		if ($collegeDept->save()) {
			return Redirect::back()->with('success', 'College department successfuly added!');
		} else {
			return Redirect::back()->with_errors($collegeDept->errors->all());
		}

	}




}