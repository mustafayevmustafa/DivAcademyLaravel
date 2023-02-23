<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutCreateRequest extends FormRequest
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
            'status'=>'required|in:"0", "1"',
            'slug'=>'required|string|max:255|unique:abouts,slug',
            'icon_title'=>'required|string|max:50',
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'content'=>'required|string',
            'icon'=>'required|image',
        ];
    }
}
