@layout('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="span4 offset4 well">
             <h2 class="text-info">Add Subject Section</h2>
        
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

            <form method="Post" action="{{ action('subjectSections@add'); }}" accept-charset="UTF-8">
                {{ Form::token() }} 

                {{ Form::label('subject', 'subject') }}
                {{ Form::select('subject', $subjectsArray, '' , array('class' => 'span4')) }}

                <input type="text" class="span4" name="schedule" placeholder="schedule">
                

                <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
            </form>    
        </div>
    </div>
</div>

@endsection