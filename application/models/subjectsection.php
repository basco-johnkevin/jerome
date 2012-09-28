<?php

class SubjectSection extends Aware {
	
	public static $table = 'subjectsection';

	public static $key = 'subjectsectionid';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	public static $rules = array(
		'subjectid' => 'required|exists:subject,subjectid',
		'schedule' => 'required|max:40',
	);

	public function subject()
	{
	 	return $this->belongs_to('Subject', 'subjectid');
	}


}