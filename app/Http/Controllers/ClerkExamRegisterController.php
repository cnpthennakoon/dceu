<?php

namespace App\Http\Controllers;

use App\ExamRegistation;
use App\Payment;
use App\Student;
use App\Sub_Subject;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ClerkExamRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('role_id', 4)->get();
        $std = Student::all();
        $sub_subject = Sub_Subject::all();
        $payments = Payment::all();
        $tot = 0;
        $arr = array();
        foreach ($user as $u) {
            $id = $u->id;
            $student = Student::where('user_id', $id);


            foreach ($student as $s) {
                foreach ($sub_subject as $v) {
                    if ($v->level == $u->level) {
                        if ($v->subject_id == $s->subject1_id) {
                            foreach ($payments as $pay) {
//
                                if ($pay->level == $v->level) {
                                    $tot += $pay->amount;
                                }
                            }
//                                $tot+=$price;
                        }
                    }
                }
            }
            foreach ($student as $s) {
                foreach ($sub_subject as $v) {
                    if ($v->level == $u->level) {
                        if ($v->subject_id == $s->subject2_id) {
                            foreach ($payments as $pay) {
//
                                if ($pay->level == $v->level) {
                                    $tot += $pay->amount;
                                }
                            }
//                                $tot+=$price;
                        }
                    }
                }
            }
            foreach ($student as $s) {
                foreach ($sub_subject as $v) {
                    if ($v->level == $u->level) {
                        if ($v->subject_id == $s->subject3_id) {
                            foreach ($payments as $pay) {
//
                                if ($pay->level == $v->level) {
                                    $tot += $pay->amount;
                                }
                            }
//                                $tot+=$price;
                        }
                    }
                }
            }
            array_push($arr, $id, $tot);

        }
        $subject = Sub_Subject::all();
        $payment = Payment::all();
        return view('dataEntry/examRegister/index', compact('std', 'subject', 'payment'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();
            ExamRegistation::create($input);
//            $request->session()->flash('alert-success', 'Registered!');
            return redirect('/dataEntry/examRegister/');
        } catch (QueryException $e) {
//            $request->session()->flash('alert-success', 'Already Registered!');
            return redirect('/dataEntry/examRegister/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::where('id',$id)->get();
        $sub_subject = Sub_Subject::all();
        return view('dataEntry.examSubjectStudent.index', compact('student','sub_subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id =  $request->input('user_id');
        $task = ExamRegistation::where('user_id',$id);
        $task->delete();
        return redirect('/dataEntry/examRegister/');
    }

}