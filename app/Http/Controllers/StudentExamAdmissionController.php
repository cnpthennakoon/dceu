<?php

namespace App\Http\Controllers;

use App\Student;
use App\Sub_Subject;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class StudentExamAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $id = Auth::user()->id;
//        $u2=User::where('id',$id)->get();
//        return view('student.pdfAdm.index', compact('u2'));
//        return view('student.pdfAdm.index');
        $id = Auth::user()->id;
        $levels = User::where('id', $id)->get();
        $stid=User::where('id',$id)->value('student_id');
        $student=Student::where('id',$stid)->get();
        $sub_subject = Sub_Subject::all();
//        $payments=Payment::all();

        $tot=0;
        $price=0;
        if ($student) {
            foreach ($student as $s) {
                foreach ($sub_subject as $v) {
                    if ($v->level == Auth::user()->level) {
                        if ($v->subject_id == $s->subject1) {
//                            foreach ($payments as $pay){
////
//                                if($pay->level==$v->level){
////                                    $tot+=$pay->amount;
//                                }
//                            }
//                            $tot+=$price;
                        }
                    }
                }
            }
            foreach ($student as $s) {
                foreach ($sub_subject as $v) {
                    if ($v->level == Auth::user()->level) {
                        if ($v->subject_id == $s->subject2) {
//                            foreach ($payments as $pay){
//                                if($pay->level==$v->level){
////                                    $tot+=$pay->amount;
//                                }
//                            }
////                                $tot+=$price;
                        }
                    }
                }
            }
            foreach ($student as $s) {
                foreach ($sub_subject as $v) {
                    if ($v->level == Auth::user()->level) {
                        if ($v->subject_id == $s->subject3) {
//                            foreach ($payments as $pay){
//                                if($pay->level==$v->level){
////                                    $tot+=$pay->amount;
//                                }
//                            }
////                                $tot+=$price;
                        }
                    }
                }
            }
        }

        return view('student.pdfAdm.index', compact('student','sub_subject','levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
