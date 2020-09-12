@extends('master_layout.app')
@section('content2')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>todolist</title>
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('todo_assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('todo_assets')}}/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('todo_assets')}}/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour+One">
    <link rel="stylesheet" href="{{asset('todo_assets')}}/css/Footer-Basic.css">
    <link rel="stylesheet" href="{{asset('todo_assets')}}/css/styles.css">
    
      <style type="text/css">
    
    .edit_link{
         color:white; 
     }
      .edit_link:hover{
         color:#FF5733;
     }
    .link{
         color:white;
     }
      .link:hover{
         color:#FF0D0D;
     }

         .link_confirm{
         color:#DED9F7;
         
         text-shadow:0px 0px 7px #DED9F7;
     }
      .link_confirm:hover{
         color:black;
      
     }
   </style>
</head>

<body class="text-center" style="background-color:#475D62">
 
   
   
       <br></br><br></br>
   

           <div>
                @if(Session::has('success'))
                <div style="">
                 <center><span style="background-color:black;color:#DAF7A6;text-shadow:0px 0px 7px #DAF7A6;box-shadow:0px 0px 7px #DAF7A6;margin-top:20px;" class="alert">
                   {{Session::get('success')}}
                  </span>
                  </center>
                </div>
                @endif
              <center>
            <div>
            <div>
                @if(Session::has('success2'))
                <div style="">
                 <center><span style="background-color:red;color:white;box-shadow:0px 0px 7px white;margin-top:20px;" class="alert">
                   {{Session::get('success2')}}&nbsp;&nbsp;
                   <a class="link_confirm" href="{{route('todo.deleteallstudy')}}">Yes</a>&nbsp;&nbsp;
                   <a class="link_confirm" href="{{route('todostudy.show')}}">No</a>
                  </span>
                  </center>
                </div>
                @endif
              <center>
            <div>
            <div>
                @if(Session::has('warning'))
                <div style="">
                 <center><span style="background-color:black;color:#FFC300;box-shadow:0px 0px 7px #FFC300;margin-top:20px;" class="alert">
                   {{Session::get('warning')}}
                  </span>
                  </center>
                </div>
                @endif
              <center>
            <div>
            
             
            <br>
          
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr> 
                                <td colspan="4" style="background-color:#341313;color: white;border:none;text-align:center;">
                                   <p style="font-size:20px;"><i class="fas fa-graduation-cap"></i> Study</p>                              
                                </td>
			
                                </tr>
                                <tr>
                                  <td colspan="2"  style="background-color:#E0BEBE;color: black;border:none;text-align:center;" >
                                  
                                  <p><a style="color:black;" href="{{route('addstudy.show')}}">Add New Study</a></p>
                                  <p><a style="color:black;text-decoration:none;" href="{{route('addstudy.show')}}"><i class="fas fa-plus-circle"></i></a></p>
                                  
                                  </td>
                                 <td colspan="2"  style="background-color: #E0BEBE;color: black;border:none;text-align:center;" >
                                 <p><a style="color:black;" href="{{route('studydeleteallconfirm')}}">Delete All Study</a></p>
                                 <p><a style="color:black;" href="{{route('studydeleteallconfirm')}}"><i class="fas fa-trash-alt"></i></a></p>
                                 </td>
                                </tr>
                                
                            </thead>
                    <tbody>
                      @if($p>0)
                        <tr>
                            <td  style="background-color: #6D2527;color: rgb(255,255,255);">Title</td>
                            <td class="text-center" style="background-color: #6D2527;color: rgb(255,255,255);">Status</td>
                            <td class="text-center" style="background-color: #6D2527;color: rgb(255,255,255);">Edit&nbsp;</td>
                            <td class="text-center" style="background-color: #6D2527;color: rgb(255,255,255);">Remove&nbsp;</td>
                        </tr>
                        @foreach($study as $stu)
                        <tr>
                           <td  style="background-color: #341313;color: rgb(255,255,255);"><a style="color:white;" href="{{$stu->url}}"> {{$stu->title}}</a></td>

                            <td class="text-center" style="background-color: #341313 ;color: rgb(255,255,255);">
                            @if($stu->status=="active")
                            <i  style="color:#A5F41B;text-shadow:0px 0px 10px #A5F41B;" class="far fa-lightbulb text-center"></i>
                            @else
                            <i style="color:#F85C78;text-shadow:0px 0px 10px #F3254A;" class="far fa-lightbulb text-center"></i>
                            @endif
                            </td>
                             <td class="text-center" style="background-color: #341313 ;color: rgb(255,255,255);"><a class="edit_link"  href="{{ route('todostudy.edit',$stu->id)}}"><i class="far fa-edit"></i></td>

                            <td class="text-center" style="background-color:#341313 ;color: rgb(255,255,255);"><a class="link"  href="{{ route('todostudy.destroy',$stu->id) }}"><i class="fas fa-times-circle"></a></i></td>
                        </tr>

                        @endforeach
                        @else
                        <tr>
                            <td  style="background-color: #6D2527;color: rgb(255,255,255);">Title</td>
                            <td class="text-center" style="background-color: #6D2527;color: rgb(255,255,255);">Status</td>
                            <td class="text-center" style="background-color: #6D2527;color: rgb(255,255,255);">Edit&nbsp;</td>
                            <td class="text-center" style="background-color: #6D2527;color: rgb(255,255,255);">Remove&nbsp;</td>
                        </tr>
                        <tr>
                         <td class="text-center" colspan="4" style="background-color:#341313;color: rgb(255,255,255);font-size:18px;">Empty Study List</td>
                
                        </tr>
                        @endif
                    </tbody>
                    </table>
             

    

</body>

</html>
@endsection