@extends('layouts.dataEntry')

@section('content')

    <div class="col-sm-5">
        <div class="panel panel-primary" style="background:transparent;">
            <div class="panel-heading">Number of Students Applied to the degree program</div>
            {!! $chart2->render() !!}
        </div>
    </div>

    <div class="col-sm-7">
        <div class="panel panel-primary" style="background:transparent;">
            <div class="panel-heading">Notices</div>

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
                @if($notices1)
                    @foreach($notices1 as $notice)
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

        </div>
    </div>

    @stop