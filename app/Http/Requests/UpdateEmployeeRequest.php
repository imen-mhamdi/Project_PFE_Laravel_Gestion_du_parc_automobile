<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateEmployeeRequest extends FormRequest
{
    public function rules()
    {
        return [
           
           
            'adresse' => [
               
                'required',
            ],
          
          

            'tel' => [
                'required',
               
            ],
          
        ];
    }

   
}