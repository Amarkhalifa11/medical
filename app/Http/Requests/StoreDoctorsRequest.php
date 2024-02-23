<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorsRequest extends FormRequest
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
            'name'          => 'required',
            'image'         => 'required',
            'desc'          => 'required',
            'twitter'       => 'required',
            'instagram'     => 'required',
            'linkiden'      => 'required',
            'facebook'      => 'required',
            'department_id' => 'required',
        ];
    }

    public function messages(){

        return [
        'name.required'           => 'the name is null.',
        'image.required'          => 'the image is null.',
        'desc.required'           => 'the desc is null.',
        'twitter.required'        => 'the twitter is null.',
        'instagram.required'      => 'the instagram is null.',
        'linkiden.required'       => 'the linkiden is null.',
        'facebook.required'       => 'the facebook is null.',
        'department_id.required'  => 'the department_id is null.',
        ];
    }
}
