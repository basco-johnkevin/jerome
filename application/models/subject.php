<?php

class Subject extends Aware {
	
	public static $table = 'subject';

	public static $key = 'subjectid';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	public static $rules = array(
		'subjectname' => 'required|max:40|unique:subject',
		'collegedeptid' => 'required|integer|exists:collegedept,collegedeptid',
	);

	public function collegeDept()
	{
	  return $this->belongs_to('collegedept', 'collegedeptid');
	}


}