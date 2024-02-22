<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ];
    }

    public function messages(){

        return [
        'name.required' => 'the title is null.',
        'image.required' => 'the count is null.',
        'desc.required' => 'the desc is null.',
        ];
    }
}
