<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{asset('header_assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{asset('header_assets')}}/fonts/fontawesome-all.min.css">
   

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-white text-left portfolio-navbar gradient" style="background-color: rgb(255,255,255);color: rgb(0,0,0);background-image: url(&quot;55&quot;);font-family: Lato, sans-serif;">
        <div class="container"><a class="navbar-brand logo" href="{{route('todo.home')}}" style="color: rgb(0,0,0);">To Do List</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav" style="shadow:none;color:black;" ><i style="color:black;" class="fa fa-align-justify"></i></span></button>
            <div
                class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                   @if (\Request::is('todo'))
                   <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('todo.home')}}" style="color: rgb(0,0,0);font-weight:none;"><i class="fas fa-home"></i>&nbsp;Home </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todostudy.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-graduation-cap"></i>&nbsp;Study </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todoothers.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-clipboard-list"></i>&nbsp;Other Task </a></li>
                    @elseif(\Request::is('/'))
                     <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todo.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-cogs"></i>&nbsp;Project </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todostudy.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-graduation-cap"></i>&nbsp;Study </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todoothers.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-clipboard-list"></i>&nbsp;Other Task</a></li>
                   @elseif(\Request::is('todostudy'))
                   <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('todo.home')}}" style="color: rgb(0,0,0);font-weight:none;"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todo.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-cogs"></i>&nbsp;Project</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todoothers.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-clipboard-list"></i>&nbsp;Other Task </a></li>
                    @elseif(\Request::is('todoothers'))
                   <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('todo.home')}}" style="color: rgb(0,0,0);font-weight:none;"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todo.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-cogs"></i>&nbsp;Project</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todostudy.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-graduation-cap"></i>&nbsp;Study</a></li>
                    @else
                     <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('todo.home')}}" style="color: rgb(0,0,0);font-weight:none;"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todo.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-cogs"></i>&nbsp;Project </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todostudy.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-graduation-cap"></i>&nbsp;Study </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('todoothers.show')}}" style="color: rgb(0,0,0);"><i class="fas fa-clipboard-list"></i>&nbsp;Other Task </a></li>

                    @endif
                </ul>  
        </div>
        </div>
    </nav>
    <script src="{{asset('header_assets')}}/js/jquery.min.js"></script>
    <script src="{{asset('header_assets')}}/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>