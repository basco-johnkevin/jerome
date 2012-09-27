<?php

class Subjects_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the subject records
	}

	public function get_add()
	{
		$collegeDepts = CollegeDept::all();

		// print_r($collegeDepts);

		$collegeDeptsArray = array();

		foreach ($collegeDepts as $collegeDept) {
			$collegeDeptsArray[ $collegeDept->collegedeptname ] = $collegeDept->collegedeptname;
		}

		// print_r($collegeDeptsArray);

		return View::make('subjects.add')
			->with('collegeDeptsArray', $collegeDeptsArray);
	}

	public function post_add()
	{
		$subject = New Subject;
		$subject->subjectname = Input::get('name');
		 
		$collegeDept = CollegeDept::where_collegedeptname(Input::get('collegeDeptName'))->first();
		
		$subject->collegedeptid = $collegeDept->collegedeptid;

		if ($subject->save()) {
			return Redirect::back()->with('success', 'Subject successfuly added!');
		} else {
			return Redirect::back()->with_errors($subject->errors->all());
		}

	}




}