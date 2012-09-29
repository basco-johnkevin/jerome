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
		          	<th width="25%">Enrollment Id</th>
		          	<th width="25%">Student</th>  
		          	<th width="25%">Subject Section ID</th>   
		          	<th width="25%">Action</th>                                    
		      </tr>
		  	</thead>   
		<tbody>

		@foreach($enrollments as $enrollment)

		    <tr>
		        <td class="center">{{ $enrollment->enrollmentid }}</td>
		        <td class="center title">{{ $enrollment->student->name }}</td>
		        <td class="center">{{ $enrollment->subjectsectionid }}</td>
		       
		       
		        <td class="center">
		     
		           
		            <a href="#myModal-delete-{{ $enrollment->enrollmentid }}" role="button" class="btn btn-danger" data-toggle="modal">Delete</a>

		            <div class="modal hide" id="myModal-delete-{{ $enrollment->enrollmentid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					 
					<div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Are you sure you want to delete this?</h3>
					  </div>
					
					  <div class="modal-footer">
					    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			
					    <a href="{{ action('enrollments@delete', array($enrollment->enrollmentid)) }}" class="btn btn-danger">Confirm Delete</a> 
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