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
            'email' => 'email',
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
            'registration_date' => 'Patient registration date is required',
            /*'education.required' => 'An Education Type is required',
            'school.required' => 'An Institution is required',
            'course.required' => 'Course Name is required',
            'start.required' => 'Start Date is required',
            'end.date' => 'End date is not a valid date',
            'end.after_or_equal' => 'End date must be a date after or equal to start.', */
        ];
    }
}
