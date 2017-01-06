@extends('layouts.student')
@section('title')

@endsection
@section('content')



    <?php


    $my_date="2016-01-20";
    echo strtotime(time());
    if(strtotime($my_date)>=time())
    {

    ?>
    <h2>Apply Immediately</h2>
    <table class="table">
        <thead>
        <tr bgcolor="45B39D">
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>


        @if($student)
            @foreach($student as $s)
                @foreach($sub_subject as $v)
                    @if($v->level == Auth::user()->level)
                        @if($v->subject_id == $s->subject1)

                            <tr bgcolor="45E39E">

                                <td>{{$v->sub_subject_code}}</td>
                                <td>{{$v->sub_subject_name}}</td>
                                <td>
                                    <form action="{{url('student/examregister')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Register</button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{url('student/examregisterCancel')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Cancel</button>
                                        </div>
                                    </form>
                                </td>

                            </tr>

                        @endif
                    @endif
                @endforeach

                @foreach($sub_subject as $v)
                    @if($v->subject_id == $s->subject2)
                        @foreach($levels as $level)
                            @if($v->level == $level->level)

                                <tr bgcolor="45E39E">
                                    {{--<div clasB39D"s="form-group">--}}
                                    <td>{{$v->sub_subject_code}}</td>
                                    <td>{{$v->sub_subject_name}}</td>
                                    <td>
                                        <form action="{{url('student/examregister')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Register</button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{url('student/examregisterCancel')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Cancel</button>
                                            </div>
                                        </form>
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @foreach($sub_subject as $v)
                    @if($v->subject_id == $s->subject3)
                        @foreach($levels as $level)
                            @if($v->level == $level->level)

                                <tr   bgcolor="45E39E">

                                    <td>{{$v->sub_subject_code}}</td>
                                    <td>{{$v->sub_subject_name}}</td>
                                    <td>
                                        <form action="{{url('student/examregister')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Register</button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{url('student/examregisterCancel')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Cancel</button>
                                            </div>
                                        </form>
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                    @endif
                @endforeach

            @endforeach

        @endif

        </tbody>
    </table>
    <h2>Total Payments for all Exams=Rs.{{$tot}}</h2>
    <?php
    }
    if(strtotime($my_date)<time())
    {
    ?>
    <h3> You can not register for the Examination. </h3>
    <?php
    }
    ?>



@endsection
@section('footer')
    If details are invalid place inform us.
@endsection