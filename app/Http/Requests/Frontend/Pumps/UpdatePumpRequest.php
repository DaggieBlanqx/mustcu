<?php

namespace App\Http\Requests\Frontend\Pumps;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePumpRequest extends FormRequest
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
        $pump = $this->route('pump');
        return [
            //'dip_id'=>'required|unique:pumps,id,'.$pump->dip_id,
            'pump.rate'=>'required',
            'pump.pump_name'=>'required|unique:pumps,id,'.$pump->dip_id
        ];
    }
}
