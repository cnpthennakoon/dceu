<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class ResultsExcelController extends Controller
{
    public function getImport(){

        return view('clerk.results.import_results');

    }

    public function postImport(){

        Excel::load(Input::file('file'), function ($reader){

            $reader -> each(function ($sheet){

                foreach($sheet->toArray() as $row){

                    Result::firstOrCreate($sheet->toArray());

                }

            });

        });

        echo "success";

    }
}
