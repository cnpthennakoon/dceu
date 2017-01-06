@extends('layouts.dataEntry')

@section('content')

    <head xmlns="http://www.w3.org/1999/html">
        <style>
            th
            {
                text-align: center;
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #0480be;
                color: white;
                border-radius: 6px;
            }

            #example3 tr:nth-child(even){background-color: #81bfde;}

            #example3 tr:nth-child(odd){background-color: powderblue;}

            #example3 table
            {
                border:5px solid #427BD6;
                border-radius:6px;
                border-color: #001f3f;
                border-spacing:0;
            }


            #example3 td
            {
                text-align: center;
                font-size: medium;
                font-family: Verdana;
                color: #001f3f;
                /*border-style: solid;*/
                /*border-color: #001f3f;*/
                border-radius: 6px;

            }
        </style>
    </head>

    <h1 style="  color: black;font-family: 'Verdana';font-size: 200%">Add New A/L Subject</h1><br>


    {!! Form::open(['method'=>'post', 'action'=>'AlSubjectController@store']) !!}

    <table>

        <div class="form-group">

            <tr>
                <td style="font-family: 'Verdana'">{!! Form::label('name', 'A/L Subject Name :') !!}</td>
                <td style="width: 60%">{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Add Subject', 'style'=>'width: 100%; padding: 8px 15px;  margin: 4px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!}
                <td>&nbsp;</td>
                <td> {!! Form::submit('Add Subject', ['class'=>'btn btn-primary']) !!}</td>
            </tr>


        </div>

    </table>

    {!! Form::close() !!}




    @include('errors.form_errors')

    {{--@include('dataEntry.alsubjects.allalsubjects')--}}


    <h1 align="middle" style="font-size: 150%; font-family: Verdana; color: #001a35;"> Subjects </h1>

    <table id="example3" class="table table-bordered table-hover">

        <thead>
        <tr>
            <th align="center" style="font-family: Verdana;">Subject Code</th>
            <th align="center" style="font-family: Verdana;">Subject Name</th>
        </tr>
        </thead>
        <tbody>

        @if($al_subjects)
            @foreach($al_subjects as $subject)

                <tr>
                    <td>{{ $subject->id }} </td>
                    {{--<td><a href="{{route('admin.mainSubjects.edit', $subject->id)}}">{{ $subject->subject_code }}</a></td>--}}
                    <td>{{ $subject->name }}</td>
                </tr>

        @endforeach
        @endif
    </table>

@stop