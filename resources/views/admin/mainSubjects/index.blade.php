@extends('layouts.admin')

@section('content')

    {{--@if(Session::has('deleted_user'))--}}

    {{--<p class="bg-red-active">{{ session('deleted_user') }}</p>--}}

    {{--@endif--}}

    {{--@if(Session::has('created_subject'))--}}

    {{--<p class="bg-lime-active">{{ session('created_subject') }}</p>--}}

    {{--@endif--}}

    {{--@if(Session::has('updated_user'))--}}

    {{--<p class="bg-teal-active">{{ session('updated_user') }}</p>--}}

    {{--@endif--}}



    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr bgcolor="45B39D">
            <th>Subject Code</th>
            <th>Subject Name</th>
        </tr>
        </thead>
        <tbody>

        @if($subjects)
            @foreach($subjects as $subject)

                <tr bgcolor="45E39E">
                    <td>{{ $subject->subject_code }}</td>
                    {{--<td><a href="{{route('admin.mainSubjects.edit', $subject->id)}}">{{ $subject->subject_code }}</a></td>--}}
                    <td>{{ $subject->subject_name }}</td>
                </tr>

        @endforeach
        @endif
    </table>

@stop