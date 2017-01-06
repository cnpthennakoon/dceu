@extends('layouts.dataEntry')

@section('content')





    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">


                    <div class="panel-body">

                        {{--<form action='ClosingDateController@store' method='POST'>--}}
                            {{--<lable>Date :</lable>--}}
                            {{--<input type="date" name="closingDate"/></br>--}}

                            {{--<input type="submit" name="btnsubmit" value="Submit" />--}}
                        {{--</form>--}}

                        {!! Form::open(['method' => 'POST', 'action' => 'ClosingDateController@store']) !!}

                        {!! Form::label('closingDate', 'Date :') !!}
                        {!! Form::date('closingDate', 'Date') !!}

                        {!! Form::submit('Submit') !!}


                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

{{--@stop--}}