@layout('layouts.main')

@section('content')


	
		

	<!-- 	{{ $student->name }}

		@foreach($student->enrollments as $enrollment)
		<br>
			{{ $enrollment->subjectsectionid }}
			<br>
		    {{ $enrollment->subjectSection->subject->subjectname }}
		    <br>
		    {{ $enrollment->subjectSection->subject->collegeDept->collegedeptname }}
			<br>
		    {{ $enrollment->subjectSection->schedule }}

		@endforeach -->



		<h2>Student's Name: {{ $student->name }}</h2>
		
		<h3>Subjects Enrolled:</h3>
		<br>
<!-- 
		@foreach($student->enrollments as $enrollment)
		<br>
			{{ $enrollment->subjectsectionid }}
			<br>
		    {{ $enrollment->subjectSection->subject->subjectname }}
		    <br>
		    {{ $enrollment->subjectSection->subject->collegeDept->collegedeptname }}
			<br>
		    {{ $enrollment->subjectSection->schedule }}

		@endforeach -->


		<div class="span12">
			<table id="properties-table" class="table table-striped table-hover">
				<thead>
				      	<tr>
				          	<th width="33%">Subject</th>
				          	<th width="33%">Schedule</th>
				          	<th width="33%">Department</th>                                            
				      </tr>
				</thead>   

				<tbody>

					@foreach($student->enrollments as $enrollment)

					    <tr>
					        <td class="center">{{ $enrollment->subjectSection->subject->subjectname }}</td>
					        <td class="center title">{{ $enrollment->subjectSection->schedule }}</td>
					        <td class="center"> {{ $enrollment->subjectSection->subject->collegeDept->collegedeptname }}</td>                                
				    	</tr>
				    
					@endforeach
               
		  		</tbody>
			</table>

		</div>

		<div class="clear"></div>
	   



@endsection