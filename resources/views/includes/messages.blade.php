@if(count($errors)>0)
@foreach($errors->all() as $error)

<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oops Something Wrong!</strong> {{$error}}
</div>




{{$error}}
@endforeach
    @endif


    @if(session('success'))

    <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Congrats! is done !</strong> {{session('success')}}
</div>




    @endif

    @if(session('error'))

    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oops Something Wrong!</strong> {{session('error')}}
</div>



    

    @endif