@extends('layouts.app')
    <title>Page not found</title>
@section('content')

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">


        <section class="content">
            <div class="error-page">
                <h2 class="headline text-yellow"> 404</h2>

                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                </div>

            </div>

        </section>


    <div>

        <footer class="main-footer">
            <strong>University of Ruhuna,<a href="http://www.dceu.ruh.ac.lk/"> Distance and Continuing Education Unit </a></strong>
        </footer>

    </div>
@stop
