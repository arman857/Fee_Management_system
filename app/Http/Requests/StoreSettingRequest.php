<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        //     'Company_Name' => 'required',
        //     'Logo'  =>'required',
        //     'Email'  =>'required',
        //     'Phone'  =>'required',
        //     'Description'=>'required',
        //     'Facebook_Link'=>'required',
        //     'Twitter_link'=>'required',
        //    'Instagram_Link'=>'required',
        //    'Linkedin_Link'=>'required',

        ];
    }
}


