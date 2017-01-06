@extends('layouts.dataEntry')

@section('content')


    <h1>Notices</h1>

    <table class="table">
        <thead>
          <tr>
              <th>Notice</th>
              <th>Owner</th>
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
              <td>{{ $notice->user->english_name }}</td>
              <td><a href="{{ route('admin.notices.edit', $notice->id) }}">{{ $notice->title }}</a></td>
              <td>{{ str_limit($notice->body,15) }}</td>
              <td>{{ $notice->created_at->diffForhumans() }}</td>
              <td>{{ $notice->updated_at->diffForhumans() }}</td>
          </tr>

            @endforeach
            @endif
        </tbody>
    </table>

    @stop