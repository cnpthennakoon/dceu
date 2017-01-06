<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainSubjectRequest;
use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminMainSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('admin.mainSubjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::lists('subject_code','subject_name')->all();

        return view('admin.mainSubjects.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainSubjectRequest $request)
    {
        //        User::create($request->all());

        $input = $request->all();

        Subject::create($input);

//        Session::flash('created_subjects', 'Subject added successfully');

        return redirect('/admin/mainSubjects');

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
    public function update(MainSubjectRequest $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $input = $request->all();


        $subject->update($input);

        //Session::flash('updated_user', 'User updated successfully');

        return redirect('/admin/users');
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
