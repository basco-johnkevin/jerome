<?php

class Students_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the student records
		return View::make('students.manage')
			->with('students', Student::all());
	}

	public function get_add()
	{
		return View::make('students.add');
	}

	public function get_edit($student_id)
	{
		return View::make('students.edit')
			->with('student', Student::where_studentid($student_id)->first());
	}

	public function post_edit()
	{
		$student = Student::where_studentid(Input::get('id'))->first();
		$student->name = Input::get('name');
		$student->student_number = Input::get('student_number');


		// check if the student number already exists
		$student_exists = Student::where('student_number', '=', Input::get('student_number'))
			->where('studentid', '!=', Input::get('id'))
			->get();

		// return count($student_exists);

		if (count($student_exists) >= 1) {
			return Redirect::back()->with_errors(array('The student number is already used by another student, choose another student number'));
		}

		// lets commence saving baby!
		if ($student->save(
			Student::$rules = array(
				'name' => 'required|max:50',
				'student_number' => 'required|integer',
			)
		)) {
			return Redirect::back()->with('success', 'Student successfuly updated!');	
		} else {
			return Redirect::back()->with_errors($student->errors->all());
		}
	}

	public function post_add()
	{
		$student = New Student;
		$student->name = Input::get('name');
		$student->student_number = Input::get('student_number');
		
		//return print_r($student->save());

		if ($student->save()) {
			 return Redirect::back()->with('success', 'Student successfuly added!');	
		} else {
			return Redirect::back()->with_errors($student->errors->all());
		}

	}

	public function get_subjects($student_id)
	{
		return View::make('students.subjects')
			->with('student', Student::where_studentid($student_id)->first());


		//$student = Student::where_studentid($student_id)->first();;


		// foreach ($student->posts as $post) {
		// 	echo $post->content;
		// }
		

	}




}