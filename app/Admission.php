<?php

namespace App;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $guarded = ['id'];


    public static function rules($update = false, $id = null)
    {
        $common = [
            'firstname'         => 'required',
            'applicant_email'   => "nullable|email|unique:admissions,applicant_email,$id",
            'applicant'         => Rule::in(['father', 'mother', 'guardian']),
            'gender'            => Rule::in(['male','female']),
            'national_id'       => 'nullable|numeric',
            'passportnumber'    => 'nullable|numeric',
            'fathermobile'      => 'nullable|numeric',
            'fatheremail'       => "nullable|email|unique:admissions,fatheremail,$id",
            'mothermobile'      => 'nullable|numeric',
            'motheremail'       => "nullable|email|unique:admissions,motheremail,$id",
            'guardian_mobile'   => 'nullable|numeric',
            'guardian_email'    => "nullable|email|unique:admissions,guardian_email,$id",
            'filename'          => 'nullable|mimes:jpeg,jpg,png,pdf|max:10000',

        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'applicant_email'   => "nullable|email|unique:admissions",
            'fatheremail'       => "nullable|email|unique:admissions",
            'motheremail'       => "nullable|email|unique:admissions",
            'guardian_email'    => "nullable|email|unique:admissions",
        ]);
    }
}
