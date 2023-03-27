<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email_address' => 'required',
            'position' => 'required',
            'depart_id' => 'required',
            'college' => 'required',
            'gender' => 'required',
            'national_id' => 'required',
            'university_id' => 'required',
            'address' => 'required',
            'tel_number' => 'required',
        ];
    }
}
