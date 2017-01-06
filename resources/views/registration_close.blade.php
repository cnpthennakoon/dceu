@extends('layouts.app')

@section('content')
    <head>
        <title>Online Registration</title>
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::script('js/jquery.js')!!}
    </head>

    <div id="online-reg">

        <table width="1000" height="189" align="center">
            <tr> <td align="center">

                    {{ HTML::image('img/Capture.jpg', 'alt', array( 'width' => 1000, 'height' => 143 )) }} </td></tr>

        </table>


        <table align="center">
            <tr>
                <td width="1000"  align="right"  colspan="4" bgcolor="#ff1a1a" style="border-radius:5px">
                    <h1 align="center"><font color="white">Sorry!! Online Registration Closed</font></h1><br>
                </td>
            </tr>

        </table>

@endsection