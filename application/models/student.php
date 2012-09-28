<?php

class Student extends Aware {
	
	public static $table = 'student';

	public static $key = 'studentid';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	public static $rules = array(
		'name' => 'required|max:50',
		'student_number' => 'required|integer|unique:student',
	);

	public function posts()
	{
	 	return $this->has_many('Post', 'student_id');
	}

	public function enrollments()
	{
	 	return $this->has_many('Enrollment', 'studentid');
	}


}