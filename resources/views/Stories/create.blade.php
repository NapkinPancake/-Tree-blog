@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-4"><a href='{{url()->previous()}}' class="btn btn-outline-light">←back</a></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
      </div>

@endsection

@section('content2')
<div class="row">
<div class="col-2"> </div>

<div class="col-8">

    {!! Form::open(['action' => 'StoryController@store' , 'method' => 'POST']) !!}

    <div class="form-group">
            {{Form::label('tittle' , 'What is the name of your story?', ['class' => 'form-label' ])}}
            {{Form::text('tittle' , '', ['placeholder' => 'Tittle', 'class' => 'form-control' ])}}
       </div>

<div class="form-group">
    {{Form::label('overview' , 'Overview' , ['class' => 'form-label' ])}}
    {{Form::text('overview' , '', ['placeholder' => 'Facade discription', 'class' => 'form-control' ])}}
</div>

<div class="form-group">
    {{Form::label('story' , 'Tell us your story' , ['class' => 'form-label' ] )}}
    {{Form::textarea('story' , '', ['placeholder' => '(max 455 charackters)', "class" => "form-control" ])}}
</div>

<div class="form-group">
        {{Form::label('url' , 'Add some image' , ['class' => 'form-label' ])}}
        {{Form::text('url' , '', ['placeholder' => 'URL', 'class' => 'form-control' ])}}
   </div>

<div class="form-group">
        {{Form::submit('Done', ['class' => 'btn btn-success'] )}}
   </div>

    {!! Form::close() !!}

 </div>

    <div class="col-2"></div>

</div>
@endsection