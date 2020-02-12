<?php

namespace SMS\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'department'=>['required'],
            'firstname'=>['required'],
            'lastname'=>['required'],
            'middlename' => ['required'],
            'register_date' => ['required'],
            'username' => ['required'],
            'age' => ['required'],
            'password' => ['required'],
            'gender' => ['required'],
            'birthdate' => ['required'],
            'religion' => ['required'],
            'street_address' => ['required'],
            'city' => ['required'],
            'province'=>['required'],
            'cell_no' => ['required'],
            'school_graduated' => ['required'],
            'date_graduated' => ['required'],
            'handle_classes' => ['nullable']
        ];
    }
}
