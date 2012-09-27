<?php

class Students_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the student records
	}

	public function get_add()
	{
		return View::make('students.add');
	}

	public function post_add()
	{
		$student = New Student;
		$student->name = Input::get('name');
		$student->student_number = Input::get('student_number');
		
		if ($student->save()) {
			return Redirect::back()->with('success', 'Student successfuly added!');
		} else {
			return Redirect::back()->with_errors($student->errors->all());
		}

	}




}