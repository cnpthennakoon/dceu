<?php

namespace App\Http\Controllers;


use App\AlSubject;
use App\Examination_Center;
use App\Http\Requests\RegRequest;
use App\new_registration;
use App\Reg;
use App\Subject;
use Illuminate\Http\Request;


use App\Http\Requests;

class Registration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st = Reg::get();

//        return $st;
foreach ($st as $val){
    if($val->value == 1) {

        $subs = Subject::pluck('subject_name', 'id');

        $excenters = Examination_Center::pluck('name', 'id');

        $alsubjects = AlSubject::pluck('name', 'id');

        return view('registration_form', compact('subs', 'excenters', 'alsubjects'));

    }else{
        return view('registration_close');

    }


}}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('registration_form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\RegRequest $request)
    {
        new_registration::create($request->all());

        return view('store');

//        return $request;

    }

    public function messages()
    {
        return [
            'first_name.required' => 'The First Name is required',
            'last_name.required'  => 'The Last Name is required',
        ];
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
