@layout('layouts.main')

@section('content')


	<div class="span12">
		<table id="properties-table" class="table table-striped table-hover">
			<thead>
		      	<tr>
		          	<th width="5%">ID</th>
		          	<th width="16%">Name</th>
		          	<th width="14%">Student Number</th> 
		          	<th width="14%">Actions</th>                                           
		      </tr>
		  	</thead>   
		<tbody>

		@foreach($students as $student)

			{{ $student->name }}

		    <tr>
		        <td class="center">{{ $student->studentid }}</td>
		        <td class="center title">{{ $student->name }}</td>
		        <td class="center">{{ $student->student_number }}</td>
		       
		       
		        <td class="center">
		     
		           	<a href="{{ action('students@subjects', array($student->studentid)) }}" class="btn btn-info">Subjects</a>
		            <a href="#myModal-delete" role="button" class="btn btn-danger" data-toggle="modal">Delete</a>

		            <div class="modal hide" id="myModal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					 
					<div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Are you sure you want to delete this?</h3>
					  </div>
					
					  <div class="modal-footer">
					    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					   <!--  <button class="btn btn-primary">Save changes</button> -->
					    <a href="" class="btn btn-danger">Confirm Delete</a> 
					  </div>
					</div>



		        </td>                                       
	    	</tr>
	    
		@endforeach

	
                                 
  </tbody>
</table>

</div>

<div class="clear"></div>
	   



@endsection