<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientsRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            //'dob' => 'required',
            //'gender' => 'required',
            'email' => 'sometimes|email',
            'work_email' => 'sometimes|email',
            'homephone' => 'size:10', 
            'cellnumber' => 'size:10',
            'workphone' => 'size:10',
            'trn' => [
                'nullable',
                'max:9',
                Rule::unique('patients', 'trn')
                ->ignore($this->patient)
            ],
            'nis' => [
                'nullable',
                'max:9',
                Rule::unique('patients', 'nis')
                ->ignore($this->patient),
            ],
            
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //'registration_date.required' => 'Patient registration date is required',
            
            'homephone.size' => 'Phone number must have 10 numbers',
            'cellnumber' => 'Phone number must have 10 numbers',
            'workphone' => 'Phone number must have 10 numbers',

            //'home_phone.max' => 'Phone number must not be greater than 10',
           // 'cell_number.max' => 'Mobile phone  must not be greater than 10',
            /*'education.required' => 'An Education Type is required',
            'school.required' => 'An Institution is required',
            'course.required' => 'Course Name is required',
            'start.required' => 'Start Date is required',
            'end.date' => 'End date is not a valid date',
            'end.after_or_equal' => 'End date must be a date after or equal to start.', */
        ];
    }
}
