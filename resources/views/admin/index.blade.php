@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-primary" style="background:transparent;">
                <div class="panel-heading">Number of Students Selected</div>
            {!! $chart1->render() !!}
                </div>
        </div>


        <div class="col-sm-4">
            <div class="panel panel-primary" style="background:transparent;">
                <div class="panel-heading">Location map</div>
            <div id="map">
            </div>
            </div>
        </div>


        <div class="col-sm-3">
            <table class="table">
                <tbody>
                <tr>
                    <td><img height="30" src="img/lo.png" alt="User Image"> :</td>
                    <td>Main Buildings</td>
                </tr>
                <tr>
                    <td><img height="30" src="img/beachflag.png" alt="User Image"> :</td>
                    <td>Available Examination centers</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>


@stop