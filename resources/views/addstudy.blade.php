
@extends('master_layout.app')
@section('content5')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>
    <link rel="stylesheet" href="{{asset('add_project_assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{asset('add_project_assets')}}/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
   
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
        <br>
            <div class="container"  >
                
               
                <form action="{{route('addstudy.store')}}" method="POST" style="background-color:#E0BEBE;border-radius:4px;box-shadow:0px 0px 7px #262626;">
				   @csrf

               

                    <h4  class="heading mb-3">Add New Study</h4><br>
                   <div class="form-group "><label for="title">Study Title</label><input placeholder="Title for the study" class="form-control" type="text" value="{{ old('title') }}" name="title"><span class="text-danger">{{ $errors->first('title') }}</span></div>
                    <div class="form-group "><label for="link">Study Link (Optional)</label><input class="form-control" placeholder="Associate link that helps the study" type="url" value="{{ old('url') }}" name="url"><span class="text-danger">{{ $errors->first('url') }}</div>
				   <div class="form-group "><label for="status">Study Status</label><select class="form-control" name="status" id="subject"><option value="" selected="">Choose Status</option><option value="active">Active</option><option value="inactive">Inactive</option></select><span class="text-danger">{{ $errors->first('status') }}</div>
                  
				  <div class="form-group">
                  <div class="form-row">
                  <div class="col-md-12 button"><button class="btn btn-primary btn-block" type="submit">Add Study</button></div>
                 </div>
            </div>
            </form>
            </div>
        </section>
    </main>
   
   
</body>

</html>
@endsection