@extends('layouts.dataEntry')
@section('title')
    Main Subject
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Subject Code</th>
            <th>Subject Name</th>
        </tr>
        </thead>
        <tbody>
        @if($student)
            @foreach($student as $s)

                @foreach($sub_subject as $v)
                    @if($v->subject_id == $s->subject1)
                        <tr>
                            <td>{{$v->sub_subject_code}}</td>
                            <td>{{$v->sub_subject_name}}</td>
                        </tr>
                    @endif
                @endforeach
                @foreach($sub_subject as $v)
                    @if($v->subject_id == $s->subject2)
                        <tr>
                            <td>{{$v->sub_subject_code}}</td>
                            <td>{{$v->sub_subject_name}}</td>
                        </tr>
                    @endif
                @endforeach
                @foreach($sub_subject as $v)
                    @if($v->subject_id == $s->subject3)
                        <tr>
                            <td>{{$v->sub_subject_code}}</td>
                            <td>{{$v->sub_subject_name}}</td>
                        </tr>
                    @endif
                @endforeach

            @endforeach
        @endif
        </tbody>
    </table>

@endsection
@section('footer')
    If details are invalid place inform us.
@endsection