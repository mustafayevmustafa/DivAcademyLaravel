<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewUpdateRequest extends FormRequest
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
            'status' => 'required|in:"0", "1"',
            'fullname' => 'required|string|max:50',
            'profession' => 'required|string|max:250',
            'content' => 'required|string',
            'image' => 'nullable|image',
        ];
    }
}
