<?php

namespace ServiceBoiler\Prf\Site\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use ServiceBoiler\Prf\Site\Rules\DistributorSaleExcelLoad;

class DistributorSaleExcelRequest extends FormRequest
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
            case 'POST': {
                return [
                    'path' => [
                        'required',
                        'mimes:xls,xlsx',
                        'max:' . config('site.files.size', 8092),
                        new DistributorSaleExcelLoad
                    ],
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
        return [
            'path.required' => trans('site::storehouse_product.error.load.empty'),
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [];
    }
}
