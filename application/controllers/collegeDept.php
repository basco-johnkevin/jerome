<?php

class CollegeDept_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the college dept records
		return View::make('collegeDept.manage')
			->with('collegeDepts', CollegeDept::all());
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

	public function get_edit($id)
	{
		return View::make('collegeDept.edit')
			->with('collegeDept', CollegeDept::where_collegedeptid($id)->first());
	}

	public function post_edit()
	{
		$collegeDept = CollegeDept::where_collegedeptid(Input::get('id'))->first();
		$collegeDept->collegedeptname = Input::get('name');

		if ($collegeDept->save()) {
			return Redirect::back()->with('success', 'College department successfuly updated!');
		} else {
			return Redirect::back()->with_errors($collegeDept->errors->all());
		}
	}

	public function get_delete($id)
	{
		$collegeDept = CollegeDept::where_collegedeptid($id)->first();

		if ($collegeDept->delete()) {
			return Redirect::back()->with('success', 'College department successfuly deleted!');
		} else {
			return Redirect::back()->with_errors($collegeDept->errors->all());
		}
	}




}