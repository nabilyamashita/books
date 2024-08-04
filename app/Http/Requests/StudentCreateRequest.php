<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
        'nis' => 'unique:student|max:4|required',
        'name' => 'max:50|required',
        'gender' =>'required',
        'class_id' => 'required'
        ];
    }

    public function attributes()
    {
        return [
           'class_id'  => 'class',
        ];
    }

    public function messages()
    {
        return [
          'nis.required' => 'NIS wajib diiisi' ,
          'nis.max' => 'NIS maksimal :max karakter ' ,
          'name.required' => 'name wajib diisi',
          'gender.required' => 'gender wajib diisi' ,
          'class_id.required' => 'class wajib diisi',
        ];
    }

}
