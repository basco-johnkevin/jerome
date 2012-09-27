<?php

class enrollments_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the enrollment records
	}

	public function get_add()
	{
		$students = Student::all();

		// print_r($students);

		$studentsArray = array();

		foreach ($students as $student) {
			$studentsArray[ $student->name ] = $student->name;
		}

		// print_r($studentsArray);


		$subjectSections = SubjectSection::all();

		// print_r($subjectSections);

		$subjectSectionsArray = array();

		foreach ($subjectSections as $subjectSection) {
			$subjectSectionsArray[ $subjectSection->subjectsectionid ] = $subjectSection->subjectsectionid;
		}

		// print_r($subjectSectionsArray);


		return View::make('enrollments.add')
			->with('studentsArray', $studentsArray)
			->with('subjectSectionsArray', $subjectSectionsArray);
	}

	public function post_add()
	{
		$enrollment = New Enrollment;

		$student = Student::where_name(Input::get('studentName'))->first();
		
		// print_r($student);

		$enrollment->studentid = $student->studentid;
		$enrollment->subjectsectionid = Input::get('subjectSectionId'); 

		if ($enrollment->save()) {
			return Redirect::back()->with('success', 'Enrollment record successfuly added!');
		} else {
			return Redirect::back()->with_errors($enrollment->errors->all());
		}

	}




}