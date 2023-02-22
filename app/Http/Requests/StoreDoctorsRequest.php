<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorsRequest extends FormRequest
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
            'employee_no' => 'required|unique:doctors,employee_no|max:24',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|sometimes|email',
            'dob' => 'nullable|sometimes|date',
            'contact_1'=> 'nullable|numeric',
            'contact_2'=> 'nullable|numeric',
            'kin_email' => 'nullable|sometimes|email',
            'kin_phone' => 'nullable|numeric',
            'departments' => 'required',
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
            'kin_email.numeric' => 'Emergency contact email address must be valid',
            'kin_phone.numeric' => 'Emergency contact phone number must be a number',

            /*
            'registration_date.required' => 'Patient registration date is required',            
            'home_phone.numeric' => 'Phone number must be a number',
            'home_phone.max' => 'Phone number must not be greater than 10',
            'cell_number.max' => 'Mobile phone  must not be greater than 10',
            'education.required' => 'An Education Type is required',
            'school.required' => 'An Institution is required',
            'course.required' => 'Course Name is required',
            'start.required' => 'Start Date is required',
            'end.date' => 'End date is not a valid date',
            'end.after_or_equal' => 'End date must be a date after or equal to start.', */
        ];
    }
}
