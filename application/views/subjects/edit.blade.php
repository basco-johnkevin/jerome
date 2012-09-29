@layout('layouts.main')


@section('content')


     <div class="span12">
        <table id="properties-table" class="table table-striped table-hover">
            <thead>
              <tr>
                  <th width="50%">ID</th>
                  <th width="50%">Name</th>  
                  <th width="50%">College Department</th>                                         
              </tr>
            </thead>   
            <tbody>

                <tr>
                    <td class="center">{{ $subject->subjectid }}</td>
                    <td class="center title">{{ $subject->subjectname }}</td> 
                    <td class="center title">{{ $subject->collegeDept->collegedeptname }}</td>                     
                </tr>

                              
            </tbody>
        </table>

    </div>

	<div class="row">
        <div class="span4 offset4 well">
           <h4 class="text-info">Input new details</h4>
        
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

            <form method="Post" action="{{ action('subjects@edit') }}" accept-charset="UTF-8">
                {{ Form::token() }}
                <input type="hidden" name="id" value="{{ $subject->subjectid }}">
                <input type="text" class="span4" name="name" value="{{ $subject->subjectname }}" placeholder="new name">

                <!-- get the college departments -->
                <?php 
                $collegeDepts = CollegeDept::all();

                $collegeDeptsArray = array();

                foreach ($collegeDepts as $collegeDept) {
                    $collegeDeptsArray[ $collegeDept->collegedeptname ] = $collegeDept->collegedeptname;
                }

                // print_r($collegeDeptsArray);

                ?>
                <!-- get the college departments ends -->


               
          
                 {{ Form::select('collegeDeptName', $collegeDeptsArray, '' , array('class' => 'span4')) }}

                <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
            </form>    
        </div>
    </div>



    
@endsection