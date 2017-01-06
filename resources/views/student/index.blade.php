@extends('layouts.student')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-olive-active">
                <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Current Level</span>
                    <span class="info-box-number">
                        @foreach($levels as $level)

                            {{ $level->level}}

                        @endforeach
                    </span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    {{--<span class="progress-description">--}}
                    {{--GAQ Level--}}
                    {{--</span>--}}
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-light-blue-active">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">GPA</span>
                    <span class="info-box-number">{{round($gpa,2)}}</span>

                    <?php

                        if($gpa == 4){ ?>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                    <?php
                        }elseif($gpa >= 3){ ?>
                            <div class="progress">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                    <?php
                        }elseif($gpa >= 2){ ?>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                    <?php
                        }elseif($gpa >= 1){ ?>
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%"></div>
                            </div>
                    <?php
                        }else{ ?>
                        <div class="progress">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <?php
                        }
                        ?>

                    {{--<span class="progress-description">--}}
                        {{--70% Increase in 30 Days--}}
                      {{--</span>--}}
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
            {{--<div class="info-box bg-yellow">--}}
                {{--<span class="info-box-icon"><i class="fa fa-calendar"></i></span>--}}

                {{--<div class="info-box-content">--}}
                    {{--<span class="info-box-text">Events</span>--}}
                    {{--<span class="info-box-number">0</span>--}}

                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" style="width: 0%"></div>--}}
                    {{--</div>--}}
                    {{--<span class="progress-description">--}}
                        {{--70% Increase in 30 Days--}}
                      {{--</span>--}}
                {{--</div>--}}
                {{--<!-- /.info-box-content -->--}}
            {{--</div>--}}
            {{--<!-- /.info-box -->--}}
        {{--</div>--}}
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-user"></i></span>

                {{--<span> class="info-box-text">Profile</a></span>--}}
                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{ url('student/profile') }}">Profile</a></span>
                    <span class="info-box-number">&nbsp;</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description"><i class="fa fa-edit">
                        Edit Profile
                      </i></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="col-sm-7">
        <div class="panel panel-primary" style="background:transparent;">
            <div class="panel-heading">Notices</div>

            <table class="table">
                <thead>
                <tr>
                    <th>Notice</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Added date</th>
                </tr>
                </thead>

                <tbody>
                @if($notices1)
                    @foreach($notices1->reverse() as $notice)
                        <tr>
                            <td><a href="{{ asset($notice->photo->file) }} "target="_blank">Click to view </a></td>
                            <td>{{ $notice->title }}</td>
                            <td>{{ str_limit($notice->body,15) }}</td>
                            <td>{{ $notice->created_at->diffForhumans() }}</td>
                        </tr>

                    @endforeach
                @endif
                </tbody>
            </table>


        </div>
    </div>




    @stop