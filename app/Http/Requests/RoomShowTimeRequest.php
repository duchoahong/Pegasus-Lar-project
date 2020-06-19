<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomShowTimeRequest extends FormRequest
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
            'Room_id' => 'required',
            'MovieID' => 'Bail|required',
            'TimeVal' => 'Bail|required',
            'DateBegin' => 'Bail|required',
            'DateEnd' => 'Bail|required',
        ];
    }
    public function messages() {
        return [
            'Room_id.required' => 'RoomName is required',
            'MovieID.required' => 'MovieName is required',
            'TimeVal.required' => 'TimeVal is required',
            'DateBegin.required' => 'DateBegin is required',
            'DateEnd.required' => 'DateEnd is required',
        ];
    }
}
