<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubSubjectsRequest;
use App\Sub_Subject;
use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminSubSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Sub_Subject::all();
        return view('admin.subSubjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainsubjects=Subject::all();
        $subjects = Sub_Subject::lists('sub_subject_code','sub_subject_name','subject_id','level','credit')->all();

        return view('admin.subSubjects.create', compact('subjects','mainsubjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubSubjectsRequest $request)
    {
        //        User::create($request->all());


        $input = $request->all();

        Sub_Subject::create($input);

//        Session::flash('created_subjects', 'Subject added successfully');

        return redirect('/admin/subSubjects');

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
