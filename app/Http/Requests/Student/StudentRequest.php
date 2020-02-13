<?php

namespace SMS\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

use Validator;

class StudentRequest extends FormRequest
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
            'LRN'=>['required'],
            'firstname'=>['required'],
            'lastname'=>['required'],
            'middlename' => ['required'],
            'register_date' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'gender' => ['required'],
            'birthday' => ['required'],
            'religion' => ['required'],
            'street_address' => ['required'],
            'city' => ['required'],
            'province'=>['required'],
            'mother_name'=>['required'],
            'mother_occupation'=>['required'],
            'father_name' => ['required'],
            'father_occupation' => ['required'],
            'guardian_lastname' => ['required'],
            'guardian_firstname' => ['required'],
            'guardian_middlename' => ['required'],
            'rel_student' => ['required'],
            'current_res' => ['required'],
            'guardian_rel' => ['required'],
            'mother_tounge'=>['required'],
            'dialects'=>['required'],
            'ethnicities'=>['required'],
            'cell_1' => 'required|min:11|numeric',
            'year_level_id' => ['required'],
        ];
    }
}
