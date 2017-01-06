@extends('layouts.app')

@section('content')
    <h1>Notices</h1>
    <div class="panel-body" style="text-align: center">
    <table class="table">
        <thead>
        <tr>
            <th>Notice</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>

        <tbody>
        @if($notices)
            @foreach($notices as $notice)
                <tr>
                    <td><a href="{{ asset($notice->photo->file) }} "target="_blank">Click to view </a></td>
                    <td>{{ $notice->title }}</td>
                    <td>{{ str_limit($notice->body,15) }}</td>
                    <td>{{ $notice->created_at->diffForhumans() }}</td>
                    <td>{{ $notice->updated_at->diffForhumans() }}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
    </div>
@endsection
