<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppartementsRequest extends FormRequest
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
           'wilaya'          =>'required',
           'ville'           =>'required|min:3|max:255',
           'rue'             =>'|min:3|max:255',
           'type_appartement'=>'required',
           'etage'           =>'required',
           'number_room'     =>'required',
           'etat'            =>'required',
           'prix'            =>'required',
           'description'     =>'required|min:20|max:500'
          // 'image1'         =>'required',
           //'image2'         =>'required',
          // 'image3'         =>'required'
        ];
    }
}
