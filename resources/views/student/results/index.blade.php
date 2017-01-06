@extends('layouts.student')

@section('content')
    <div class="row">

        {{--<div class="col-sm-3">--}}

            {{--<table class="table">--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<th>Currently your in Level:</th>--}}

                    {{--@foreach($levels as $level)--}}

                        {{--<th>{{ $level->level}}</th>--}}

                    {{--@endforeach--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}

        {{--</div>--}}


        {{--<div class="col-sm-8">--}}
            {{--@if($results)--}}

                {{--<table class="table table-bordered">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Level</th>--}}
                        {{--<th>Subject Code</th>--}}
                        {{--<th>Subject Name</th>--}}
                        {{--<th>Grade</th>--}}
                        {{--<th>Year</th>--}}

                    {{--</tr>--}}
                    {{--</thead>--}}

                    {{--<tbody>--}}

                    {{--@foreach($results as $result)--}}
                        {{--@if($result->sub_subject->level == 1)--}}
                            {{--@if($result->attempt == 1)--}}
                                {{--<tr bgcolor="#a3ffef">--}}

                                    {{--<td>{{ $result->sub_subject->level }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_code }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_name }}</td>--}}
                                    {{--@if($result->marks>74)--}}
                                        {{--<td>A</td>--}}
                                    {{--@elseif($result->marks>64)--}}
                                        {{--<td>B</td>--}}
                                    {{--@elseif($result->marks>50)--}}
                                        {{--<td>C</td>--}}
                                    {{--@elseif($result->marks>34)--}}
                                        {{--<td>S</td>--}}
                                    {{--@else--}}
                                        {{--<td>Fail</td>--}}
                                    {{--@endif--}}

                                    {{--<td>{{ $result->year }}</td>--}}

                                {{--</tr>--}}
                            {{--@else--}}
                                {{--<tr bgcolor="#7dc6ba">--}}

                                    {{--<td>{{ $result->sub_subject->level }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_code }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_name }}</td>--}}
                                    {{--@if($result->marks>74)--}}
                                        {{--<td>A</td>--}}
                                    {{--@elseif($result->marks>64)--}}
                                        {{--<td>B</td>--}}
                                    {{--@elseif($result->marks>50)--}}
                                        {{--<td>C</td>--}}
                                    {{--@elseif($result->marks>34)--}}
                                        {{--<td>S</td>--}}
                                    {{--@else--}}
                                        {{--<td>Fail</td>--}}
                                    {{--@endif--}}

                                    {{--<td>{{ $result->year }}</td>--}}

                                {{--</tr>--}}

                            {{--@endif--}}


                        {{--@elseif($result->sub_subject->level == 2)--}}
                            {{--@if($result->attempt == 1)--}}
                                {{--<tr bgcolor="#a9ff96">--}}

                                    {{--<td>{{ $result->sub_subject->level }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_code }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_name }}</td>--}}
                                    {{--@if($result->marks>74)--}}
                                        {{--<td>A</td>--}}
                                    {{--@elseif($result->marks>64)--}}
                                        {{--<td>B</td>--}}
                                    {{--@elseif($result->marks>50)--}}
                                        {{--<td>C</td>--}}
                                    {{--@elseif($result->marks>34)--}}
                                        {{--<td>S</td>--}}
                                    {{--@else--}}
                                        {{--<td>Fail</td>--}}
                                    {{--@endif--}}

                                    {{--<td>{{ $result->year }}</td>--}}

                                {{--</tr>--}}
                            {{--@else--}}
                                {{--<tr bgcolor="#8cd37c">--}}

                                    {{--<td>{{ $result->sub_subject->level }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_code }}</td>--}}
                                    {{--<td>{{ $result->sub_subject->sub_subject_name }}</td>--}}
                                    {{--@if($result->marks>74)--}}
                                        {{--<td>A</td>--}}
                                    {{--@elseif($result->marks>64)--}}
                                        {{--<td>B</td>--}}
                                    {{--@elseif($result->marks>50)--}}
                                        {{--<td>C</td>--}}
                                    {{--@elseif($result->marks>34)--}}
                                        {{--<td>S</td>--}}
                                    {{--@else--}}
                                        {{--<td>Fail</td>--}}
                                    {{--@endif--}}

                                    {{--<td>{{ $result->year }}</td>--}}

                                {{--</tr>--}}
                            {{--@endif--}}

                            {{--@elseif($result->sub_subject->level == 3)--}}
                                {{--@if($result->attempt == 1)--}}
                                    {{--<tr bgcolor="#ffd3d3">--}}

                                        {{--<td>{{ $result->sub_subject->level }}</td>--}}
                                        {{--<td>{{ $result->sub_subject->sub_subject_code }}</td>--}}
                                        {{--<td>{{ $result->sub_subject->sub_subject_name }}</td>--}}
                                        {{--@if($result->marks>74)--}}
                                            {{--<td>A</td>--}}
                                        {{--@elseif($result->marks>64)--}}
                                            {{--<td>B</td>--}}
                                        {{--@elseif($result->marks>50)--}}
                                            {{--<td>C</td>--}}
                                        {{--@elseif($result->marks>34)--}}
                                            {{--<td>S</td>--}}
                                        {{--@else--}}
                                            {{--<td>Fail</td>--}}
                                        {{--@endif--}}

                                        {{--<td>{{ $result->year }}</td>--}}

                                    {{--</tr>--}}
                                {{--@else--}}
                                    {{--<tr bgcolor="#ce8e8e">--}}

                                        {{--<td>{{ $result->sub_subject->level }}</td>--}}
                                        {{--<td>{{ $result->sub_subject->sub_subject_code }}</td>--}}
                                        {{--<td>{{ $result->sub_subject->sub_subject_name }}</td>--}}
                                        {{--@if($result->marks>74)--}}
                                            {{--<td>A</td>--}}
                                        {{--@elseif($result->marks>64)--}}
                                            {{--<td>B</td>--}}
                                        {{--@elseif($result->marks>50)--}}
                                            {{--<td>C</td>--}}
                                        {{--@elseif($result->marks>34)--}}
                                            {{--<td>S</td>--}}
                                        {{--@else--}}
                                            {{--<td>Fail</td>--}}
                                        {{--@endif--}}

                                        {{--<td>{{ $result->year }}</td>--}}

                                    {{--</tr>--}}

                                {{--@endif--}}
                        {{--@endif--}}
                    {{--@endforeach--}}

                    {{--</tbody>--}}
                {{--</table>--}}

            {{--@endif--}}
        {{--</div>--}}






        <div class="col-sm-8">
            @if($results)

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Level</th>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Grade</th>
                        <th>Year</th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($results as $result)
                            @if($result->attempt == 1)
                                <tr bgcolor="45B39D">

                                    <td>{{ $result->sub_subject->level }}</td>
                                    <td>{{ $result->sub_subject->sub_subject_code }}</td>
                                    <td>{{ $result->sub_subject->sub_subject_name }}</td>
                                    @if($result->marks>74)
                                        <td>A</td>
                                    @elseif($result->marks>64)
                                        <td>B</td>
                                    @elseif($result->marks>50)
                                        <td>C</td>
                                    @elseif($result->marks>34)
                                        <td>S</td>
                                    @else
                                        <td>F</td>
                                    @endif

                                    <td>{{ $result->year }}</td>

                                </tr>
                            @else
                                <tr bgcolor="#58D68D">

                                    <td>{{ $result->sub_subject->level }}</td>
                                    <td>{{ $result->sub_subject->sub_subject_code }}</td>
                                    <td>{{ $result->sub_subject->sub_subject_name }}</td>
                                    @if($result->marks>74)
                                        <td>A</td>
                                    @elseif($result->marks>64)
                                        <td>B</td>
                                    @elseif($result->marks>50)
                                        <td>C</td>
                                    @elseif($result->marks>34)
                                        <td>S</td>
                                    @else
                                        <td>Fail</td>
                                    @endif

                                    <td>{{ $result->year }}</td>

                                </tr>

                            @endif

                    @endforeach

                    </tbody>
                </table>

            @endif
        </div>





        <div class="col-sm-2">
            <div id="external-events">
                <div class="external-event bg-olive">Attempt 1</div>
                <div class="external-event bg-lime-active">Repeat Attempts</div>
            </div>
        </div>



        {{--<div class="col-sm-4">--}}
        {{--<div class="box box-danger">--}}
            {{--<div class="box-header with-border">--}}
                {{--<h3 class="box-title">Donut Chart</h3>--}}

                {{--<div class="box-tools pull-right">--}}
                    {{--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>--}}
                    {{--</button>--}}
                    {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="box-body">--}}
                {{--<canvas id="pieChart" style="height:250px"></canvas>--}}
            {{--</div>--}}
            {{--<!-- /.box-body -->--}}
        {{--</div>--}}
        {{--</div>--}}



    </div>

@stop