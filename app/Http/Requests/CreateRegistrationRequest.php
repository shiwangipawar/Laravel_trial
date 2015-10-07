<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRegistrationRequest extends Request
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
            'emp_name' => 'required|min:3',
            'email' => 'required|unique:provider_regs|email',
            'phone' => 'required',
            'pass' => 'required|min:6',
            'conf_pass' => 'required|min:6|same:pass',
//            'pass' => 'required|min:6|confirmed',
//            'conf_pass' => 'required|min:6',

        ];
    }
}
