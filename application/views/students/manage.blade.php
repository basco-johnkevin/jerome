@layout('layouts.main')

@section('content')


	<div class="span12">


		 @if(Session::has('errors'))
           @foreach(Session::get('errors') as $error)         
                <div class="alert alert-error">
                    <a class="close" data-dismiss="alert" href="#">×</a>{{ $error }}
                </div>
           @endforeach
        @endif
     
        @if(Session::has('success'))  
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#">×</a>{{ Session::get('success') }}
            </div>

        @endif



		
		<table id="properties-table" class="table table-striped table-hover">
			<thead>
		      	<tr>
		          	<th width="25%">ID</th>
		          	<th width="25%">Name</th>
		          	<th width="25%">Student Number</th> 
		          	<th width="25%">Actions</th>                                           
		      </tr>
		  	</thead>   
		<tbody>

		@foreach($students as $student)

			<!-- {{ $student->name }} -->

		    <tr>
		        <td class="center">{{ $student->studentid }}</td>
		        <td class="center title">{{ $student->name }}</td>
		        <td class="center">{{ $student->student_number }}</td>
		       
		       
		        <td class="center">
		     
		           	<a href="{{ action('students@subjects', array($student->studentid)) }}" class="btn btn-info">Subjects</a>
		           	<a href="{{ action('students@edit', array($student->studentid)) }}" class="btn btn-info">Edit</a>
		            <a href="#myModal-delete-{{ $student->studentid }}" role="button" class="btn btn-danger" data-toggle="modal">Delete</a>

		            <div class="modal hide" id="myModal-delete-{{ $student->studentid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					 
					<div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Are you sure you want to delete this?</h3>
					  </div>
					
					  <div class="modal-footer">
					    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					   <!--  <button class="btn btn-primary">Save changes</button> -->
					    <a href="{{ action('students@delete', array($student->studentid)) }}" class="btn btn-danger">Confirm Delete</a> 
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