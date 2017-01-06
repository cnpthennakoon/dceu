<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Result;
use App\Sub_Subject;
use App\User;
use ErrorException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class IndexStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notices1 = Notice::all();

        $id = Auth::user()->id;
        $levels = User::where('id', $id)->get();
        {
            try {
                $id = Auth::user()->id;
                $result = Result::where('user_id', $id)->get();
                $gpv = 0;
                $gpa = 0;
                $totCredits = 0;
                $x = 0;
                foreach ($result as $value) {
                    if ($value->marks > 74)
                        $gpv = 4;
                    elseif ($value->marks > 64)
                        $gpv = 3;
                    elseif ($value->marks > 50)
                        $gpv = 2;
                    elseif ($value->marks > 34)
                        $gpv = 1;
                    else
                        $gpv = 0;

                    $a = $value->sub_subject_id;
                    $credit = Sub_Subject::find($a);
                    $x += ($gpv * $credit->credit);
                    $totCredits += $credit->credit;
                }

                $gpa = $x / $totCredits;
                return view('student.index', compact('levels','notices1'))->with('gpa', $gpa);
            }
            catch(ErrorException $exception){
                $gpa=0;
                return view('student.index', compact('levels', 'notices1'))->with('gpa', $gpa);
            }
        }
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
