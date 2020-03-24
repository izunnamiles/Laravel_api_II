<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscussionRequest extends FormRequest
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
            'topic'=>'required|max 100',
            'details'=>'required',
            'option_a' => 'required|max:255|unique:products',
            'option_b' => 'required',
            'option_c' => 'required|max:10',
            'option_d' => 'required|max:6',
            'status' => 'required|max:2',
            'amount' => 'required|max:10'
        ];
    }
}

