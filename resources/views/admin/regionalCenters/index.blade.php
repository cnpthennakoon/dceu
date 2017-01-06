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
        <tr>
            <th>Center Id</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>

        @if($centers)
            @foreach($centers as $center)

                <tr>
                    <td>{{ $center->id }}</td>
                    <td>{{ $center->name }}</td>
                </tr>

        @endforeach
        @endif
    </table>

@stop