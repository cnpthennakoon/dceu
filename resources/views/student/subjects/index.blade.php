@extends('layouts.student')
@section('title')
    Main Subject
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr bgcolor="45B39D">
            <th>Subject Code</th>
            <th>Subject Name</th>
        </tr>
        </thead>
        <tbody>
        @if($s1)
            @foreach($s1 as $a)
                <tr bgcolor="45E39E">


                    @foreach($subject as $v)
                        @if($v->id == $a->subject1)
                            <td>{{$v->subject_code}}</td>
                            <td>{{$v->subject_name}}</td>
                        @endif
                    @endforeach

                </tr>
                <tr bgcolor="45E39E">
                    @foreach($subject as $v)
                        @if($v->id == $a->subject2)
                            <td>{{$v->subject_code}}</td>
                            <td>{{$v->subject_name}}</td>
                        @endif
                    @endforeach
                </tr>
                <tr bgcolor="45E39E">
                    @foreach($subject as $v)
                        @if($v->id == $a->subject3)
                            <td>{{$v->subject_code}}</td>
                            <td>{{$v->subject_name}}</td>
                        @endif
                    @endforeach
                </tr>
                {{--<td>{{$a->subject_name}}</td>--}}
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
@section('footer')
    If details are invalid place inform us.
@endsection