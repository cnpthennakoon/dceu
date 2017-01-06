@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-red-active">{{ session('deleted_user') }}</p>

    @endif

    @if(Session::has('created_user'))

        <p class="bg-lime-active">{{ session('created_user') }}</p>

    @endif

    @if(Session::has('updated_user'))

        <p class="bg-teal-active">{{ session('updated_user') }}</p>

    @endif



{{--search box--}}
    <div class="col-md-2">
{{--        {!! Form::open(['method' => 'GET', 'url' =>'admin/users', 'role' => 'search']) !!}--}}
        {!! Form::open(['method'=>'GET',  'action'=>'AdminUsersController@index', 'role'=>'search']) !!}
        <div class="input-group custom-search-form">
            {!! Form::select('search', ['0' => 'Select', '1' => 'Administrator', '3' => 'Data Entry Operator'], '1') !!}

            <span class="input-group-btn">
                <button type="submit" class = "btn btn-default-sm">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        {!! Form::close() !!}
    </div>


    {{--<table class="table">--}}
        {{--<tr>--}}
            {{--<td>--}}
                {{--{!! Form::open(['method'=>'POST',  'action'=>'AdminUsersController@index']) !!}--}}
                {{--<div class="col-sm-4">--}}

                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('role_id', 'Search by role:') !!}--}}
                        {{--{!! Form::select('name',['1' => 'Administrator', '2' => 'Clerk', '3' => 'Data Entry Operator'], null, ['placeholder' => 'Select role'], ['class'=>'form-control']) !!}--}}
                        {{--{!! Form::submit('Search', ['class'=>'btn btn-success']) !!}--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--</table>--}}



    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)

                <tr>
                    <td>{{ $user->id }}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{ $user->english_name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        {!! $users->links() !!}
    </div>

@stop