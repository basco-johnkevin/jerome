<?php

class Subjects_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the subject records
		return View::make('subjects.manage')
			->with('subjects', Subject::all());
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

	public function get_edit($id)
	{
		return View::make('subjects.edit')
			->with('subject', Subject::where_subjectid($id)->first());
	}

	public function post_edit()
	{
		// return Input::get('name');
		//echo Input::get('collegeDeptName');

		// get the college dept id
		$collegeDept = CollegeDept::where_collegedeptname(Input::get('collegeDeptName'))->first();

		$subject = Subject::where_subjectid(Input::get('id'))->first();

		$subject->subjectname = Input::get('name');
		$subject->collegedeptid = $collegeDept->collegedeptid;

		if ($subject->save()) {
			return Redirect::back()->with('success', 'Subject successfuly updated!');
		} else {
			return Redirect::back()->with_errors($subject->errors->all());
		}
	}

	public function get_delete($id)
	{
		$subject = Subject::where_subjectid($id)->first();
		if ($subject->delete()) {
			return Redirect::back()->with('success', 'Subject successfuly delete!');
		} else {
			return Redirect::back()->with_errors($subject->errors->all());
		}
	}




}