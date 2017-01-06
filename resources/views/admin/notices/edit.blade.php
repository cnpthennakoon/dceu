@extends('layouts.dataEntry')

@section('content')

    <h1>Edit Notices</h1>

    {!! Form::model($notice, ['method'=>'PATCH',  'action'=>['AdminNoticesController@update', $notice->id], 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'File:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Notice', ['class'=>'btn btn-primary col-sm-2']) !!}
    </div>

    {!! Form::close() !!}



    {!! Form::open(['method'=>'DELETE',  'action'=>['AdminNoticesController@destroy', $notice->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Notice', ['class'=>'btn btn-danger col-sm-2']) !!}
    </div>

    {!! Form::close() !!}

    @include('errors.form_errors')

@stop