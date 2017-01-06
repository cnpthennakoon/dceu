<?php

namespace App\Http\Controllers;

use App\new_registration;
use App\Notice;
use ConsoleTVs\Charts\Charts;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexDataEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notices1 = Notice::all();


        $chart2 = Charts::database(new_registration::all(),'bar', 'highcharts')
            ->setTitle('Applied Students for the Degree Programme in past years')
            ->groupBy('batch')
            ->setElementLabel('Number of Students')
            ->setWidth(0)
            ->setHeight(450)
            ->setResponsive(false);

        return view('dataEntry.index', compact('chart2', 'notices1'));
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
