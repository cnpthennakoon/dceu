@extends('layouts.dataEntry')

@section('content')

    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Academic Year</th>
            <th>A/L Exam Year</th>
            <th>A/L Exam Index No </th>
            <th>A/L Subject 1</th>
            <th>A/L Subject 2</th>
            <th>A/L Subject 3</th>
            <th>A/L Subject 4</th>
            <th>Applied Subject1</th>
            <th>Applied Subject2</th>
            <th>Applied Subject3</th>
            <th>Added at</th>
            <th>Add</th>

        </tr>
        </thead>
        <tbody>

        @if($students)
            @foreach($students as $student)

                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->batch }}</td>
                    <td>{{ $student->alyear }}</td>
                    <td>{{ $student->alindexno }}</td>
                    <td>{{ $student->alsubject1 }}</td>
                    <td>{{ $student->alsubject2 }}</td>
                    <td>{{ $student->alsubject3 }}</td>
                    <td>{{ $student->alsubject4 }}</td>
                    <td>{{ $student->subject1 }}</td>
                    <td>{{ $student->subject2 }}</td>
                    <td>{{ $student->subject3 }}</td>
                    <td>{{ $student->created_at->diffForHumans() }}</td>

                    {{--add new student--}}
                    <td>

                        {!! Form::open(['method'=>'POST',  'action'=>'SelectStudentsController@store']) !!}

                        <div class="form-group">
                            {!! Form::submit('Add', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::hidden('role', 4, ['class'=>'form-control']) !!}
                        </div>


                        {!! Form::close() !!}

                    </td>

                    @endforeach
                    @endif

                </tr>

        </tbody>
    </table>



@stop