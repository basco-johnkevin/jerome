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
		          	<th width="32%">Name</th>     
		          	<th width="32%">Actions</th>                                     
		      </tr>
		  	</thead>   
		<tbody>

		@foreach($collegeDepts as $collegeDept)

		

		    <tr>
		        <td class="center">{{ $collegeDept->collegedeptid }}</td>
		        <td class="center title">{{ $collegeDept->collegedeptname }}</td>
		       
		       
		        <td class="center">
		     
		           	<a href="{{ action('collegeDept@edit', array($collegeDept->collegedeptid)) }}" class="btn btn-info">Edit</a>
		            <a href="#myModal-delete-{{ $collegeDept->collegedeptid }}" role="button" class="btn btn-danger" data-toggle="modal">Delete</a>

		            <div class="modal hide" id="myModal-delete-{{ $collegeDept->collegedeptid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					 
					<div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Are you sure you want to delete this?</h3>
					  </div>
					
					  <div class="modal-footer">
					    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					   <!--  <button class="btn btn-primary">Save changes</button> -->
					    <a href="{{ action('collegeDept@delete', array($collegeDept->collegedeptid)) }}" class="btn btn-danger">Confirm Delete</a> 
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