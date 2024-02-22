<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountRequest extends FormRequest
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
            'title' => 'required',
            'count' => 'required',
            'desc' => 'required',
        ];
    }

    public function messages(){

        return [
        'title.required' => 'the title is null.',
        'count.required' => 'the count is null.',
        'desc.required' => 'the desc is null.',
        ];
    }
}
