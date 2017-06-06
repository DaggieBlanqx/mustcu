<?php

namespace App\Http\Requests\Backend\Oils;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOilRequest extends FormRequest
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
        $oil = $this->route('oil');
        return [
            'oil_name' => 'required|unique:oils,id,'.$oil->id
        ];
    }
}
