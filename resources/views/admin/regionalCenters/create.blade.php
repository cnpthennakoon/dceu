@extends('layouts.admin')

@section('content')

    <h1>Create Regional Centers</h1>

    {!! Form::open(['method'=>'POST',  'action'=>'AdminRegionalCenterController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Regional Center Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Regional Center', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('errors.form_errors')

@stop