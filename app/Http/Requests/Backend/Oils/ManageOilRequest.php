<?php

namespace App\Http\Requests\Backend\Oils;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ManageOilRequest extends Request
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
            //
        ];
    }
}
