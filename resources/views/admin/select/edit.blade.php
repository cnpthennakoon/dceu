@extends('layouts.dataEntry')

@section('content')

    {!! Form::model($student, ['method'=>'PATCH',  'action'=>['SelectStudentsController@update', $student->id]]) !!}

    <div class="row">



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
                {!! Form::number('z_score', null,   ['class'=>'form-control', 'step'=>'0.0001']) !!}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject1', 'Subject:') !!}
                {!! Form::select('alsubject1', $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub1_result', 'Result:') !!}
                {!! Form::select('al_sub1_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject2', 'Subject:') !!}
                {!! Form::select('alsubject2', $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub2_result', 'Result:') !!}
                {!! Form::select('al_sub2_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject3', 'Subject:') !!}
                {!! Form::select('alsubject3', $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub3_result', 'Result:') !!}
                {!! Form::select('al_sub3_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">

            <div class="col-md-3">
                {!! Form::label('alsubject4', 'Subject:') !!}
                {!! Form::select('alsubject4', $alsubjects, null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('al_sub4_result', 'Result:') !!}
                {!! Form::select('al_sub4_result', ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                {!! Form::label('telhome', 'Telephone-home:') !!}
                {!! Form::number('telhome', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-3">
                {!! Form::label('telmob', 'Telephone-mobile:') !!}
                {!! Form::number('telmob', null, ['class'=>'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update Student Details', ['class'=>'btn btn-success col-sm-2']) !!}
    </div>

    {!! Form::close() !!}


    {{--Adding section--}}
    {!! Form::model($student, ['method'=>'POST',  'action'=>['SelectStudentsController@store' ,$student->id]]) !!}

        {{ Form::hidden('english_name',null, ['class'=>'form-control']) }}
        {!! Form::hidden('role_id', 4, ['class'=>'form-control']) !!}
        {{ Form::hidden('email',null, ['class'=>'form-control']) }}
        {{ Form::hidden('is_active',1, ['class'=>'form-control']) }}
        {{ Form::hidden('photo_id',0, ['class'=>'form-control']) }}
        {!! Form::hidden('password', 123123, ['class'=>'form-control']) !!}
        {{ Form::hidden('level',1, ['class'=>'form-control']) }}
        {{ Form::hidden('batch',null, ['class'=>'form-control']) }}
        {{ Form::hidden('subject1',null, ['class'=>'form-control']) }}
        {{ Form::hidden('subject2',null, ['class'=>'form-control']) }}
        {{ Form::hidden('subject3',null, ['class'=>'form-control']) }}
        {{ Form::hidden('examcenter',null, ['class'=>'form-control']) }}
        {{ Form::hidden('exammedium',null, ['class'=>'form-control']) }}
        {{ Form::hidden('telmob',null, ['class'=>'form-control']) }}
        {{ Form::hidden('district',null, ['class'=>'form-control']) }}
        {{ Form::hidden('address1',null, ['class'=>'form-control']) }}
        {{ Form::hidden('address2',null, ['class'=>'form-control']) }}
        {{ Form::hidden('address3',null, ['class'=>'form-control']) }}
        {{ Form::hidden('address4',null, ['class'=>'form-control']) }}
        <div class="form-group">
            {!! Form::submit('Add Student', ['class'=>'btn btn-primary col-sm-2']) !!}
        </div>



    {!! Form::close() !!}


        {{--<div class="col-sm-12">--}}

            {{--<div class="content-wrapper">--}}


                {{--<!-- Main content -->--}}
                {{--<section class="content">--}}
                    {{--<div class="row">--}}

                        {{--<!-- /.col -->--}}
                        {{--<div class="col-md-9">--}}
                            {{--<div class="box box-primary">--}}
                                {{--<div class="box-header with-border">--}}
                                    {{--<h3 class="box-title">Compose Inquiry</h3>--}}
                                {{--</div>--}}
                                {{--<!-- /.box-header -->--}}
                                {{--<div class="box-body">--}}

                                    {{--<div class="form-group">--}}
                    {{--<textarea id="compose-textarea" class="form-control" style="height: 100px">--}}

                    {{--</textarea>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                                {{--<!-- /.box-body -->--}}
                                {{--<div class="box-footer">--}}
                                    {{--<div class="pull-right">--}}
                                        {{--<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.box-footer -->--}}
                            {{--</div>--}}
                            {{--<!-- /. box -->--}}
                        {{--</div>--}}
                        {{--<!-- /.col -->--}}
                    {{--</div>--}}
                    {{--<!-- /.row -->--}}
                {{--</section>--}}
                {{--<!-- /.content -->--}}
            {{--</div>--}}

        {{--</div>--}}

    </div>

@stop
