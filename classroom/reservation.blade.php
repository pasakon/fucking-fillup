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
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
    <div class="container">
      <div class="row">
    @foreach($data as $classroom)
        <div class="col">
            {!! Form::open(['action' => ['ControllerClassroom@update', $classroom->noClassroom], 'id' => $classroom->noClassroom , 'method' => 'PUT']) !!}
                <div class="row" onclick="document.getElementById('<?php echo  $classroom->noClassroom?>').submit();" style="cursor:pointer"> <!-- onclick from form's id -->
                 <div class="Menu_img" id="imgPorkMenu">
                    <div class="row logo-container-div align-items-center justify-content-center">
                     <div class="logo-wrapper col-auto ">
                        <h1 class="nameMenu">{{$classroom->nameClassroom}}</h1>
                        <h5 id="price">{{$classroom->statusClassroom}}</h5>
                        <input type="hidden" name="noClassroom" value="{{$classroom->noClassroom}}">
                        <input type="hidden" name="nameClassroom" value="{{$classroom->nameClassroom}}">
                        <input type="hidden" name="statusClassroom" value="U">
                     </div>
                    </div>
                 </div>
                </div>
            {!! Form::close() !!}
        </div>
    @endforeach
      </div>
    </div>
@endsection
<style>
      .img-fluid{
        height: max-content;
        width: auto;
        background-image: linear-gradient(150deg, rgba(89, 2, 2, 0.6) 30%, rgba(191, 118, 54, 0.7));
        background-position: 0%, 0%, 50%, 50%;
        background-attachment: scroll, fixed;
        background-size: auto, cover;
      }
      .logo-wrapper {
        font-family: 'Raleway', sans-serif;
        padding: 150px 30px;
        text-align:center;
        position: relative;
      }
      .nameMenu {
        padding: 20px 80px;
        color: black;
      }
      #price{
        color: #313940;
      }
      #contact{
        color: whitesmoke;
      }
      #imgPorkMenu{
        height: 430px;
        width: 300px;
        background-image: linear-gradient(150deg, rgba(191, 118, 54, 0.6) 30%, rgba(191, 118, 54, 0.7));
        background-position: 50%, 50%;
        background-size: contain, cover;
      }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">