
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

        {{--{{ HTML::image('img/Capture1.jpg', array( 'width' => 70, 'height' => 70 )) }}--}}


        {!!Form::open(['method'=>'post', 'action'=>'Registration@store'])!!}

        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">


        <div id="degree-form">

            <table align="center">
                <tr>
                    <td width="1000"  align="right"  colspan="4" bgcolor="#7B7F7E" style="border-radius:5px">
                        <h1 align="center"><font color="white">Online Registration</font></h1><br>
                    </td>
                </tr>
                <tr>
                    <td width="1000" align="right" height="10" colspan="4" bgcolor="#555555" style="border-radius:5px">
                        <h2 align="center"> Personal Information </h2>
                    </td>

                </tr>

            </table>

            <table width="600px" align="center">



                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('english_name','Full Name in English :') !!}</td>
                    <td>{!! Form::text('english_name',null,['class'=>'form-control', 'placeholder'=>'Full Name in English', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} <td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('dob','Date of Birth :') !!}</td>
                    <td>{!! Form::date('dob', \Carbon\Carbon::now(),['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('nic','NIC Number :') !!}</td>
                    <td>{!! Form::number('nic', null, ['class'=>'form-control', 'placeholder'=>'NIC No','style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!}</td><td>V</td>
                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('gender','Gender :') !!}</td>
                    <td>{!! Form::select('gender', array(''=>'Gender', 'male'=>'Male', 'female'=>'Female'),'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('district','District :') !!}</td>
                    <td>{!! Form::select('district', array(''=>'District','Ampara' => 'Ampara', 'Anuradhapura' => 'Anuradhapura', 'Badulla' => 'Badulla','Batticaloa' => 'Batticaloa','Colombo' => 'Colombo','Galle' => 'Galle','Gampaha' => 'Gampaha', 'Hambantota' => 'Hambantota', 'Jafna' => 'Jafna', 'Kaluthara'=>'Kaluthara', 'Kandy'=>'Kandy', 'Kegalle'=>'Kegalle', 'Kilinochchi'=>'Kilinochchi', 'Kurunegala'=>'Kurunegala', 'Mannar'=>'Mannar', 'Matale'=>'Matale', 'Matara'=>'Matara', 'Monaragala'=>'Monaragala', 'Mullaitivu'=>'Mullaitivu', 'Nuwara_eliya'=>'Nuwara_eliya', 'Polonnaruwa'=>'Polonnaruwa', 'Puttalam'=>'Puttalam', 'Ratnapura'=>'Ratnapura', 'Trincomalee'=>'Trincomalee', 'Vavuniya'=>'Vavuniya'),'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('address1','Address Line 1 :') !!}</td>
                    <td>{!! Form::text('address1',null,['class'=>'form-control', 'placeholder'=>'Address Line 1', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('address2','Address Line 2 :') !!}</td>
                    <td>{!! Form::text('address2',null,['class'=>'form-control', 'placeholder'=>'Address Line 2', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('address3','Address Line 3 :') !!}</td>
                    <td>{!! Form::text('address3',null,['class'=>'form-control', 'placeholder'=>'Address Line 3', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('address4','Address Line 4 :') !!}</td>
                    <td>{!! Form::text('address4',null,['class'=>'form-control', 'placeholder'=>'Address Line 4', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('postalcode','Postal Code :') !!}</td>
                    <td>{!! Form::number('postalcode', null, ['class'=>'form-control', 'placeholder'=>'Postal Code', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('telhome','Telephone number-Home :') !!}</td>
                    <td>{!! Form::number('telhome', 0, array('class' => 'form-control', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box')) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('telmob','Telephone number-Mobile :') !!}</td>
                    <td>{!! Form::number('telmob',0, array('class' => 'form-control', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box')) !!} </td>

                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('email','E-mail :') !!}</td>
                    <td>{!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'E-mail', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>

                </tr>

            </table>

            <table align="center">
                <tr>
                    <td width="1000" align="right" height="10" colspan="4" bgcolor="#555555" style="border-radius:5px">
                        <h2 align="center">Details about Degree Course</h2>
                    </td>

                </tr>
            </table>

            <table width="600px" align="center">

                <tr>

                    <td style="width: 35%; font-size: large; font-family: 'Times New Roman'">{!! Form::label('degree','Degree :') !!}</td>
                    <td style="width: 55%">{!! Form::select('degree', array(''=>'Degree', 'bsc_arts' => 'Bachelor of Arts(External) Degree'),'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>
                </tr>

                <tr>

                    <td style="width: 35%; font-size: large; font-family: 'Times New Roman'">{!! Form::label('batch','Academic batch :') !!}</td>
                    <td style="width: 55%">{{ Form::select('batch', array('' => 'Select Batch','2000'=>'2000', '2001'=> '2001', '2002'=>'2002', '2003'=>'2003', '2004'=>'2004','2005'=>'2005','2006'=>'2006','2007'=>'2007','2008'=>'2008','2009'=>'2009','2010'=>'2010','2011'=>'2011','2012'=>'2012','2013'=>'2013','2014'=>'2014','2015'=>'2015','2016'=>'2016','2017'=>'2017'),'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) }} </td>
                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('subject1','Subject 1 :') !!}</td>
                    <td>{!! Form::select('subject1', $subs) !!}</td>

                </tr>>

                <tr>

                <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('subject2','Subject 2 :') !!}</td>
                <td>{!! Form::select('subject2', $subs) !!}</td>
                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('subject3','Subject 3 :') !!}</td>
                    <td>{!! Form::select('subject3', $subs) !!}</td>

                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('examcenter','Exam Center :') !!}</td>
                    <td>{!! Form::select('examcenter', $excenters) !!}</td>
                </tr>

            </table>

            <table align="center">
                <tr>
                    <td width="1000" align="center" height="10" colspan="4" bgcolor="#555555" style="border-radius:5px">
                        <h2 align="center">Educational Qualifications</h2>
                    </td>

                </tr>
            </table>

            <table width="600px" align="center">

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('almedium','A/L Exam Medium :') !!}</td>
                    <td>{!! Form::select('almedium', array(''=>'A/L Exam Medium', 'Sin' => 'Sinhala', 'Eng' => 'English'),'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>
                </tr>

                <tr>

                    <td style="width: 35%; font-size: large; font-family: 'Times New Roman'">{!! Form::label('alyear','A/L Exam Year :') !!}</td>
                    <td style="width: 35%; font-size: large; font-family: 'Times New Roman'">{!! Form::selectRange('alyear',1990,2020) !!}

                </tr>


                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('alindexno','A/L Index Number :') !!}</td>
                    <td>{!! Form::number('alindexno', null, ['class'=>'form-control', 'placeholder'=>'A/L Index No', 'style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>
                </tr>

                <tr>

                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('alsubject1','A/L Subject 1 :') !!}</td>
                    <td>{!! Form::select('alsubject1',$alsubjects) !!}</td>
                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('al_sub1_result','A/L Subject 1 Result:') !!}</td>
                    <td>{!! Form::select('al_sub1_result', ['' => 'Result...', '1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'],'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>
                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('alsubject2','A/L Subject 2 :') !!}</td>
                    <td>{!! Form::select('alsubject2', $alsubjects) !!}</td>
                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('al_sub2_result','A/L Subject 2 Result:') !!}</td>
                    <td>{!! Form::select('al_sub2_result', ['' => 'Result...','1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'],'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>
                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('alsubject3','A/L Subject 3 :') !!}</td>
                    <td>{!! Form::select('alsubject3', $alsubjects) !!}</td>
                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('al_sub3_result','A/L Subject 3 Result:') !!}</td>
                    <td>{!! Form::select('al_sub3_result', ['' => 'Result...','1' => 'A', '2' => 'B', '3' => 'C', '4' => 'S', '5' => 'F','6' => 'E'],'',['style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!} </td>
                </tr>

                <tr>
                    <td style="font-size: large; font-family: 'Times New Roman'">{!! Form::label('z_score', 'Z-Score:') !!}</td>
                    <td>{!! Form::number('z_score', null,   ['class'=>'form-control', 'step'=>'0.0001', 'placeholder'=>'Z Score','style'=>'width: 100%; padding: 8px 15px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box']) !!}</td>
                </tr>

            </table>

            <br>

            <div class="submit">

                <table align="center">

                    <tr>
                        <td align="center">{!! Form::submit('Submit', ['class'=>'btn btn-primary', 'style' => 'width: 110px; height: 35px; font-family: Tahoma; font-size: 12pt; color: white; background-color:#242a41; font-weight: bold; border: 1px solid #DDF0ED; border-radius:5px; cursor:pointer']) !!}</td>
                        <td align="center">{!! Form::reset('Clear', ['style' => 'width: 110px; height: 35px; font-family: Tahoma; font-size: 12pt; color: white; background-color:#242a41; font-weight: bold; border: 1px solid #DDF0ED; border-radius:5px; cursor:pointer']) !!}</td>
                    </tr>

                </table>

            </div>



            {!! Form::close() !!}




        </div>

        @if(count($errors)>0)
            <div id="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

@endsection