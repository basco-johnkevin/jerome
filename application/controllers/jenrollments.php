<?php

class Jenrollments_Controller extends Base_Controller {

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
		$subjectSection = New SubjectSection;
		$subjectSection->schedule = Input::get('schedule'); 

		$subject = Subject::where_subjectname(Input::get('subject'))->first();
		
		$subjectSection->subjectid = $subject->subjectid;

		if ($subjectSection->save()) {
			return Redirect::back()->with('success', 'Subject section successfuly added!');
		} else {
			return Redirect::back()->with_errors($subjectSection->errors->all());
		}

	}




}