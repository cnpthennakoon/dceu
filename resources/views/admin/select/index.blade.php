@extends('layouts.dataEntry')

@section('content')

    <h3>Applied Students</h3>

    <div class="row">
        <div class="col-md-1">

            {!! Form::open(['method'=>'GET', 'action'=>'SelectStudentsController@index', 'role'=>'search']) !!}
            <div class="input-group custom-search-form">
                {!! Form::select('search', ['0' => 'Select',


                 '2009' => '2009',
                 '2010' => '2010',
                 '2011' => '2011',
                 '2012' => '2012',
                 '2013' => '2013',
                 '2014' => '2014',
                 '2015' => '2015',
                 '2016' => '2016',
                 '2017' => '2017',
                 '2018' => '2018',
                 '2019' => '2019',
                 '2020' => '2020',
                 '2021' => '2021',
                 '2022' => '2022',
                 '2023' => '2023',
                 '2024' => '2024',
                 '2025' => '2025',
                 '2026' => '2026',
                 '2027' => '2027',
                 '2028' => '2028'], '2016') !!}

                <span class="input-group-btn">
                <button type="submit" class="btn btn-default-sm">
                    <i class="fa fa-search"></i>
                </button>
            </span>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Academic Year</th>
                    <th>Registered Date</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tbody>
                @if($students)
                    @foreach($students as $student)

                        <tr>
                            <td>{{$student->id}}</td>
                            <td><a href="{{route('admin.select.edit', $student->id)}}">{{$student->english_name}}</a>
                            </td>
                            <td>{{$student->batch}}</td>
                            <td>{{$student->created_at}}</td>
                            <td>

                                <?php $added = 0; ?>
                                @foreach($statuses as $status)

                                    @if($status->email ==  $student->email )
                                        Added
                                            <?php $added = 1; ?>
                                    @endif
                                @endforeach
                                @if($added == 0)
                                    Not added

                                    @endif
                            </td>
                        </tr>

                    @endforeach
                @endif

                </tbody>
            </table>

        </div>

    </div>

    <div class="row">
        {!! $students->links() !!}
    </div>

@stop



