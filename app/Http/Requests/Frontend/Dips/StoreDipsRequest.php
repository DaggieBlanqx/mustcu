<?php

namespace App\Http\Requests\Frontend\Dips;

use Illuminate\Foundation\Http\FormRequest;

class StoreDipsRequest extends FormRequest
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
            'oil_id'=>'required',
            'dip_name'=>'required|unique:dips|max:64'
        ];
    }
}
