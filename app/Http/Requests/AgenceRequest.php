<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgenceRequest extends FormRequest
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
            'name'        => 'required|min:3|max:255',
            'wilaya'      => 'required|min:3|max:255',
            'ville'       => 'required|min:3|max:255',
            'type_agence' => 'required|min:3|max:255',
            'num_tlfn'    => 'required|min:9|max:14',
            'email'       => 'required|min:3|max:255|email',
            'num_reg'     => 'required|min:3|max:255',
            //'fb'          => 'url',
            //'insta'       => 'url',
            //'twitter'     => 'url',
            'password'    => 'required|string|min:8|confirmed',
            //'description'      => 'required|min:50|max:255'
        ];
    }
}
