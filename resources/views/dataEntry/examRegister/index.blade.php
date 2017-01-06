@extends('layouts.dataEntry')
@section('title')

@endsection
@section('content')


    <table class="table">
        <thead>
        <tr>
            <th>Student Name</th>
            <th>User Name</th>
            <th>Total Payment</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>


        {{--@if($user)--}}
        {{--@foreach($arr as $ar)--}}
        {{--@foreach($user as $u)--}}
        {{--@if($ar->id==$u->id)--}}
        {{--<form action="{{url('')}}" method="POST">--}}
        {{--{{csrf_field()}}--}}
        {{--<input type="hidden" name="user_id" value="{{$s->user_id}}">--}}
        {{--<input type="hidden" name="sub_subject_id" value="{{$v->id}}">--}}
        {{--<tr>--}}
        {{--<div class="form-group">--}}
        {{--<td>{{$u->english_name}}</td>--}}
        {{--<td>{{$u->email}}</td>--}}
        {{--<td>Rs.</td>--}}
        {{--<td>{{$ar->tot}}</td>--}}
        {{--<td>--}}
        {{--<button type="submit" class="btn btn-default">Register</button>--}}
        {{--</td>--}}
        {{--</div>--}}


        {{--</tr>--}}
        {{--</form>--}}
        {{--@endif--}}
        {{--@endforeach--}}
        {{--@endforeach--}}
        {{--@endif--}}


        @foreach($std as $value)
            @php
                $tot = 0;
            @endphp
            {{--{{$tot}}--}}
            <tr>
                <td><a href="{{ url('/dataEntryStudentSubject/'.$value->id) }}">{{$value->user->english_name}}</a></td>
                <td>{{$value->user->email}}</td>
                @foreach($subject as $sub)
                    @if($value->subject1 == $sub->subject_id)
                        @foreach($payment as $pay)
                            @if($pay->level == 1)
                                {{--{{$value->subject1}}--}}
                                @php $tot+= $pay->amount @endphp
                            @endif
                        @endforeach
                    @endif
                    @if($value->subject2== $sub->subject_id)
                        @foreach($payment as $pay)
                            @if($pay->level == 2)
                                {{--{{$value->subject2}}--}}
                                @php $tot+= $pay->amount @endphp
                            @endif
                        @endforeach
                    @endif
                    @if($value->subject3 == $sub->subject_id)
                        @foreach($payment as $pay)
                            @if($pay->level == 3)
                                {{--{{$value->subject3}}--}}
                                @php $tot+= $pay->amount @endphp
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @php $tot=$tot/3 @endphp
                <td>{{$tot}}</td>
                <td>
                    <form action="{{url('dataEntry/examRegister')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{$value->user->id}}">
                        {{--<input type="hidden" name="sub_subject_id" value="{{$v->id}}">--}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Accept</button>
                        </div>
                    </form>
                </td>
                <td>
                    <form action="{{url('dataEntry/examregisterCancel')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{$value->user->id}}">
                        {{--<input type="hidden" name="sub_subject_id" value="{{$v->id}}">--}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Reject</button>
                        </div>
                    </form>
                </td>
                {{--@php $tot = 0 @endphp--}}
            </tr>


        @endforeach


        </tbody>
    </table>
@endsection
@section('footer')
    If details are invalid place inform us.
@endsection