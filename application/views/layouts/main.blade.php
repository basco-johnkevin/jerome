<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Jerome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    {{ Asset::container('bootstrapper')->styles() }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::script('js/modernizr-2.6.1-respond-1.1.0.min.js') }}
    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/apple-touch-icon-57-precomposed.png') }}">
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
    
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="{{ URL::base() }}">Jerome</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Students <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="nav-header">Actions</li>
                                <li><a href="{{ action('students@add') }}">Add</a></li>
                                <li><a href="{{ action('students@index') }}">Manage Students</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="nav-header">Actions</li>
                                <li><a href="{{ action('subjects@add') }}">Add</a></li>
                                <li><a href="{{ action('subjects@index') }}">Manage Subjects</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">College Department <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="nav-header">Actions</li>
                                <li><a href="{{ action('collegeDept@add') }}">Add</a></li>
                                <li><a href="{{ action('collegeDept@index') }}">Manage College Departments</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subject Sections <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="nav-header">Actions</li>
                                <li><a href="{{ action('subjectSections@add') }}">Add</a></li>
                                <li><a href="{{ action('subjectSections@index') }}">Manage Subject Sections</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enrollments <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="nav-header">Actions</li>
                                <li><a href="{{ action('enrollments@add') }}">Add</a></li>
                                <li><a href="{{ action('enrollments@index') }}">Manage Enrollments</a></li>
                            </ul>
                        </li>

                    </ul>
                   
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div> <!-- /navbar -->
    
    <div class="wrapper">
        <div class="container">
                
                @yield('content')
                
        </div> <!-- /container -->
    </div> <!-- /wrapper -->
        
        
    <div class="push"><!-- / / --></div> <!-- /push -->
        
    <footer>
        
        <p>&copy; Jerome Baluso Gaming 2012</p>
        
    </footer> <!-- /footer -->
    
    
    
    <!-- begin javascript -->
    {{ Asset::container('bootstrapper')->scripts() }}
    
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../public/js/jquery-1.8.1.min.js"><\/script>')</script>
    
    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/main.js') }}

    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <!-- end javascript -->
</body>
</html>