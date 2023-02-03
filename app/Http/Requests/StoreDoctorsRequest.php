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
            'email' => 'sometimes|email',
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
           // 'registration_date.required' => 'Patient registration date is required',
            
            //'home_phone.numeric' => 'Phone number must be a number',
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
