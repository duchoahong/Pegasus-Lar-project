<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieMasterRequest extends FormRequest
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
            'MovieName' => 'required',
            'producerTag' => 'Bail|required|',
            'Date_Premiere' => 'Bail|required|date',
            'Duration_Min' => 'Bail|required',
            'Title' => 'Bail|required',
            'Description' => 'required',
            'Status' => 'required|Integer',
            'directorTag' => 'required',
            'castTag' => 'Bail|required',
            'movieImage.*' => 'nullable|mimes:jpg,jpeg,png,bmp|max:2048'
        ];
    }
}
