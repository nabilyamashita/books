<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassesCreateRequest extends FormRequest
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
            'teacher_id' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'teacher_id' =>'teacher',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'kolom kelas wajib diisi',
            'teacher_id.required' => 'kolom teacher wajib diisi',
        ];
    }
}

