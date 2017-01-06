@extends('layouts.dataEntry')

@section('content')

    <div class="row">

        <div class="col-sm-9">

            {!! Form::model($id = 1, ['method'=>'PATCH', 'action'=>['regFormStat@update', $id = 1]]) !!}

            <div class="form-group">
                {!! Form::label('value', 'Status:') !!}
                {!! Form::select('value', array(1=>'Active', 0=> 'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
            </div>

    </div>
    </div>

@stop