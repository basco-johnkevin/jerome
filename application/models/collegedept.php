<?php

class CollegeDept extends Aware {
	
	public static $table = 'collegedept';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	public static $rules = array(
		'collegedeptname' => 'required|max:50|unique:collegedept',
	);

	// public function enrollments()
	// {
	//   return $this->has_many('Enrollment');
	// }


}