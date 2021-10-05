<?php

namespace ServiceBoiler\Prf\Site\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AcademyTestRequest extends FormRequest
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

        switch ($this->method()) {
            case 'PUT':
            case 'PATCH':
            case 'POST': {
                return [
                    'academyTest.name'      => 'required|string|max:255',
                ];
            }
            default:
                return [];
        }
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'academyTest.name'      => trans('site::admin.name_long'),
        ];
    }
}
