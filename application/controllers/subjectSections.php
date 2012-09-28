<?php

class SubjectSections_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the subject section records
	}

	public function get_add()
	{
		$subjects = Subject::all();

		// print_r($subjects);

		$subjectsArray = array();

		foreach ($subjects as $subject) {
			$subjectsArray[ $subject->subjectname ] = $subject->subjectname;
		}

		// print_r($subjectsArray);

		return View::make('subjectSections.add')
			->with('subjectsArray', $subjectsArray);
	}

	public function post_add()
	{
		$subject = Subject::where_subjectname(Input::get('subject'))->first();

		$subjectSection = SubjectSection::where_subjectid_and_schedule($subject->subjectname, Input::get('schedule'))->first();

		// return count($subjectSection);

		// abort adding saving the record if the record already exists
		if (count($subjectSection) >= 1) {
			return Redirect::back()->with_errors(array('The subject section already exists'));
		}

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