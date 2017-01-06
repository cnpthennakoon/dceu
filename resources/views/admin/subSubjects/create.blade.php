@extends('layouts.admin')

@section('content')

    <h1>Create Sub Subjects</h1>

    {!! Form::open(['method'=>'POST',  'action'=>'AdminSubSubjectsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('subject_id', 'Subject Code:') !!}
        {{--            {!! Form::select('subject_code', [''=>'Choose Options']+ $subjects, null, ['class'=>'form-control']) !!}--}}
        <select name="subject_id" id="">
            <option value="">-Select-</option>
            @foreach($mainsubjects as $value)
                <option value="{{$value->id}}">{{$value->subject_code}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {!! Form::label('sub_subject_code', 'Sub Subject Code:') !!}
        {!! Form::text('sub_subject_code', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sub_subject_name', 'Sub Subject Name:') !!}
        {!! Form::text('sub_subject_name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('level', 'Level:') !!}
        {!! Form::text('level', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Sub Subjects', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('errors.form_errors')

@stop