@extends('master_layout.app')
@section('content4')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>todo home</title>
   
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icons') }}/favicon.ico" />
 
    <link rel="stylesheet" href="{{asset('home_assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <link rel="stylesheet" href="{{asset('home_assets')}}/css/styles.css">
     <link rel="stylesheet" href="{{asset('todo_assets')}}/fonts/fontawesome-all.min.css">
     
      <style type="text/css">
    
    
    .link{
         color:black;
         
         text-decoration:none;
     }
      .link:hover{
         color:white;
         text-shadow:0px 0px 7px black;
         text-decoration:none;
     }
   </style>
</head>

<body style="font-family: 'Alegreya SC', serif;margin-top: 80px;background-color: rgb(255,255,255);">
    <br><br><br>
    <div style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="table-responsive d-block">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th class="text-center " style="border:none;background-color: #ededed;color: rgb(0,0,0);font-size: 22px;">&nbsp;<br>
                                        <p style=""><a class="link" href="{{route('todo.show')}}"><i class="fas fa-cogs"></i> Project</a></p>
                                        <p><span class="badge badge-pill badge-primary" style="background-color: rgb(0,0,0);">{{$p}}</span></p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="text-center border-white" style="background-color: #ededed;color: rgb(244,99,108);">Remaining &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;background-color: rgb(244,99,108);color: rgb(255,255,255);">{{$p_rm_count}}</span><br></td>
                                </tr>
                                <tr>
                                    <td class="text-center border-white" style="background-color: #ededed;color: rgb(46,160,78);">Running &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;background-color: rgb(46,160,78);color: rgb(255,255,255);">{{$p_r_count}}</span></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="table-responsive d-block">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th class="text-center  " style="border:none;background-color: #e4e8cb;color: rgb(0,0,0);font-size: 22px;">&nbsp;<br>
                                        <p style=""><a class="link" href="{{route('todostudy.show')}}"><i class="fas fa-graduation-cap"></i> Study</a></p>
                                        <p><span class="badge badge-pill badge-primary" style="background-color: rgb(0,0,0);">{{$s}}</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="text-center  border-white" style="background-color: #e4e8cb;color: rgb(244,99,108);">Remaining &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;background-color: rgb(244,99,108);">{{$s_rm_count}}</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center  border-white shadow-none" style="background-color: #e4e8cb;color: rgb(46,160,78);">Running &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;background-color: rgb(46,160,78);">{{$s_r_count}}</span></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="table-responsive d-block">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th class="text-center " style="border:none;background-color: #c7dee3;color: rgb(0,0,0);font-size: 22px;">&nbsp;<br>
                                        <p style=""><a class="link" href="{{route('todoothers.show')}}"><i class="fas fa-clipboard-list"></i> Other Task</p></a>
                                        <p><span class="badge badge-pill badge-primary" style="background-color: rgb(0,0,0);">{{$o}}</span></p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="text-center  border-white" style="background-color: #c7dee3;color: rgb(244,99,108);">Remaining &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;color: rgb(255,255,255);background-color: rgb(244,99,108);">{{$o_rm_count}}</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center  border-white" style="background-color: #c7dee3;color: rgb(46,160,78);">Running &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;background-color: rgb(46,160,78);">{{$o_r_count}}</span></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="table-responsive d-block">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th class="text-center " style="border:none;background-color: #f2d1d3;color: rgb(0,0,0);font-size: 22px;">&nbsp;<br>
                                        <p style="">Σ Total Task</p>
                                        <p><span class="badge badge-pill badge-primary" style="background-color: rgb(0,0,0);">{{$total_task}}</span></p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="text-center  border-white" style="background-color: #f2d1d3;color: rgb(244,99,108);">Total Remaining &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;color: rgb(255,255,255);background-color: rgb(244,99,108);">{{$total_rm}}</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center  border-white" style="background-color: #f2d1d3;color: rgb(46,160,78);">Total Running &nbsp;<span class="badge badge-primary" style="font-family: Andada, serif;background-color: rgb(46,160,78);">{{$total_r}}</span></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>

</html>
@endsection