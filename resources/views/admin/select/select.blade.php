@extends('layouts.dataEntry')

@section('content')

    {!! Form::open(['method'=>'POST',  'action'=>'SelectStudentsController@store']) !!}

    <div class="form-group">
        {!! Form::label('english_name', 'Name:') !!}
        {!! Form::text('english_name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('batch', 'Academic Year:') !!}
        {!! Form::number('batch', null, ['class'=>'form-control']) !!}
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('alyear', 'AL Year:') !!}
                {!! Form::number('alyear', null, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('alindexno', 'AL index no:') !!}
                {!! Form::number('alindexno', null, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('z_score', 'Z-Score:') !!}
                {!! Form::number('z_score', null,   ['class'=>'form-control']) !!}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject1', 'Subject:') !!}
                {!! Form::select('alsubject1', ['' => 'Select Subject'] + $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub1_result', 'Result:') !!}
                {!! Form::select('al_sub1_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'], '') !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject2', 'Subject:') !!}
                {!! Form::select('alsubject2', ['' => 'Select Subject'] + $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub2_result', 'Result:') !!}
                {!! Form::select('al_sub2_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'], '') !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject3', 'Subject:') !!}
                {!! Form::select('alsubject3', ['' => 'Select Subject'] + $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub3_result', 'Result:') !!}
                {!! Form::select('al_sub3_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'], '') !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject4', 'Subject:') !!}
                {!! Form::select('alsubject4', ['' => 'Select Subject'] + $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub4_result', 'Result:') !!}
                {!! Form::select('al_sub4_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'], '') !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        {!! Form::submit('Update Student Details', ['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}

@stop
