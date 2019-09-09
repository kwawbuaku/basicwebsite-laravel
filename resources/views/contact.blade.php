@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{  Form::label('name', 'Name') }}
        {{ Form::text('name',null, ['placeholder' =>'Enter name', 'class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{  Form::label('email', 'E-Mail Address') }}
        {{ Form::text('email', null, ['placeholder' => 'example@gmail.com', 'class' => 'form-control']) }}
{{--        {{ Form::text('email', 'example@gmail.com') }}--}}
    </div>
    <div class="form-group">
        {{  Form::label('message', 'Message') }}
        {{ Form::textarea('message', null, ['placeholder' => 'Enter message', 'class' => 'form-control']) }}
        {{--        {{ Form::text('email', 'example@gmail.com') }}--}}
    </div>
    <div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection
