@layout('layouts.main')



@section('content')

<div class="container">
    <div class="row">
        <div class="span4 offset4 well">
             <h2 class="text-info">Add Student</h2>
        
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

            <form method="Post" action="{{ action('students@add'); }}" accept-charset="UTF-8">
                {{ Form::token() }} 
                <input type="text" class="span4" name="name" placeholder="name">
                <input type="text" class="span4" name="student_number" placeholder="student number">
                <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
            </form>    
        </div>
    </div>
</div>

@endsection