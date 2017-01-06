@extends('layouts.student')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">


                    <div class="panel-body">
                        {{--You are logged in {{ Auth::user()->name }}--}}

                        <p>Your Admission download in here..<button><a href="{{ url('/admissions') }}">Admission</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
