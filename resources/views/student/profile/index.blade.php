@extends('layouts.student')

@section('content')

    <div class="col-sm-3">
        <img src="{{Auth::user()->photo ? Auth::user()->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-md-4">
        <table class="table">

            @if($details)
                @foreach($details as $detail)
                    <tr>
                        <th>Name :</th>
                        <td>{{$detail->english_name}}</td>
                    </tr>

                    <tr>
                        <th>Email :</th>
                        <td>{{$detail->email}}</td>
                    </tr>

                    <tr>
                        <th>Current Level:</th>
                        <td>{{$detail->level}}</td>
                    </tr>

                    <tr>
                        <th>Mobile</th>
                        <td>{{$detail->telmob}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
@stop