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
        return false;
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
            'topic' => 'required|max:255|unique:products',
            'details' => 'required',
            'option_a' => 'required|max:10',
            'stock' => 'required|max:6',
            'discount' => 'required|max:2'
        ];
    }
}
