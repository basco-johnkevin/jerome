@layout('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="span4 offset4 well">

            @if(count($studentsArray) < 1)
                <div class="alert alert-error">
                    There are no students yet in the database. Please add a student first.
                </div>
            @elseif(count($subjectSectionsArray) < 1)
                <div class="alert alert-error">
                    There are no subject sections yet in the database. Please add a subject section first.
                </div>
            @else

                <h2 class="text-info">Add an enrollment record</h2>
        
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

                <form method="Post" action="{{ action('enrollments@add'); }}" accept-charset="UTF-8">
                    {{ Form::token() }} 

                    {{ Form::select('studentName', $studentsArray, '' , array('class' => 'span4')) }}

                    {{ Form::select('subjectSectionId', $subjectSectionsArray, '' , array('class' => 'span4')) }}
                   


                    <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
                </form>    

            @endif


  


             
        </div>
    </div>
</div>

@endsection