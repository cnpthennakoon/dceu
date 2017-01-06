<?php

namespace App\Http\Controllers;

use App\AlSubject;
use App\new_registration;
use App\Student;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class SelectStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = \Request::get('search');

        $students = new_registration::where('batch', 'like', '%'.$search.'%')->orderBy('id')->paginate(8);
//        $students = new_registration::all();

        $statuses = User::where('role_id', 4)->get();

        return view('admin.select.index', compact('students', 'statuses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $alsubjects = AlSubject::lists('name', 'id')->all();

        return view('admin.select.select', compact('alsubjects'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $input['password'] = bcrypt($request->password);

        $student = Student::create($input);

        $input['student_id'] = $student->id;

        User::create($input);

//        Mail::send('admin.select.email', ['name' => $input['english_name']], function ($message, $input) {
//
//            $message->to($input['email'], $input['english_name'])->subject('DCEU - Ruhuna');
//        });

        Mail::send('admin.select.email', ['email' => $input['email']], function ($message) use ($input) {

            $message->to($input['email'], 'sample guy')->subject('DCEU - Ruhuna');
        });


        return redirect('/admin/select');

//        return $request->all();

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
        $student = new_registration::findOrFail($id);

        $alsubjects = AlSubject::lists('name', 'id')->all();

        return view('admin.select.edit', compact('student', 'alsubjects'));
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
        $student = new_registration::findOrFail($id);

        $input = $request->all();

        $student->update($input);

        return redirect('/admin/select');
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
