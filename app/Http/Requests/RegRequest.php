<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'english_name'=> 'required',
            'dob'=> 'required',
//            'nic'=> 'required|numeric|size:9',
            'gender'=> 'required',
//            'telhome' => 'required|numeric|size:10',
//            'telmob'=> 'required|numeric|size:10',
            'district'=> 'required',
            'address1'=> 'required',
            'address2'=> 'required',
            'postalcode'=> 'required',
            'email'=> 'required',

            'degree'=>'required',
            'batch'=> 'required',
            'subject1'=> 'required',
            'subject2'=> 'required',
            'subject3'=> 'required',
            'examcenter'=> 'required',

            'almedium'=> 'required',
            'alyear'=> 'required',
            'alindexno'=> 'required',
            'alsubject1'=> 'required',
            'alsubject2'=> 'required',
            'alsubject3'=> 'required',

        ];
    }

    public function messages()
    {
        return [

            'english_name.required' => 'English Name field is required',
            'dob.required' => 'Date of Birth field is required',
            'nic.required' => 'NIC No field is required',
            'nic.size' => 'NIC Number must be exactly 9 values',
            'gender.required' => 'Gender field is required',
            'district.required' => 'District field is required',
            'address1.required' => 'Address Line 1 field is required',
            'address2.required' => 'Address Line 2 field is required',
            'telhome.required' => 'Telephone Number-Home field is required',
            'telhome.size' => 'Telephone Number-Home must be exactly 10 values',
            'telmob.required' => 'Telephone Number-Mobile field is required',
            'telmob.size' => 'Telephone Number-Mobile must be exactly 10 values',

            'degree.required' => 'Degree field is required',
            'batch.required' => 'Academic Batch field is required',
            'subject1.required' => 'Subject 1 field is required',
            'subject2.required' => 'Subject 2 field is required',
            'subject3.required' => 'Subject 3 field is required',
            'examcenter.required' => 'Prefered Exam Center field is required',

            'almedium.required' => 'A/L Exam Medium field is required',
            'alyear.required' => 'A/L Year field is required',
            'alindexno.required' => 'A/L Index No field is required',
            'alsubject1.required' => 'A/L Subject 1 field is required',
            'alsubject2.required' => 'A/L Subject 2 field is required',
            'alsubject3.required' => 'A/L Subject 3 field is required',



        ];
    }
}
