@extends('layouts.app')

@section('content')
<div class="img-fluid">
  <div class="row logo-container-div justify-content-center">
    <div class="logo-wrapper col-auto">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1>STEAK Justice</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit,<br> sed do eiusmod tempor
            incididunt ut labore et dolore magna<br> aliqua.
            Ut enim ad minim veniam, quis nostrud
            exercitation<br> ullamco laboris nisi ut aliquip
            ex ea commodo consequat.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<div class="container">
  {!! Form::open(['action' => 'ControllerClassroom@store', 'method' => 'POST']) !!}
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Classroom Name" name="nameClassroom">
  </div>
  <input type="hidden" name="statusClassroom" value="A">
  <div class="form-group">
    <button type="submit" class="btn btn-dark">Create</button>
    <button type="button" onclick="window.location.href = '{{ url('classroom') }}'" class="btn btn-secondary">Classroom</button>
  </div>
  {!! Form::close() !!}
</div>
<ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>




<div class="container">
  <div class="row">
    <div class="col">
    @foreach($data as $classroom)
     {!! Form::open(['action' => ['ControllerClassroom@destroy', $classroom->noClassroom], 'id' => $classroom->noClassroom , 'method' => 'DELETE']) !!}
      <table class="table">
     
        <!-- {!! Form::open(['action' => ['ControllerClassroom@destroy', $classroom->noClassroom], 'id' => $classroom->noClassroom , 'method' => 'DELETE']) !!} -->
        
        <tbody>
          <tr>
          
         
            <td>{{$classroom->nameClassroom}}</td>
            <td>{{$classroom->statusClassroom}}</td>
            <td><button type="button" class="btn btn-link" onclick="document.getElementById('<?php echo  $classroom->noClassroom ?>').submit();">delete</button></td>
            <td><input type="hidden" name="noClassroom" value="{{$classroom->noClassroom}}">
            <input type="hidden" name="nameClassroom" value="{{$classroom->nameClassroom}}">
            <input type="hidden" name="statusClassroom" value="U"></td>
           
          </tr>
         

        </tbody>
      
      </table>
      {!! Form::close() !!}
      @endforeach
    </div>
   

  </div>
</div>


@endsection
<style>
  .img-fluid {
    height: max-content;
    width: auto;
    background-image: linear-gradient(150deg, rgba(89, 2, 2, 0.6) 30%, rgba(191, 118, 54, 0.7)), url("assets/s.jpg");
    background-position: 0%, 0%, 50%, 50%;
    background-attachment: scroll, fixed;
    background-size: auto, cover;
  }

  .logo-wrapper {
    font-family: 'Raleway', sans-serif;
    padding: 150px 30px;
    text-align: center;
    position: relative;
  }

  .nameMenu {
    padding: 20px 80px;
    color: black;
  }

  #price {
    color: #313940;
  }

  #contact {
    color: whitesmoke;
  }
</style>