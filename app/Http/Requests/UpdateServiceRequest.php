<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            'desc' => 'required',
            'icon' => 'required',
            'user_id' => 'required',
        ];
    }

    public function messages(){

        return [
        'title.required' => 'the title is null.',
        'desc.required' => 'the desc is null.',
        'icon.required' => 'the icon is null.',
        'user_id.required' => 'the user_id is null.',
        ];
    }
}
