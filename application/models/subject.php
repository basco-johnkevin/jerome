<?php

class Subject extends Aware {
	
	public static $table = 'subject';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	public static $rules = array(
		'subjectname' => 'required|max:40|unique:subject',
		'collegedeptid' => 'required|integer|exists:collegedept,collegedeptid',
	);

	// public function enrollments()
	// {
	//   return $this->has_many('Enrollment');
	// }


}