@extends('layouts.admin')

@section('content')

    <h1>Create Subjects</h1>

    {!! Form::open(['method'=>'POST',  'action'=>'AdminMainSubjectsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('subject_code', 'Subject Code:') !!}
        {!! Form::text('subject_code', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subject_name', 'Subject Name:') !!}
        {!! Form::text('subject_name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Main Subjects', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('errors.form_errors')

@stop