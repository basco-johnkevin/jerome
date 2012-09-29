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
		          	<th width="32%">ID</th>
		          	<th width="32%">Subject</th>  
		          	<th width="32%">Schedule</th>     
		          	<th width="32%">Actions</th>                                     
		      </tr>
		  	</thead>   
		<tbody>

		@foreach($subjectSections as $subjectSection)

		    <tr>
		        <td class="center">{{ $subjectSection->subjectsectionid }}</td>
		        <td class="center title">{{ $subjectSection->subject->subjectname }}</td>
		        <td class="center">{{ $subjectSection->schedule }}</td>
		       
		       
		        <td class="center">
		     
		           	<a href="{{ action('subjectSections@edit', array($subjectSection->subjectsectionid)) }}" class="btn btn-info">Edit</a>
		            <a href="#myModal-delete-{{ $subjectSection->subjectsectionid }}" role="button" class="btn btn-danger" data-toggle="modal">Delete</a>

		            <div class="modal hide" id="myModal-delete-{{ $subjectSection->subjectsectionid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					 
					<div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Are you sure you want to delete this?</h3>
					  </div>
					
					  <div class="modal-footer">
					    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			
					    <a href="{{ action('subjectSections@delete', array($subjectSection->subjectsectionid)) }}" class="btn btn-danger">Confirm Delete</a> 
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