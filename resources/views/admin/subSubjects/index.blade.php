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
            <th>Sub Subject Code</th>
            {{--<th>Subject Code</th>--}}
            <th>Sub Subject Name</th>
            <th>Level</th>
        </tr>
        </thead>
        <tbody>

        @if($subjects)
            @foreach($subjects as $subject)

                <tr bgcolor="45E39E">
                    <td>{{ $subject->sub_subject_code }}</td>
                    {{--<td>{{ $subject->subject_id }}</td>--}}
                    <td>{{ $subject->sub_subject_name }}</td>
                    <td>{{ $subject->level }}</td>
                </tr>

        @endforeach
        @endif
    </table>

@stop