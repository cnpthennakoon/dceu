


<h1 align="center"><b>UNIVERSITY OF RUHUNA</b></h1>
<h2 align="center">DISTANCE AND CONTINUING EDUCATION UNIT</h2>
<h3 align="center">EXAMINATION ADMISSION CARD - FIRST TIME CANDIDATE</h3>


<p>Examination :- Bachelor of Arts General (External) Degree part I - 2013 Examination

<p>Year :- August/September 2013
<p>Name of candidate :- {{ Auth::user()->english_name }}

<p>Has been admitted to the above examination. He / She shall offer the prefer mentioned below.


<p align="right">.........................................</p>
<p align="right">Assistant Registrar (DCEU)

<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------</p>


<h3 align="center">Attestation</h3>

<p>This is to certify that I have read carefully and understood the instructiona and rules issued to candidates.


<p>Signature of Candidate :- .......................................

<p>I certify that the above Candidate who has signed in my presence is known to me.


<p>Date :- ........................

<p align="right">.................................</p>
<p align="right">Signature of Attestor </p>


<p>Name of Attestor :- ...........................................................................................................................................

<p>Designation :- ................................................................................................................................................
<p>Address :- ....................................................................................................................................................


<p>*The Attestor should be a permanent Teacher / Staff officer in the University Service / Staff officer in the Government Service or state Corparation / Principal / Inclumbent of a Buddhist Vihara / Justice of the Peace / Attorney-at-law / Grama Niladhari of the Division.


<p align="center">-------------------------------------------------------------------------------------------------------------------------------------------------</p>


<h3 align="center">Important</h3>

<p>i. No candidate shall be admitted to the examination hall without the Admission Card.
<p></p><b>ii. Candidates are not allowed to enter into the examination hall until call by the invigilators.</b>
<p>iii. A Candidate who loses his Admission Card shall pay Rs.15/- to obtain a duplicate.
<p>iv. The Candidate shall sign in the appropriate column against each paper foe each sitting. In the presence of an invigilator and he shall get it authenticated by that invigilator.

<p>v. The candidate shall hand over his / her Admission Card to the Supervisor as soon as he / she finishes his / her last paper relevant to the examination.


{{--<table class="table">--}}
    {{--<thead>--}}
    {{--<tr>--}}
        {{--<th>Subject Code</th>--}}
        {{--<th>Subject Name</th>--}}
        {{--<th></th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}


    {{--@if($student)--}}
        {{--@foreach($student as $s)--}}
            {{--@foreach($sub_subject as $v)--}}
                {{--@if($v->level == Auth::user()->level)--}}
                    {{--@if($v->subject_id == $s->subject1)--}}
                        {{--<form action="{{url('student/examregister')}}" method="POST">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<input type="hidden" name="user_id" value="{{$s->user_id}}">--}}
                        {{--<input type="hidden" name="sub_subject_id" value="{{$v->id}}">--}}
                        {{--<tr>--}}
                            {{--<div class="form-group">--}}
                            {{--<td>{{$v->sub_subject_code}}</td>--}}
                            {{--<td>{{$v->sub_subject_name}}</td>--}}
                            {{--<td>--}}
                            {{--<button type="submit" class="btn btn-default">Register</button>--}}
                            {{--</td>--}}
                            {{--</div>--}}
                        {{--</tr>--}}
                        {{--</form>--}}
                    {{--@endif--}}
                {{--@endif--}}
            {{--@endforeach--}}

            {{--@foreach($sub_subject as $v)--}}
                {{--@if($v->subject_id == $s->subject2)--}}
                    {{--@foreach($levels as $level)--}}
                        {{--@if($v->level == $level->level)--}}
                            {{--<form action="{{url('student/examregister')}}" method="POST">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<input type="hidden" name="user_id" value="{{$s->user_id}}">--}}
                            {{--<input type="hidden" name="sub_subject_id" value="{{$v->id}}">--}}
                            {{--<tr>--}}
                                {{--<div class="form-group">--}}
                                {{--<td>{{$v->sub_subject_code}}</td>--}}
                                {{--<td>{{$v->sub_subject_name}}</td>--}}
                                {{--<td>--}}
                                {{--<button type="submit" class="btn btn-default">Register</button>--}}
                                {{--</td>--}}
                                {{--</div>--}}
                                {{--</tr>--}}
                                {{--</form>--}}
                            {{--</tr>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            {{--@endforeach--}}
            {{--@foreach($sub_subject as $v)--}}
                {{--@if($v->subject_id == $s->subject3)--}}
                    {{--@foreach($levels as $level)--}}
                        {{--@if($v->level == $level->level)--}}
                            {{--<form action="{{url('student/examregister')}}" method="POST">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<input type="hidden" name="user_id" value="{{$s->user_id}}">--}}
                            {{--<input type="hidden" name="sub_subject_id" value="{{$v->id}}">--}}
                            {{--<tr>--}}
                                {{--<div class="form-group">--}}
                                {{--<td>{{$v->sub_subject_code}}</td>--}}
                                {{--<td>{{$v->sub_subject_name}}</td>--}}
                                {{--<td>--}}
                                {{--<button type="submit" class="btn btn-default">Register</button>--}}
                                {{--</div>--}}

                                {{--</td>--}}
                                {{--</form>--}}
                            {{--</tr>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            {{--@endforeach--}}

        {{--@endforeach--}}

    {{--@endif--}}

    {{--</tbody>--}}
{{--</table>--}}


<table align="center" border="1">
    <tr><th>No<th>Subject code<th>___Subject name___<th>____Date____<th>Signature of Candidate<th>Signature of Invigilator</th></tr>
    <tr><td>1</td><td>                   </td><td>                   </td><td>                    </td><td>                    </td><th>                 </th></tr>
    <tr><td>2</td><td>                   </td><td>                   </td><td>                    </td><td>                    </td><th>                 </th></tr>
    <tr><td>3</td><td>                   </td><td>                   </td><td>                    </td><td>                    </td><th>                 </th></tr>
    <tr><td>4</td><td>                   </td><td>                   </td><td>                    </td><td>                    </td><th>                 </th></tr>




</table>






