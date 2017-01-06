@extends('layouts.dataEntry')

@section('content')

    <hr>

    <h3>Instructions</h3>

    <p>
        Fallow these instructions to add results <br>
    <hr>
    1. Open Microsoft Excel in your computer
    <img height="45" src="{{ asset('/img/Excel-icon.png') }}">

    <br>
    <hr>

    2. Create the results table in given format <br>
    <img height="125" src="{{ asset('/img/excel.JPG') }}">

    <br>
    <hr>

    3. Save the file as "file_name.csv" <br>
    <img height="35" src="{{ asset('/img/excel1.JPG') }}">

    <br>
    <hr>
    4. Choose and import the saved file


    </p>
    <br>
    <form action="" method="POST" ENCTYPE="multipart/form-data">

        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <lable><strong>Import file</strong></lable>
        <input type="file" name="file" ><br>
        <button type="submit" class = "btn btn-primary">Import</button>
    </form>


@stop