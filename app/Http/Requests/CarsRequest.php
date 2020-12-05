<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
           'cars'           =>'required|min:3|max:255',
           'marque'         =>'required',
           'energie'        =>'required',
           'number_port'    =>'required',
           'couleur'        =>'required|min:3|max:255',
           'kilometrage'    =>'required',
           'abs'            =>'required',
           'gps'            =>'required',
           'climatisation'  =>'required',
           'matricule'      =>'required|min:3|max:255',
           'prix'           =>'required',
           'etat'           =>'required',
           'description'    =>'required|min:20|max:500'
          // 'image1'         =>'required',
           //'image2'         =>'required',
          // 'image3'         =>'required'
        ];
    }
}
