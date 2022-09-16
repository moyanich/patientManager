<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientsRequest extends FormRequest
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
            'patient_no' => 'patientID|unique:patients',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'email' => 'sometimes|email',
            'dob' => 'required',
            'home_phone' => 'numeric', 
            'cell_number' => 'numeric',
            'registration_date' => 'required|date',
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
            'firstname.required' => 'First Name is required',
            'lastname.required' => 'Last Name is required',
            'registration_date.required' => 'Patient registration date is required',
            'dob.required' => 'The Date of Birth field is required',
            'home_phone.numeric' => 'Phone number must be a number',
            'home_phone.max' => 'Phone number must not be greater than 10',
            'cell_number.numeric' => 'Mobile phone must be a number',
            'cell_number.max' => 'Mobile phone  must not be greater than 10',
            /*'education.required' => 'An Education Type is required',
            'school.required' => 'An Institution is required',
            'course.required' => 'Course Name is required',
            'start.required' => 'Start Date is required',
            'end.date' => 'End date is not a valid date',
            'end.after_or_equal' => 'End date must be a date after or equal to start.', */
        ];
    }
}
