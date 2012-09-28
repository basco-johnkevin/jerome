<?php

class Post extends Aware {
	
	public static $table = 'posts';
	public static $key = 'id';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	// public static $rules = array(
	// 	'name' => 'required|max:50',
	// 	'student_number' => 'required|integer|unique:student',
	// );

	// public function enrollments()
	// {
	//  	return $this->has_many('Enrollment', 'studentid');
	// }


}