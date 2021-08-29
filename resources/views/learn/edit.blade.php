
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

    {!! Form::open(['action' => ['CourseController@update', $learn->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}

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
        {{Form::text('Subject',$learn->Subject,['class'=>'form-control', 'placeholder'=>'Subject'])}}
        </div>

        <div class="form-group">
        {{Form::label('smalldes', 'Add Description')}}
        {{Form::text('smalldes',$learn->smalldes,['class'=>'form-control', 'placeholder'=>'Add Description'])}}
        </div>

        <div class="form-group">
        {{Form::label('firstname', 'Firstname')}}
        {{Form::text('firstname',$learn->firstname,['class'=>'form-control', 'placeholder'=>'Firstname'])}}
        </div>

        <div class="form-group">
        {{Form::label('lastname', 'Lastname')}}
        {{Form::text('lastname',$learn->lastname,['class'=>'form-control', 'placeholder'=>'Lastname'])}}
        </div>

        <div class="form-group">
        {{Form::label('body', 'Details')}}
        {{Form::textarea('body',$learn->body,['class'=>'form-control', 'placeholder'=>'Details', 'id'=>"editor"])}}
        </div>

        <div class="form-group">
            {{Form::label('Subject', 'Upload Image')}}
            {{Form::file('course_image',['class'=>'form-control'])}}
            </div>

        <div class="form-group">
        {{Form::label('link', 'Add Course Link')}}
        {{Form::text('link',$learn->link,['class'=>'form-control', 'placeholder'=>'Add Course Link'])}}
        </div>
        </div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Update', ['class'=>"btn btn-info"])}}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>"btn btn-danger"])}}
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
