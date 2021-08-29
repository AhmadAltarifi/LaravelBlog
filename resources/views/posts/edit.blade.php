
@include('includes.messages')       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   <title>Document</title>
</head>
<body>
@include('includes.navbar')

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class=container style="margin-top:30px">
    <div class="panel panel-info">
      <div class="panel-heading">
      <h1>
      Make a changes
      </h1>
      </div>
      <div class="panel-body">
      <h3 style="text-transform:uppercase">

      <div class="form-group">
{{Form::label('Subject', 'Subject')}}
{{Form::text('Subject',$post->Subject,['class'=>'form-control', 'placeholder'=>'Subject'])}}
</div>

<div class="form-group">
{{Form::label('firstname', 'Firstname')}}
{{Form::text('firstname',$post->firstname,['class'=>'form-control', 'placeholder'=>'Firstname'])}}
</div>

<div class="form-group">
{{Form::label('lastname', 'Lastname')}}
{{Form::text('lastname',$post->lastname,['class'=>'form-control', 'placeholder'=>'Lastname'])}}
</div>

<div class="form-group">
{{Form::label('Title', 'title')}}
{{Form::text('title',$post->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
</div>

<div class="form-group">
{{Form::label('Update Description', 'Update Description')}}
{{Form::text('smalldes',$post->smalldes,['class'=>'form-control', 'placeholder'=>'Update Description'])}}
</div>

<div class="form-group">
{{Form::label('Subject', 'Upload Image')}}
{{Form::file('post_image',['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::label('body', 'Details')}}
{{Form::textarea('body',$post->body,['class'=>'form-control', 'placeholder'=>'Details', 'id'=>"summary-ckeditor"])}}
</div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Update', ['class'=>"btn btn-info"])}}
       </h3>
      </div>
    </div>

    
</div>
{!! Form::close() !!}
<!-- Scripts -->
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
                CKEDITOR.replace( 'summary-ckeditor' );
        </script>
</body>
</html>