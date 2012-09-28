@layout('layouts.main')

@section('content')


	<div class="span12">
		

		@foreach($students as $student)

			{{ $student->name }}

			<?php print_r($student->enrollments); ?>

			@foreach($student->enrollments as $enrollment)
			
			    {{ $enrollment->studentid }}
			    
			@endforeach
	    
		@endforeach



	</div>

<div class="clear"></div>
	   



@endsection