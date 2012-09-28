<?php

class Enrollments_Controller extends Base_Controller {

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
		$student = Student::where_name(Input::get('studentName'))->first();

		// check if the student is already enrolled in a subject section
		$enrollment = Enrollment::where_studentid_and_subjectsectionid($student->studentid, Input::get('subjectSectionId'))->first();

		// return count($enrollment);

		// abort adding saving the record if the record already exists
		if (count($enrollment) >= 1) {
			return Redirect::back()->with_errors(array('The student is already enrolled in this subject section'));
		}

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